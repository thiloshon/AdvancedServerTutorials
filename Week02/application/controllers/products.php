<?php

/**
 * Created by IntelliJ IDEA.
 * User: Thiloshon
 * Date: 01-Nov-18
 * Time: 7:59 PM
 */
class Products extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
    }

    public function index(){
        $this->load->view('product_lookup');
    }

    function find(){
        // Methods to access GET
        //echo $_GET["PRODUCT_TYPE"];
        // echo $this->input->get('PRODUCT_TYPE');
        $type = $this->input->get('PRODUCT_TYPE');

        //Here or at constructor
        //$this->load->model('product_model');
        $products = $this->product_model->lookup($type);


        $answer['products'] = $products;
        $this->load->view('product_display', $answer);
    }
}