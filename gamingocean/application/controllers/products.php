<?php 
class Products extends CI_Controller {

	public function index()
	{
        
        //Get all products
        $data['products']=$this->Product_model->get_products();

		//Load views
        $data['main_content']='products';
        $this->load->view('layouts/main', $data);
	}

    public function details($id)
	{
        
        //Get all products
        $data['product']=$this->Product_model->get_product_details($id);

		//Load views
        $data['main_content']='details';
        $this->load->view('layouts/main', $data);
	}

	
}

