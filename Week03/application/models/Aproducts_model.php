<?php

class aproducts_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function Lookup($product_type)
    {

        // $cars=array("Volvo","BMW","Toyota");
        // $bikes=array("Ducati","BSA","Harley");

        if ($product_type == null || $product_type == '') {
            return false;
        }

        // echo 'lookup Called Name is ' . $product_type . '<br>';

        if ($product_type == 'car') {
            // Traditional Queries
            $cars = $this->db->query('select * from products where product_type="car"');
            $data = array();
            foreach ($cars->result() as $row) {
                $entry = array();
                $entry['prd'] = $row->product_name;
                $data[] = $entry;
            }

            return $data;
        }

        if ($product_type == 'bike') {

            // CI Loader Class
            $this->db->where('product_type', 'bike');
            $res = $this->db->get('products');

            $data = array();
            foreach ($res->result() as $row) {
                $entry = array();
                $entry['prd'] = $row->product_name;
                $data[] = $entry;
            }
            $res->free_result();

            return $data;
        }
    }

    function LookupGenre($genre_type)
    {
        $this->db->where('type', $genre_type);
        $res = $this->db->get('genbooks');

        $data = array();

        // foreach ($query->result('User') as $user) direct to model
        foreach ($res->result_array() as $row) {
            /*$entry = array();
            $entry['title'] = $row->title;*/
            $data[] = $row;
        }
        $res->free_result();

        return $data;
    }
}

?>   