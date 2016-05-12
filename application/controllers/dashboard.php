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
        //$this->load->library('pagination');
        $this->load->model('barangModel');
    
        //$config['base_url'] = 'http://localhost/bateman/trunk/dashboard/index';
        //$config['total_rows'] = $this->db->get('barang')->num_rows();
        //$config['per_page'] = 1;
        //$config['num_links'] = 20;
        //$config['full_tag_open'] = '<div id="pagination">';
        //$config['full_tag_close'] = '</div>';
        
        //$this->pagination->initialize($config);        
        
        //$this->data['barang'] = $this->barangModel->listBarang($config['per_page'], $this->uri->segment(3));
		$this->data['barang'] = $this->barangModel->listBarang();
        $this->load->view('index.php', $this->data);
    }
    
    public function photoprofil($id)
	{
        $this->load->model('barangModel');
		$this->load->view('profilepicture.php', $id);
    }    

    public function masukadmin()
    {
        $this->load->view('admin/login.php');
    }

    public function user()
    {
        $this->load->model('barangModel');
        $this->data['barang'] = $this->barangModel->listBarang();
    	$this->load->view('DashboardUser.php', $this->data);
    }

    public function temuan()
    {
        $this->load->model('barangModel');
        $this->data['barang'] = $this->barangModel->listBarangTemuan();
    	$this->load->view('DashboardTemuanUser.php', $this->data);
    }
    
    public function editprofil()
    {
        $this->load->model('userModel');
        $id = $_SESSION['userid'];
        $this->data['user'] = $this->userModel->datauser($id);
    	$this->load->view('EditProfil.php', $this->data);
    }

    public function tambah()
    {
        $this->load->view('TambahBarang.php');
    }
    
    public function lihatprofil($id)
    {
        $this->load->model('userModel');
        $this->data['user'] = $this->userModel->datauser($id);
    	$this->load->view('LihatProfil.php', $this->data);
    }    
    
    public function editbarang($id_barang)
    {
        $this->load->model('barangModel');
        $id = $_SESSION['userid'];
        $this->data['barang'] = $this->barangModel->databarang($id_barang);
        $this->load->view('EditBarang.php', $this->data);
    }     

    public function checkLoginUser() {
        //$this->load->helper('security');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('password','Password','trim|required|min_length[6]|max_length[32]|regex_match[/^[a-zA-Z0-9_-~!@#$%^&*()+=]{6,32}$/]|callback_verifyUser');
        if($this->form_validation->run() == false){
            //redirect('dashboard');
            $this->index();
        }
        else{
            redirect('../dashboard/user');
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
        $this->load->helper('security');
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

                    $this->load->model('barangModel');
                    $this->barangModel->insert($userid, $nama_barang, $jenis_barang, $lokasi_barang, $tanggal, $waktu, $deskripsi);
                    if($_FILES['image']['tmp_name']){
                        $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                        $image_name = addslashes($_FILES['image']['name']);
                        $image_size = getimagesize($_FILES['image']['tmp_name']);                    
                        $this->barangModel->upload_photo($image, $image_name);
                    }                    
                
            /*        $newdata = array(
                        'name'  => $nama,
                    );
                    $this->session->set_userdata($newdata);    */                
                    
                    
                    $this->tambah();  
                
                }            
            }  
        
        }
    }
    
    public function editPenggunaProfil()
    {
        $this->load->helper('security');
        $this->form_validation->set_rules('nama_pengguna','Nama_Pengguna','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('no_telpon','No_Telpon','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        
        if($this->form_validation->run() == false){
            $this->form_validation->set_message('Incorrect Data.');
            $this->editprofil();
        }
        else {
            $userid = $_SESSION['userid'];
            $nama_pgn = $this->input->post('nama_pengguna');
            $email_pgn = $this->input->post('email');
            $pswd_pgn = $this->input->post('password');
            $alamat_pgn = $this->input->post('alamat');
            //$waktu = $this->input->post('waktu');
            $notlp_pgn = $this->input->post('no_telpon');
        
            if(isset($_FILES['image'])){
                $file = $_FILES['image']['tmp_name'];
                if(!isset($file)){
                    echo "Please select an image.";
                }
                else{
                    $this->load->model('userModel');
                    $this->userModel->update($userid, $nama_pgn, $email_pgn, $pswd_pgn, $alamat_pgn, $notlp_pgn);

                    if($_FILES['image']['tmp_name']){
                        $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                        $image_name = addslashes($_FILES['image']['name']);
                        $image_size = getimagesize($_FILES['image']['tmp_name']);                    
                        $this->userModel->upload_photo($image, $image_name, $userid);
                    }
                
            /*        $newdata = array(
                        'name'  => $nama,
                    );
                    $this->session->set_userdata($newdata);    */                
                    
                    
                    $this->editprofil();  
                
                }            
            }  
        
        }
    }
    
    public function updateBarang()
    {
        $this->load->helper('security');
        $this->form_validation->set_rules('nama_barang','Nama_Barang','required');
        $this->form_validation->set_rules('jenis_barang','Jenis_Barang','required');
        $this->form_validation->set_rules('lokasi_barang','Lokasi_Barang','required');
        $this->form_validation->set_rules('tanggal','Tanggal','required');
        $this->form_validation->set_rules('waktu','Waktu','required');
        $this->form_validation->set_rules('deskripsi_barang','Deskripsi_Barang','required');
        
        if($this->form_validation->run() == false){
            $this->form_validation->set_message('Incorrect Data.');
            $id_brg = $this->input->post('barang_id');
            $this->editbarang($id_brg);
        }
        else {
            $userid = $_SESSION['userid'];
            $id_brg = $this->input->post('barang_id');
            $nama_brg = $this->input->post('nama_barang');
            $waktupost_brg = $this->input->post('waktu');
            $tglpost_brg = $this->input->post('tanggal');
            $lokasi_brg = $this->input->post('lokasi_barang');
            //$waktu = $this->input->post('waktu');
            $deskripsi_brg = $this->input->post('deskripsi_barang');
            $id_jenis = $this->input->post('jenis_barang');
            if(isset($_FILES['image'])){
                $file = $_FILES['image']['tmp_name'];
                if(!isset($file)){
                    echo "Please select an image.";
                }
                else{

                    $this->load->model('barangModel');
                    $this->barangModel->update($userid, $id_brg, $nama_brg, $waktupost_brg, $tglpost_brg, $lokasi_brg, $deskripsi_brg, $id_jenis);
                    if($_FILES['image']['tmp_name']){
                        $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                        $image_name = addslashes($_FILES['image']['name']);
                        $image_size = getimagesize($_FILES['image']['tmp_name']);                    
                        $this->barangModel->update_photo($image, $image_name, $userid, $id_brg);
                    }                    
                
            /*        $newdata = array(
                        'name'  => $nama,
                    );
                    $this->session->set_userdata($newdata);    */                
                    
                    
                    $this->editbarang($id_brg);  
                
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
            $alamat = $this->input->post('alamat');
            
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
                    $this->dashboardModel->insert($nama, $email, $password, $alamat);
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

    public function tandaibarang($id_barang) {
        $this->load->model('barangModel');
        $this->barangModel->tandai_barang($id_barang);
        $this->temuan();
    }
    
    public function logout(){
        $this->load->library('session');
        $this->load->view('logout');
        //redirect('dashboard');
    }
}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */