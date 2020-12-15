<?php

class Login extends CI_Controller{

    public function index()
    {
        $this->load->view('login');     
    }

    public function proseslogin_admin()
    {
        //panggil model
        $this->load->model('M_login');

        //ambil post data
        $username = $this->input->post('username');
        $password = sha1($this->input->post('password'));

        //cek login
        $cek = $this->M_login->cek_login($username, $password)->num_rows();
        $data = $this->M_login->cek_login($username, $password)->row();
        if($cek > 0) { //jika benar
            redirect('admin/dashboard_admin');
        } else { //jika salah
            redirect('login');
        }
    }
 
}