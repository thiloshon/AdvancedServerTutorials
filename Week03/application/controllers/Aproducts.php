<?php

class aproducts extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('aproducts_model');
    }

    public function index()
    {
        $this->load->view('Aproduct_lookup_view');
    }

    public function FindProduct()
    {
        $ptype = $this->input->post('product_type');

        // echo 'FindProduct Called Name is ' . $ptype . '<br>';

        $result = $this->aproducts_model->Lookup($ptype);

        //echo 'FindProduct Returned array is '  . '<br>';

        $data['products'] = $result;
        $this->load->view('aproducts_display_view', $data);
    }
}

?>     