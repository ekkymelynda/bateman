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
            $id_brg=$this->input->post('id_brg');
            $nama_brg= $this->input->post('nama_brg');
            $jenis_brg= $this->input->post('jenis_brg');
            $harga_beli= $this->input->post('harga_beli');
            $harga_jual= $this->input->post('harga_jual');
            $keuntungan_brg= $this->input->post('keuntungan_brg');
            $jumlah_brg= $this->input->post('jumlah_brg');
            $status_brg= $this->input->post('status_brg');

            $this->barang_model->inbarang($id_brg,$nama_brg,$jenis_brg,$harga_beli,$harga_jual,$keuntungan_brg,$jumlah_brg,$status_brg);       

            redirect(base_url()."barang/barang_lihat"); 
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
