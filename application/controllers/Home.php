<?php
class Home extends CI_Controller{

    public function index()
    {
        $data['produk'] = $this->model_produk->tampil_data()->result();
        $this->load->view('home', $data);     
    }

    public function tambah_ke_keranjang($id_produk)
    {
        $produk = $this->model_produk->find($id_produk);

        $data = array(
            'id'      => $produk->id_produk,
            'qty'     => 1,
            'price'   => $produk->harga,
            'name'    => $produk->produk
            
        );
            
        $this->cart->insert($data);
        redirect('home');

    }

    public function detail($id_barang)
    {
        $data['produk'] = $this->model_produk->detail_barang($id_barang);
        $this->load->view('detail_barang',$data);
    }

    public function baru()
    {
        $data['produk'] = $this->model_produk->tampil_data()->result();
        $this->load->view('baru', $data);     
    }


        
}