<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
    }

    public function registration()
    {
        $this->load->view('templates/auth_header2');
        $this->load->view('auth/register');
        $this->load->view('templates/auth_footer2');
    }
}
