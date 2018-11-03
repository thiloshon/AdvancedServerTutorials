<?php

/**
 * Created by IntelliJ IDEA.
 * User: Thiloshon
 * Date: 03-Nov-18
 * Time: 6:58 PM
 */
class product_model
{
    public function lookup($type){
        if ($type == 'car'){
            return array("Volvo", "BMW", "Toyota");
        } else if ($type == 'bus'){
            return array('Ashok', 'TATA');
        } else {
            return 'NA';
        }
    }
}