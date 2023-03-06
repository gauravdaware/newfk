<?php
class Home_controller extends CI_controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('prod_model');
		$this->load->library('session');
	}
	public function index(){
		$result_set = $this->prod_model->get_products();
		$data['resultset'] = $result_set;
		$this->load->view('index_view',$data);
	}
	public function checkout(){
		$this->load->view('checkout_view');
	}
	public function page_not_found(){
		$this->load->view('404_view');
	}
	public function admin(){
		$this->load->view('admin/index_view');
	}
	public function dashboard(){
		$this->load->view('admin/dashboard_view');
	}
}
?>