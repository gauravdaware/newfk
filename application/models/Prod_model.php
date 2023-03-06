<?php
class Prod_model extends CI_model{
	function product_model($pdata){
		$this->db->select('prod_name');
		$this->db->where('prod_name',$pdata['prod_name']);
		$result = $this->db->get('fk_products_tbl');
		$count = $result->num_rows();
		if ($count==0){
			$resp = $this->db->insert('fk_products_tbl',$pdata);
			if($resp)
				return 1;
			else
				return 2;
		}
		else
			return 3;
	}

	function get_products(){
		$this->db->select('prod_name,prod_sp,prod_image,prod_thumb_image');
		$this->db->order_by('prod_id','desc');
		$result=$this->db->get('fk_products_tbl');
		return $result;
	}
}
?>