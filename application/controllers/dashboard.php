<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->model('mkelas');
        //$this->load->helper('form','url');
        $this->load->helper(array('url','form'));
    }

    public function index()
	{
		$this->load->view('index.php');
    }

    public function user()
    {
    	$this->load->view('DashboardUser.php');
    }

    public function temuan()
    {
    	$this->load->view('DashboardTemuanUser.php');
    }

    public function tambah()
    {
        $this->load->view('TambahBarang.php');
    }

    public function checkLoginUser() {
        $this->load->helper('security');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('password','Password','trim|required|min_length[6]|max_length[32]|regex_match[/^[a-zA-Z0-9_-~!@#$%^&*()+=]{6,32}$/]|callback_verifyUser');
        if($this->form_validation->run() == false){
            //redirect('dashboard');
            $this->index();
        }
        else{
            $this->user();
        }
    }

    public function verifyUser(){
        $username = $this->input->post('email');
        $pass = $this->input->post('password');
        
        $this->load->model('dashboardModel');
        $this->load->library('session');
        if($this->dashboardModel->loginUser($username, $pass)){
            return true;
            //echo var_dump(query);
        }
        else{
            $this->form_validation->set_message('verifyUser','Incorrect Username or Password. Please try again.');
            return false;
        }
    }

    public function tambahBarang()
    {
        $this->form_validation->set_rules('nama_barang','Nama_Barang','required');
        $this->form_validation->set_rules('jenis_barang','Jenis_Barang','required');
        $this->form_validation->set_rules('lokasi_barang','Lokasi_Barang','required');
        $this->form_validation->set_rules('deskripsi_barang','Deskripsi_Barang','required');
        
        if($this->form_validation->run() == false){
            $this->form_validation->set_message('Incorrect Data.');
            $this->tambah();
        }
        else {
            $userid = $this->input->post('user_id');
            $nama_barang = $this->input->post('nama_barang');
            $jenis_barang = $this->input->post('jenis_barang');
            $lokasi_barang = $this->input->post('lokasi_barang');
            $tanggal = $this->input->post('tanggal');
            $waktu = $this->input->post('waktu');
            $deskripsi = $this->input->post('deskripsi_barang');
        
            if(isset($_FILES['image'])){
                $file = $_FILES['image']['tmp_name'];
                if(!isset($file)){
                    echo "Please select an image.";
                }
                else{
                    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                    $image_name = addslashes($_FILES['image']['name']);
                    $image_size = getimagesize($_FILES['image']['tmp_name']);

                    $this->load->model('barangModel');
                    $this->barangModel->insert($userid, $nama_barang, $jenis_barang, $lokasi_barang, $tanggal, $waktu, $deskripsi);
                    $this->barangModel->upload_photo($image, $image_name);
                
            /*        $newdata = array(
                        'name'  => $nama,
                    );
                    $this->session->set_userdata($newdata);    */                
                    
                    
                    $this->tambah();  
                
                }            
            }  
        
        }
    }    
    
    public function account() {
        $this->load->helper('security');
        $this->form_validation->set_rules('nama','Nama','trim|required');
        $this->form_validation->set_rules('email','Email','trim|required|xss_clean|valid_email|callback_email_sudah_terpakai');
        $this->form_validation->set_rules('password','Password','trim|required|min_length[6]|max_length[32]|regex_match[/^[a-zA-Z0-9_-~!@#$%^&*()+=]{6,32}$/]');
        $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required|matches[password]|regex_match[/^[a-zA-Z0-9_-~!@#$%^&*()+=]{6,32}$/]');
        
        if($this->form_validation->run() == false){
            $this->form_validation->set_message('Incorrect Email.');
            $this->index();
        }
        else{
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $confirm_password = $this->input->post('confirm_password');
            
            if(isset($_FILES['image'])){
                $file = $_FILES['image']['tmp_name'];
                if(!isset($file)){
                    echo "Please select an image.";
                }
                else{
                    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                    $image_name = addslashes($_FILES['image']['name']);
                    $image_size = getimagesize($_FILES['image']['tmp_name']);

                    $this->load->model('dashboardModel');
                    $this->dashboardModel->insert($nama, $email, $password);
                    $this->dashboardModel->upload_photo($image, $image_name);
                    
                    $newdata = array(
                        'name'  => $nama,
                    );
                    $this->session->set_userdata($newdata);
                    //$this->LoginModel->increment_reg();
                    
                    /*if(isset($akunparent)){
                        $this->load->model('LoginModel');
                        $this->LoginModel->updateparent($akunparent);
                    }*/
                    $this->user();
                }            
            }
        }
    }

    public function email_sudah_terpakai(){
        $this->load->model('dashboardModel');
        $email=$this->input->post('email');
        $result=$this->dashboardModel->check_email_exist($email);
        if($result){
            $this->form_validation->set_message('email_sudah_terpakai', 'Email already exist.');
            return false;
        }else{
            return true;
        }
    }

    public function logout(){
        $this->load->library('session');
        $this->load->view('logout');
        redirect('dashboard');
    }
}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */