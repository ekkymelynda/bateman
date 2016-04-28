<?php

class adminModel extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database('default','true');
    }

    function lihat_barang()
    {
        $query = $this->db->get('barang');
        return $query;
    }
    
    

}
?>