<?php
class Admin_controller extends CI_controller{
	public function __construct(){
		parent::__construct();
		$view_msg = array();
		$this->load->library('form_validation');
		$this->load->model('prod_model');
		$this->load->library('upload');
		$this->load->library('image_lib');
	}
	public function index(){
		$this->load->view('admin/index_view');
	}
	public function dashboard(){
		$this->load->view('admin/dashboard_view');
	}
	public function productAdd(){
		$view_msg['msg'] = "";
		$this->load->view('addproducts_view',$view_msg);
	}
	public function add_product(){
		$this->form_validation->set_rules('pname','pname','trim|required|alpha_numeric_spaces',array('required'=>'Product Name is required','alpha_numeric_spaces'=>'Only alphabets are allowed'));
		$this->form_validation->set_rules('pcode','pcode','trim|required',array('required'=>'Product Code is required'));
		$this->form_validation->set_rules('mrp','mrp','trim|required|numeric',array('required'=>'Product MRP is required','numeric'=>'Only numeric values'));
		$this->form_validation->set_rules('sp','sp','trim|required|numeric',array('required'=>'Product SP is required','numeric'=>'Only numeric values'));
		$this->form_validation->set_rules('stock','stock','trim|required|numeric',array('required'=>'Product Stock is required','numeric'=>'Only numeric values'));
		$this->form_validation->set_rules('pfeatures','pfeatures','trim');
		$this->form_validation->set_rules('pdisc','pdisc','trim');
		if($this->form_validation->run()){
			extract($_POST);
			$config['upload_path'] = "uploads/";
			$config['allowed_types'] = "jpeg|png|jpg|gif";
			$config['file_name'] = rand(1000,9999);
			$this->upload->initialize($config);
			$resp = $this->upload->do_upload('pimg');
			
			if($resp){
				$file_name = $this->upload->data('file_name');
				$thumb_file_name = $this->get_thumb_file_name($file_name);
				$this->resize_image($file_name);
				$this->watermark_image($file_name);
				$prod_data = array(
					'prod_name'=>ucwords($pname),
					'prod_code'=>$pcode,
					'prod_mrp'=>$mrp,
					'prod_sp'=>$sp,
					'prod_stock'=>$stock,
					'prod_image'=>$file_name,
					'prod_thumb_image'=>$thumb_file_name,
					'prod_features'=>ucwords($pfeatures),
					'prod_description'=>ucwords($pdisc)
				);
				$resp = $this->prod_model->product_model($prod_data);
				if($resp == 1)
					redirect('home_controller');
				else if($resp == 2)
					echo "not inserted";
				else if($resp == 3){
					$view_msg['msg'] = "Product already Present";
					$this->load->view('addproducts_view',$view_msg);
				}
			}
			else{
				echo "Not Uploaded";
				echo $this->upload->display_errors();
			}
		}
		else{
			$this->form_validation->set_error_delimiters('<td style="color:red">','</td>');
			$view_msg['msg'] = "";
			$this->load->view('addproducts_view',$view_msg);
		}
	}
	public function get_thumb_file_name($file_name){
		$temp_array = explode(".",$file_name);
		$temp_array[0] = $temp_array[0]."_thumb";
		return implode(".",$temp_array);
	}
	public function resize_image($file_name){
		//$data = $this->upload->data();
		$config['image_library'] = 'gd2';
		$config['source_image'] = "uploads/".$file_name;
		//$config['create_thumb'] = TRUE; OR
		$config['new_image'] = "uploads/".$this->get_thumb_file_name($file_name);
		$config['maintain_ratio'] = FALSE;
		$config['quality'] = '100%';
		$config['width'] = 268;	
		$config['height'] = 249;
		$this->image_lib->initialize($config);
		$this->image_lib->resize();
		$this->image_lib->clear();//Most imp function sir forgot to teach..saved my life..lol
	}
	public function watermark_image($file_name){
		//$data = $this->upload->data();
		$config['source_image'] = "uploads/".$file_name;
		$config['wm_type'] = "overlay";
		$config['wm_overlay_path'] = "uploads/logo_watermark.png";
		$config['wm_vrt_alignment'] = "top";
		$config['wm_hor_alignment'] = "right";
		//$config['padding'] = 10;
		$this->image_lib->initialize($config);
		$this->image_lib->watermark();
		$this->image_lib->clear();
	}
	public function read_products(){
		$result_set = $this->prod_model->get_products();
		$data['resultset'] = $result_set;
		$this->load->view('index_view',$data);
	}
}

?>