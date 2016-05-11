<?php

class userModel extends CI_Model {
    public function datauser($id){
        $query=$this->db->query("SELECT * FROM pengguna WHERE ID_PGN = '$id'");
        return $query->result();
    }    
    public function update($id, $nama_pgn, $email_pgn, $pswd_pgn, $alamat_pgn, $notlp_pgn){
        $this->db->query("UPDATE pengguna SET NAMA_PGN = '$nama_pgn', EMAIL_PGN = '$email_pgn', PSWD_PGN = '$pswd_pgn', ALAMAT_PGN = '$alamat_pgn', NOTLP_PGN = '$notlp_pgn' WHERE ID_PGN='$id'");
    }
    public function upload_photo($image, $image_name, $id){
        $this->db->query("UPDATE pengguna SET FOTO_PGN = '$image', NAMA_FOTO = '$image_name' WHERE ID_PGN='$id'");
    }
}
?>