<?php

class dashboardModel extends CI_Model {
    public function insert($nama, $email, $password, $alamat){
        date_default_timezone_set("Asia/Jakarta"); 
        $data = array (
            'NAMA_PGN' => $nama,
            'EMAIL_PGN' => $email,
            'PSWD_PGN' => $password,
            'ALAMAT_PGN' => alamat
            //'user_register'=>date("Y-m-d h:i:sa"),
            //'user_last_login'=>date("Y-m-d h:i:sa")
            //'user_jumlah_post'=>0,
            //'validasi'=>0            

        );
        $this->db->insert('pengguna', $data);
    }
    public function upload_photo($image, $image_name){

        $this->db->select_max('ID_PGN');
        $this->db->from('pengguna');
        $query = $this->db->get();
        //echo $query->row()->id;
        $id = $query->row()->ID_PGN;
        $this->db->query("UPDATE pengguna SET FOTO_PGN = '$image', NAMA_FOTO = '$image_name' WHERE ID_PGN='$id'");
    }

	public function check_email_exist($email)
    {
        $this->db->where("EMAIL_PGN",$email);
        $query=$this->db->get("pengguna");
        if($query->num_rows()>0){
            return true;
        }else{
			return false;
        }
    }

    public function loginUser($username, $pass){
        date_default_timezone_set("Asia/Jakarta");
        $this->db->select('NAMA_PGN, EMAIL_PGN, PSWD_PGN, ID_PGN, FOTO_PGN');
        $this->db->from('pengguna');
        $this->db->where('EMAIL_PGN', $username);
        $this->db->where('PSWD_PGN', $pass);
        $waktu=date("Y-m-d H:i:s");
        //$this->db->query("UPDATE users SET user_last_login='$waktu' where email='$name'");

        $query = $this->db->get();
        $idid = $query->result();

        if($query->num_rows() == 1){
            $data = array();

            $newdata = array(
            'username'  => $username,
            'userid' => $idid[0]->ID_PGN,
            'name' => $idid[0]->NAMA_PGN,
            'foto' => $idid[0]->FOTO_PGN  
            );
            $this->session->set_userdata($newdata);

            return true;
        }else {
            return false;
        }
    }

}

?>