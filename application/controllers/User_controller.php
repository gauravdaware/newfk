<?php
class User_controller extends CI_controller{
	public function __construct(){
		parent::__construct();
		$view_msg = array();
		$this->load->library('form_validation');
		$this->load->model('user_model');
		$this->load->library('session');
	}
	
	public function login(){
		//echo $this->session->userdata('username');exit;
		if(empty($this->session->userdata('username'))){
			$view_msg['msg'] = "";
			$this->load->view('login_view',$view_msg);
		}
		else{
			redirect('Home_controller');
		}
	}
	public function login_chk(){
		$this->form_validation->set_rules('login_email','email','trim|required|valid_email',array('required'=>'Email is required','valid_email'=>'Invalid email'));
		$this->form_validation->set_rules('login_password','password','required',array('required'=>'Password is required'));
		if($this->form_validation->run()){
			extract($_POST);
			if(isset($login)){
				$login_date = date('Y-m-d H:i:s');
				$login_data = array(
					'user_email'=>$login_email,
					'user_password'=>md5($login_password),
					'user_last_login'=>$login_date
				);
				$result = $this->user_model->user_login($login_data);
				$count = $result->num_rows();
				if($count==1){
					$row = $result->row();
					$session_data = array(
						'username'=>$row->user_name,
						'useremail'=>$row->user_email
					);
					//print_r($session_data);exit;
					$this->session->set_userdata($session_data);
					redirect('Home_controller');
				}
				else{
					$view_msg['msg'] = "";
					$view_msg['msg_login'] = "Invalid email or password";
					$this->load->view('login_view',$view_msg);
				}
			}
		}
		else{
			$view_msg['msg'] = "";
			$this->form_validation->set_error_delimiters('<span style="color:red">','</span>');
			$this->load->view('login_view',$view_msg);
		}
	}
	public function register_now(){
		//$view_msg = array();
		//$this->load->library('form_validation');
		$this->form_validation->set_rules('uname','name','trim|required|alpha',array('required'=>'Name is required','alpha'=>'Only alphabets are allowed'));
		$this->form_validation->set_rules('uemail','email','trim|required|valid_email',array('required'=>'Email is required','valid_email'=>'Invalid email'));
		$this->form_validation->set_rules('umobile','mobile','trim|required|numeric|exact_length[10]',array('required'=>'Mobile is required','numeric'=>'Enter only numbers','exact_length'=>'Mobile Should be 10 digits'));
		$this->form_validation->set_rules('upassword','password','required|min_length[6]',array('required'=>'Password is required','min_length'=>'Minimum Password Length is 6'));
		
		if($this->form_validation->run()){
			extract($_POST);
			if(isset($register)){
				/*Array in the form of keys as db columns and values form input type names*/
				$data = array(
							'user_name'=>$uname,
							'user_email'=>$uemail,
							'user_mobile'=>$umobile,
							'user_password'=>md5($upassword)
							);
				$condition = array('user_email'=>$uemail);
				//$this->load->model('user_model');
				$resp = $this->user_model->user_register($data,$condition);
				//$view_msg = array();
				if ($resp == 1){
					$view_msg['msg'] = "Registration Successful";
					$this->load->view('login_view',$view_msg);
				}
				else if ($resp == 2){
					$view_msg['msg'] = "Registration Failed";
					$this->load->view('login_view',$view_msg);
				}
				else if($resp == 3){
					$view_msg['msg'] = "Email already exist";
					$this->load->view('login_view',$view_msg);
				}
			}
			else
				echo "Invalid Request";
		}
		else{
			$view_msg['msg'] = "";
			$this->form_validation->set_error_delimiters('<span style="color:red">','</span>');
			$this->load->view('login_view',$view_msg);
		}
	}
	public function logout()
	{
			session_destroy();
	}
}

?>