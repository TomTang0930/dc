<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('products');
	}

	public function index()
	{
		$data['products'] = $this->products->get_products();
		$this->load->view('product/all_product', $data);
		
	}
	
	public function edit()
	{
		$this->load->view('product/edit_product');
	}

	
}
