<?php

class barangModel extends CI_Model {
    public function insert($userid, $nama_barang, $jenis_barang, $lokasi_barang, $tanggal, $waktu, $deskripsi){
        date_default_timezone_set("Asia/Jakarta"); 
        $data = array (
            'ID_PGN' => $userid,
            'NAMA_BRG' => $nama_barang,
            'JENIS_BRG' => $jenis_barang,
            'TGLPOST_BRG' => $tanggal,
            'WAKTUPOST_BRG' => $waktu,
            'LOKASI_BRG' => $lokasi_barang,
            'DESKRIPSI_BRG' => $deskripsi
            //'user_register'=>date("Y-m-d h:i:sa"),
            //'user_last_login'=>date("Y-m-d h:i:sa")
            //'user_jumlah_post'=>0,
            //'validasi'=>0            


        );
        $this->db->insert('barang', $data);
    }

}

?>