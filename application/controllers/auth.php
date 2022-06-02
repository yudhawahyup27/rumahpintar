<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{

    public function __construct()
    {
        Parent::__construct();
        $this->load->library('form_validation');
    }
    public function login()
    {
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|valid_email|trim',

            [
                'required' => 'Email Diisi Ya bos',
                'valid_email' => 'Email Diisi Seng Genah Contoh "Yudha@gmail.com"',
            ]
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|min_length[8]|trim',

            [
                'min_length' => 'Minimal Password Harus 8 Karakter',
                'required' => 'Password Diisi Ya bos'

            ]
        );

        if ($this->form_validation->run() == false) {
            $data['$title'] = 'Rumah Pintar Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            //validasi Succes
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            //jika usernya aktif
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id'],

                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('/admin');
                    } else {
                        redirect('/User');
                    }
                } else {
                    $this->session->set_flashdata('message', '  
            <div class= "alert alert-danger" role="alert">Password Salah Ya Bunda</div>');

                    redirect('/auth/login');
                }
            } else {
                $this->session->set_flashdata('message', '  
            <div class= "alert alert-danger" role="alert">Email anda tidak aktif Bos hubungi andmin ya</div>');
                redirect('/auth/login');
            }
        } else {
            $this->session->set_flashdata('message', '  
            <div class= "alert alert-danger" role="alert">Gunakan Email Yang Terdaftar Bos</div>');

            redirect('/auth/login');
        }
    }

    public function register()
    {
        //validasi buat registrasi
        $this->form_validation->set_rules('name', 'Name', 'required|alpha_numeric|trim', [
            'alpha_numeric' => 'Nama Hanya Bisa Diisi Huruf dan Angka',
            'required' => 'Username Diisi Ya bos'

        ]);
        $this->form_validation->set_rules(
            'password1',
            'Password1',
            'required|min_length[8]|matches[password2]|trim',

            [
                'matches' => 'Password Tidak Sama',
                'min_length' => 'Minimal Password Harus 8 Karakter',
                'required' => 'Password Diisi Ya bos'

            ]
        );
        $this->form_validation->set_rules(
            'password2',
            'Password2',
            'required|min_length[8]|matches[password2]|trim',

            [
                'matches' => 'Password Tidak Sama',
                'min_length' => 'Minimal Password Harus 8 Karakter',
                'required' => 'Password Diisi Ya bos'

            ]
        );
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|valid_email|trim|is_unique[user.email]',

            [
                'required' => 'email Diisi Ya bos',
                'valid_email' => 'Email Diisi Seng Genah Contoh "Yudha@gmail.com"',
                'is_unique' => 'Email Sudah Ada Bosku, Gunakan Email Yang Lain',
            ]
        );
        // validasi Jika salah memasukan 
        if ($this->form_validation->run() == false) {
            $data['$title'] = "Rumah Pintar Register";
            $this->load->view('templates/auth_header');
            $this->load->view('auth/register', $data);
            $this->load->view('templates/auth_footer');
        }
        // Jika data benar
        else {
            $data = [
                // htmlspecialchars('name' => $this->input->post('name')),
                // htmlspecialchars('email' =>  $this->input->post('email')),
                'name' => $this->input->post('name'),
                'email' =>  $this->input->post('email'),
                'image' => 'default.svg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'date_created' => time(),
                'is_active' => 1,
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '  
            <div class= "alert alert-succcess" role="alert">Selamat Akun Anda Telah DiBuat, Silakan Login</div>');

            redirect('/auth/login');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata['email'];
        $this->session->unset_userdata['role_id'];
        $this->session->set_flashdata('message', '  
            <div class= "alert alert-succcess" role="alert">Terima Kasih Telah Berkunjung Bunda See You</div>');

        redirect('/auth/login');
    }
}
