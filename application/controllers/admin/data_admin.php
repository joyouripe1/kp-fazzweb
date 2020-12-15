<?php
class Data_admin extends CI_Controller{
    function __construct(){
        parent ::__construct();

        $this->load->model('Model_tambah', 'm');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index(){
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_admin');
        $this->load->view('templates_admin/footer');
    }

    public function ambildata()
    {
        $dataAdmin = $this->m->ambildata()->result();
        echo json_encode($dataAdmin);
    }

    public function tambahdata()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if($username==''){
            $result['pesan']="Username Harus Diisi";
        }else if($password==''){
            $result['pesan']="Password Harus Diisi";
        }else{
            $result['pesan']="";

            $data = array(
                'username' => $username,
                'password' => $password
            );
            $this->m->tambahdata($data, 'tb_admin');
        }
        echo json_encode($result);
    }

    public function ambilId()
    {
        $id = $this->input->post('id');
        $where = array('id'=>$id);
        $dataSewa = $this->m->ambilId('tb_admin', $where)->result();
        echo json_encode($dataSewa);
    }

    public function ubahdata()
    {
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $password = $this->input->post('password');


        if($username==''){
            $result['pesan']="Username Harus Diisi";
        }else if($password==''){
            $result['pesan']="Password Harus Diisi";
        }else{
            $result['pesan']="";

            $where = array('id' => $id);

            $data = array(
                'username' => $username,
                'password' => $password
            );
            $this->m->updatedata($where, $data, 'tb_admin');
        }
        echo json_encode($result);
    }

    public function hapusdata()
    {
        $id = $this->input->post('id');
        $where = array('id'=>$id);
        $this->m->hapusdata($where, 'tb_admin');
    }

}