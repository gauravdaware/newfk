<?php
class User_model extends CI_model{
	public function user_register($pdata,$pcondition){
		//$this->load->database();//this is manual loading of database connections
		//for autoloading change $autoload['libraries'] = array('database'); in autoload file in application/config/autoload.php
		$this->db->select('user_email');
		$this->db->from('fk_usersignup_tbl');
		$this->db->where('user_email',$pcondition['user_email']);
		$result_set = $this->db->get();
		$count = $result_set->num_rows();
		if($count>0){
			return 3;
		}
		else{
		$resp = $this->db->insert('fk_usersignup_tbl',$pdata);
		if($resp)
			return 1;
		else
			return 2;
		}
		
	}
	public function user_login($ldata){
		$this->db->select('user_id,user_name,user_email');
		$this->db->from('fk_usersignup_tbl');
		$this->db->where('user_email',$ldata['user_email']);
		$this->db->where('user_password',$ldata['user_password']);
		$result_set=$this->db->get();
		return $result_set;
	}
}
?>