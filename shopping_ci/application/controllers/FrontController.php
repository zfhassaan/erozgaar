<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontController extends CI_Controller {


	public function index($index=0)
	{
		$this->load->model("shopping_cart_model");

		$data["product"]= $this->shopping_cart_model->fetch_all();
		/*Title of the page: $data['data name']='Data value';*/
		$data['title'] = "k-beats";
		$this->load->view('index',$data);
	}

}
