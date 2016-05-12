<?php

class barangModel extends CI_Model {
    public function insert($userid, $nama_barang, $jenis_barang, $lokasi_barang, $tanggal, $waktu, $deskripsi){
        date_default_timezone_set("Asia/Jakarta"); 
        $data = array (
            'ID_PGN' => $userid,
            'NAMA_BRG' => $nama_barang,
            'ID_JENIS' => $jenis_barang,
            'TGLPOST_BRG' => $tanggal,
            'WAKTUPOST_BRG' => $waktu,
            'LOKASI_BRG' => $lokasi_barang,
            'DESKRIPSI_BRG' => $deskripsi,
            'TANDAI_BRG' => 'BELUM'
            //'user_register'=>date("Y-m-d h:i:sa"),
            //'user_last_login'=>date("Y-m-d h:i:sa")
            //'user_jumlah_post'=>0,
            //'validasi'=>0            
        );
        $this->db->insert('barang', $data);
    }
    
    public function upload_photo($image, $image_name){

        $this->db->select_max('ID_BRG');
        $this->db->from('barang');
        $query = $this->db->get();
        //echo $query->row()->id;
        $id = $query->row()->ID_BRG;
        $this->db->query("UPDATE barang SET FOTO_BRG = '$image', NAMA_FOTO = '$image_name' WHERE ID_BRG='$id'");
    }

    public function listBarang(){
        $query=$this->db->query("SELECT DISTINCT barang.*, pengguna.* FROM barang, pengguna WHERE barang.ID_PGN = pengguna.ID_PGN");
        return $query->result();
    }
    
    /*public function listBarang($limit, $offset = 0){
        $this->db->select('barang.*, pengguna.*');
        $this->db->from('barang, pengguna');
        $this->db->where('barang.ID_PGN','pengguna.ID_PGN');
        $query=$this->db->get('',$limit, $offset);
        
        return $query->result();        
    }   */ 
    
    public function listBarangTemuan(){
        $id = $_SESSION['userid'];
        $query=$this->db->query("SELECT DISTINCT barang.*, pengguna.* FROM barang, pengguna WHERE barang.ID_PGN = '$id' AND pengguna.ID_PGN = '$id'");
        return $query->result();
    }
    public function databarang($id){
        $query=$this->db->query("SELECT * FROM barang WHERE ID_BRG = '$id'");
        return $query->result();
    }
    public function update($userid, $id_brg, $nama_brg, $waktupost_brg, $tglpost_brg, $lokasi_brg, $deskripsi_brg, $id_jenis){
        $this->db->query("UPDATE barang SET NAMA_BRG = '$nama_brg', WAKTUPOST_BRG = '$waktupost_brg', TGLPOST_BRG = '$tglpost_brg', LOKASI_BRG = '$lokasi_brg', DESKRIPSI_BRG = '$deskripsi_brg' WHERE ID_BRG='$id_brg' and ID_PGN='$userid'");
    }
    public function update_photo($image, $image_name, $userid, $id_brg){
        $this->db->query("UPDATE barang SET FOTO_BRG = '$image', NAMA_FOTO = '$image_name' WHERE ID_BRG='$id_brg' and ID_PGN='$userid'");
    }
    public function tandai_barang($id_barang){
        $this->db->query("UPDATE barang SET TANDAI_BRG = 'SUDAH' WHERE ID_BRG='$id_barang'");
    }    
}

?>