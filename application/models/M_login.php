<?php

class M_login extends CI_Model{

    public function cek_login($username, $password)
    {
        $data = array(
            'username' => $username,
            'password' => $password
        );
        return $this->db->get_where('admin', $data);
    }
       

}