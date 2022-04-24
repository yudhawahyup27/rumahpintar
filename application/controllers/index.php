<?php
defined('BASEPATH') or exit('No direct script access allowed');

class index extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Rumah Pintar";
        $this->load->view('Home/index', $data);
    }
}
