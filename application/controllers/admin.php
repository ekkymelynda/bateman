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
    public function login()
    {
        $this->load->view('admin/login');
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

    public function admin_lihat()
    {
        $this->load->view('admin/header')->view('admin/admin/lihat')->view('admin/footer');
    }

    public function pengguna_lihat()
    {
        $this->load->view('admin/header')->view('admin/pengguna/lihat')->view('admin/footer');
    }

    public function barang_lihat()
    {
        $this->load->view('admin/header')->view('admin/barang/lihat')->view('admin/footer');
    }

    public function barang_ubah()
    {
        $this->load->view('admin/header')->view('admin/barang/ubah')->view('admin/footer');
    }

    public function barang_hapus()
    {
        $this->load->view('admin/header')->view('admin/barang/hapus')->view('admin/footer');
    }
}
