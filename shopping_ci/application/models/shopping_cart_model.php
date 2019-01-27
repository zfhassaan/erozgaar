<?php
class shopping_cart_model extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function fetch_all(){
		return $this->db->get('product')->result();
	}

	function find($product_id){
		$this->db->where('product_id',$product_id);
		return $this->db->get('product')->row();
	}
}