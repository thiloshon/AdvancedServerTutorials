<?php

/**
 * Created by IntelliJ IDEA.
 * User: Thiloshon
 * Date: 01-Nov-18
 * Time: 7:59 PM
 */
class Products extends CI_Controller
{
    public function index(){
        $this->load->view('product_lookup');
    }

}