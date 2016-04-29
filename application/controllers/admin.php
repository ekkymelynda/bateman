<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */

    function __construct()
    {
        parent::__construct();
        $this->load->model('adminModel');
        $this->load->library('session');
    }

    public function login()
    {
        $this->load->view('admin/login');
    }

    public function checkLoginAdmin() 
    {
        //$this->load->helper('security');
        $this->form_validation->set_rules('email_adm','Email','required|valid_email');
        $this->form_validation->set_rules('pswd_adm','Password','trim|required|min_length[6]|max_length[32]|regex_match[/^[a-zA-Z0-9_-~!@#$%^&*()+=]{6,32}$/]|callback_verifyAdmin');
        if($this->form_validation->run() == false)
        {
            //redirect('dashboard');
            $this->login();
        }
        else{
            redirect('../admin/profil_lihat');
        }
    }

    public function verifyAdmin()
    {
        $username = $this->input->post('email_adm');
        $pass = $this->input->post('pswd_adm');
        
        $this->load->model('adminModel');
        $this->load->library('session');
        if($this->adminModel->loginAdmin($username, $pass)){
            return true;
            //echo var_dump(query);
        }
        else{
            $this->form_validation->set_message('verifyAdmin','Incorrect Username or Password. Please try again.');
            return false;
        }
    }

    public function updateAdmin()
    {
        $this->load->helper('security');
        $this->form_validation->set_rules('nama_adm','Nama_Admin','required');
        $this->form_validation->set_rules('email_adm','Email_Admin','required');
        $this->form_validation->set_rules('pswd_adm','Password_Admin','required');
        $this->form_validation->set_rules('alamat_adm','Alamat_Admin','required');
        $this->form_validation->set_rules('notlp_adm','Nomor_Telepon_Admin','required');
        
        if($this->form_validation->run() == false){
            $this->form_validation->set_message('Incorrect Data.');
            $this->profil_ubah();
        }
        else {
            $userid = $this->session->userdata('userid');
            $nama_adm = $this->input->post('nama_adm');
            $email_adm = $this->input->post('email_adm');
            $pswd_adm = $this->input->post('pswd_adm');
            $alamat_adm = $this->input->post('alamat_adm');
            $notlp_adm = $this->input->post('notlp_adm');
        
            $this->adminModel->ubahAdmin($userid, $nama_adm, $email_adm, $pswd_adm, $alamat_adm, $notlp_adm);

            $newdata = array(
            'userid' => $userid,
            'name' => $nama_adm,
            'email' => $email_adm,
            'pass' => $pswd_adm,
            'alamat' => $alamat_adm, 
            'telp' => $notlp_adm, 
            );
            $this->session->set_userdata($newdata);
            if(!empty($_FILES['image']['tmp_name']))
            {
                $file = $_FILES['image']['tmp_name'];
                if(!isset($file)){
                    echo "Please select an image.";
                }
                else{
                    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                    $image_name = addslashes($_FILES['image']['name']);
                    $image_size = getimagesize($_FILES['image']['tmp_name']);

                    //$this->load->model('barangModel');
                    $this->adminModel->ubah_foto_admin($userid, $image, $image_name);
                    $this->session->unset_userdata('foto');
                    $this->session->set_userdata('foto',$image);
            /*        $newdata = array(
                        'name'  => $nama,
                    );
                    $this->session->set_userdata($newdata);    */                
                     
                
                }            
            }

            $this->profil_lihat(); 
        }
    }    


    public function profil_lihat()
    {
        $this->load->view('admin/header')->view('admin/profil/lihat')->view('admin/footer');
    }

    public function profil_ubah()
    {
        $this->load->view('admin/header')->view('admin/profil/ubah')->view('admin/footer');
    }

    public function admin_buat()
    {
        $this->load->view('admin/header')->view('admin/admin/buat')->view('admin/footer');
    }

    public function buatAdmin()
    {
        $id_adm= $this->input->post('id_adm');
        $nama_adm= $this->input->post('nama_adm');
        $email_adm= $this->input->post('email_adm');
        $pswd_adm= $this->input->post('pswd_adm');
        $alamat_adm= $this->input->post('alamat_adm');
        $notlp_adm= $this->input->post('notlp_adm');
        $foto_adm= $this->input->post('foto_adm');
        $nama_foto= $this->input->post('nama_foto');

            $this->adminModel->buat_admin($id_adm, $nama_adm, $email_adm, $pswd_adm, $alamat_adm, $notlp_adm, $foto_adm, $nama_foto);       

            redirect(base_url()."admin/lihatAdmin"); 
        }

    public function admin_lihat()
    {
        $this->load->view('admin/header')->view('admin/admin/lihat')->view('admin/footer');
    }

    //Fungsi Lihat Semua Admin
    public function lihatAdmin()
    {
        $data['h'] = $this->adminModel->lihat_admin();
        $this->load->view('admin/header')->view('admin/admin/lihat',$data)->view('admin/footer');
    }

    public function pengguna_lihat()
    {
        $this->load->view('admin/header')->view('admin/pengguna/lihat')->view('admin/footer');
    }

    //Fungsi Lihat Semua Pengguna
    public function lihatPengguna()
    {
        $data['h'] = $this->adminModel->lihat_pengguna();
        $this->load->view('admin/header')->view('admin/pengguna/lihat',$data)->view('admin/footer');
    }

    public function barang_lihat()
    {
        $this->load->view('admin/header')->view('admin/barang/lihat')->view('admin/footer');
    }

    //Fungsi Lihat Semua Barang
    public function lihatBarang()
    {
        $data['h'] = $this->adminModel->lihat_barang();
        $this->load->view('admin/header')->view('admin/barang/lihat',$data)->view('admin/footer');
    }

    public function barang_ubah()
    {
        $this->load->view('admin/header')->view('admin/barang/ubah')->view('admin/footer');
    }

    //Fungsi ke Form Ubah Barang
    public function formubahBarang($id_brg)
    {
        $data['h'] = $this->adminModel->parsing_id_barang($id_brg);
        $this->load->view('admin/header')->view('admin/barang/ubah',$data)->view('admin/footer');
    }

    //Fungsi Ubah Suatu Barang
    public function ubahBarang($id_brg)
    {
        $nama_brg= $this->input->post('nama_brg');
        $jenis_brg= $this->input->post('jenis_brg');
        $tglpost_brg= $this->input->post('tglpost_brg');
        $lokasi_brg= $this->input->post('lokasi_brg');
        $deskripsi_brg= $this->input->post('deskripsi_brg');
        $status_brg= $this->input->post('status_brg');
        $foto_brg= $this->input->post('foto_brg');
        $nama_foto= $this->input->post('nama_foto');

        $this->adminModel->ubah_barang($id_brg, $nama_brg, $jenis_brg, $tglpost_brg, $lokasi_brg, $deskripsi_brg, $status_brg, $foto_brg, $nama_foto);

        redirect(base_url()."admin/lihatBarang");
    }

    public function barang_hapus()
    {
        $this->load->view('admin/header')->view('admin/barang/hapus')->view('admin/footer');
    }

    //Fungsi ke Form Hapus Barang
    public function formhapusBarang($id_brg)
    {
        $data['h'] = $this->adminModel->parsing_id_barang($id_brg);
        $this->load->view('admin/header')->view('admin/barang/hapus',$data)->view('admin/footer');
    }

    //Fungsi Hapus Suatu Barang
    public function hapusBarang($id_brg)
    {
        $this->adminModel->hapus_barang($id_brg);
        redirect(base_url()."admin/lihatBarang");
    }


}
