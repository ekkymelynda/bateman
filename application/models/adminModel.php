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

    function lihat_pengguna()
    {
        $query = $this->db->get('pengguna');
        return $query;
    }
    
    function lihat_admin()
    {
        $query = $this->db->get('admin');
        return $query;
    }

    function parsing_id_barang($id_brg)
    {
        $this->db->where("id_brg", $id_brg);
        $query = $this->db->get('barang');
        return $query;
    }

    function ubah_barang($id_brg, $nama_brg, $jenis_brg, $tglpost_brg, $lokasi_brg, $deskripsi_brg, $status_brg, $foto_brg, $nama_foto)
    {
        $data = array(
            'nama_brg' => $nama_brg,
            'jenis_brg' => $jenis_brg,
            'tglpost_brg' => $tglpost_brg,
            'lokasi_brg' => $lokasi_brg,
            'deskripsi_brg' => $deskripsi_brg,
            'status_brg' => $status_brg,
            'foto_brg' => $foto_brg,
            'nama_foto' => $nama_foto
            );

        $this->db->where("id_brg", $id_brg);
        $this->db->update('barang', $data);
    }

    function hapus_barang($id_brg)
    {
        $this->db->where("id_brg", $id_brg);
        $this->db->delete('barang');
    }

}
?>