<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{

    public function __construct(){
    Parent::__construct();
    $this->load->library('form_validation');
    }
    public function index()
    {
        $data['$title'] = "Rumah Pintar Login";
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
    }

    public function register()
    {
        $this->form_validation->set_rules('name','Name', 'required|alpha_numeric|trim');
        $this->form_validation->set_rules('email','Email', 'required|valid_email|trim');
        // validasi Jika salah memasukan
        if ($this->form_validation->run() == false ) {
            $data['$title'] = "Rumah Pintar Register";
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/register');
            $this->load->view('templates/auth_footer');
        } else {
            echo 'Data Ditambahkan';
        }

        
    }
}
