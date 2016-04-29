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

    public function loginAdmin($username, $pass)
    {
        date_default_timezone_set("Asia/Jakarta");
        $this->db->select('NAMA_ADM, EMAIL_ADM, PSWD_ADM, ID_ADM, ALAMAT_ADM, NOTLP_ADM, FOTO_ADM');
        $this->db->from('admin');
        $this->db->where('EMAIL_ADM', $username);
        $this->db->where('PSWD_ADM', $pass);
        $waktu=date("Y-m-d H:i:s");
        //$this->db->query("UPDATE users SET user_last_login='$waktu' where email='$name'");

        $query = $this->db->get();
        $idid = $query->result();

        if($query->num_rows() == 1){
            $data = array();

            $newdata = array(
            'username'  => $username,
            'userid' => $idid[0]->ID_ADM,
            'name' => $idid[0]->NAMA_ADM,
            'email' => $idid[0]->EMAIL_ADM,
            'pass' => $idid[0]->PSWD_ADM,
            'alamat' => $idid[0]->ALAMAT_ADM, 
            'telp' => $idid[0]->NOTLP_ADM, 
            'foto' => $idid[0]->FOTO_ADM
            );
            $this->session->set_userdata($newdata);

            return true;
        }else {
            return false;
        }
    }

    public function ubahAdmin($userid, $nama_adm, $email_adm, $pswd_adm, $alamat_adm, $notlp_adm)
    {
       $this->db->query("UPDATE admin SET NAMA_ADM = '$nama_adm', EMAIL_ADM = '$email_adm', PSWD_ADM = '$pswd_adm', ALAMAT_ADM = '$alamat_adm', NOTLP_ADM = '$notlp_adm' WHERE ID_ADM='$userid'");
    }

    public function ubah_foto_admin($userid, $image, $image_name){

        $this->db->query("UPDATE admin SET FOTO_ADM = '$image', NAMA_FOTO = '$image_name' WHERE ID_ADM='$userid'");
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

    function buat_admin($id_adm, $nama_adm, $email_adm, $pswd_adm, $alamat_adm, $notlp_adm, $foto_adm, $nama_foto)
    {
        $data = array(
            'id_adm' => $id_adm,
            'nama_adm' => $nama_adm,
            'email_adm' => $email_adm,
            'pswd_adm' => $pswd_adm,
            'alamat_adm' => $alamat_adm,
            'notlp_adm' => $notlp_adm,
            'foto_adm' => $foto_adm,
            'nama_foto' => $nama_foto
            );
        $this->db->insert('admin', $data);
        
    }

}
?>