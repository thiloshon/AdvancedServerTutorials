<?php

/**
 * Created by IntelliJ IDEA.
 * User: Thiloshon
 * Date: 04-Nov-18
 * Time: 9:01 AM
 */
class books extends CI_Controller
{
    public function index()
    {
        $this->load->model('aproducts_model');

        $genre = $this->input->post('genre_type');

        $result = $this->aproducts_model->LookupGenre($genre);

        $data['products'] = $result;

        $this->load->view('genre_search_view', $data);
    }
}