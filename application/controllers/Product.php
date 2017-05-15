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
		$this->load->view('product/view', $data);
		
	}
	
	public function create()
	{
		$data['title'] = 'Add your product here:';
		// load helper and library
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		// validate
		$this->form_validation->set_rules('product_name', 'Product Name', 'required');
	    $this->form_validation->set_rules('product_detail', 'Product Detail', 'required');

	    // upload file config


	    if ($this->form_validation->run() === FALSE)
		{
	     	

			$this->load->view('product/create',$data);

		}
		else
		{

			$this->products->set_product();
	        $this->load->view('product/success',$data);


		}


	    
	}

	
}
