
<?php

// Products Model using traditional query structures 
class products_model extends CI_Model {
    function __construct()
    {
       parent::__construct();
       $this->load->database();
    }
 
    function Lookup($product_type)
    {	 
		echo 'product_type is ' . $product_type;
		
		
		//$query = $this->db->query('SELECT * from products where product_type = \'car\'');
		
		$query = $this->db->query('SELECT * from products where product_type = \'' . $product_type . ' \' ');

		foreach ($query->result() as $row)
		{
			//echo $row->product_type;
			//echo $row->product_name;
			$data[] = $row->product_name;
			$data[] = $row->product_type;
		}

		echo ' Total Results: ' . $query->num_rows();

		return $data;
    }
}       
   
?>   