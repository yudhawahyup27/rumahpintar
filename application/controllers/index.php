<?php
defined('BASEPATH') or exit('No direct script access allowed');

class index extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Rumahpintar';
        $this->load->view('Home/index', $data);
    }

    public function control()
    {
        $this->load->view('control/web');
    }
}
