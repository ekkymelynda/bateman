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

}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */