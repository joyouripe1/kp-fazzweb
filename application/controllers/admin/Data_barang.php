<?php
class Data_barang extends CI_Controller{

    public function __construct()
    {
            parent::__construct();
            $this->load->model('Model_produk');

    }  

    public function index(){
        $data['barang'] = $this->Model_produk->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_barang', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi(){
        $produk         = $this->input->post('produk');
        $keterangan     = $this->input->post('keterangan');
        $kategori       = $this->input->post('kategori');
        $harga          = $this->input->post('harga');
        $stok           = $this->input->post('stok');
        $gambar         = $_FILES['gambar']['name'];
        if ($gambar =''){
            
        }else{
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar')){
                echo "Upload Gambar Gagal Coba Lagi !";
            }else{
                $gambar=$this->upload->data('file_name');
            }
        }             
        
        $data = array(
            'produk'        => $produk,
            'keterangan'    => $keterangan,
            'kategori'      => $kategori,
            'harga'         => $harga,
            'stok'          => $stok,
            'gambar'        => $gambar
        );
        
        $this->Model_produk->tambah($data, 'produk');
        redirect('admin/data_barang/index');
    }


    public function edit($id){
        $where = array('id_produk' =>$id);
        $data['barang'] = $this->Model_produk->edit_barang($where, 'produk')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_barang', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update(){
        $id         = $this->input->post('id_produk');
        $produk   = $this->input->post('produk');
        $keterangan = $this->input->post('keterangan');
        $kategori   = $this->input->post('kategori');
        $harga      = $this->input->post('harga');
        $stok       = $this->input->post('stok');
        $gambar     = $this->input->post('gambar');

        $data = array(
            'produk'      => $produk,
            'keterangan'    => $keterangan,
            'kategori'      => $kategori,
            'harga'         => $harga,
            'stok'          => $stok

        );

        $where = array(
            'id_produk' => $id
        );
        
        $this->Model_produk->update_data($where,$data,'produk');
        redirect('admin/data_barang/index');
    }

    public function hapus($id){
        $where = array('id_produk' => $id);
        $this->Model_produk->hapus_data($where, 'produk');
        redirect('admin/data_barang/index');
    }
}