<?php

class Model_produk extends CI_Model{

    public function tampil_data(){
        return $this->db->get('produk');
    }

    public function tambah($data,$table){
        $this->db->insert($table,$data);
    }

    public function find($id_produk)
    {
        $result = $this->db->where('id_produk', $id_produk)
                       ->limit(1)
                       ->get('produk');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }

    public function detail_barang($id_produk)
    {
        $result = $this->db->where('id_produk', $id_produk)->get('produk');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }

    public function edit_barang($where,$table){
        return $this->db->get_where($table,$where);
    }
    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    public function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);

    }
}