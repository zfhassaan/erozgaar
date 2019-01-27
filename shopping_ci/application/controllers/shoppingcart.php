<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShoppingCart extends CI_Controller {

	public function add($product_id){
		$this->load->model("shopping_cart_model");
		$this->load->helper('form');

		$product = $this->shopping_cart_model->find($product_id);
		$data = array(
			"id" => $product->product_id,
			"name" => $product->product_name,
			"qty" => 1,
			"price" => $product->product_price,
			"options"=> array('image' =>$product->product_image)
		);
		$this->cart->insert($data);
		redirect('/','refresh');

	}

	public function delete($rowid){
		$this->cart->update(array('rowid'=>$rowid,'qty'=>0));

		redirect('/','refresh');
	}
}
