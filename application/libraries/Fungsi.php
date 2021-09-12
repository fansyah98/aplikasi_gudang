<?php
class Fungsi
{

    protected $CI; // memangil funsi dari CI

    public function __construct() // function yang pertama kali di load
    {
        $this->CI = &get_instance(); // memangil fungsi dari ci
    }

    public function user_login() // function user login
    {
        $this->CI->load->model('user_m'); // load user model 
        $user_id = $this->CI->session->userdata('userid'); // membuat session dari user yang sudah log out    
        $user_data = $this->CI->user_m->get($user_id)->row(); //  ambil data satu baris dengan row
        return $user_data; //mengembalikan nilia 
    }

    public function count_petugas() // fungsi petugas 
    {
        $this->CI->load->model('petugas_m'); // load model petugas
        return $this->CI->petugas_m->get()->num_rows(); // menampilkan semua data 
    }
    public function ccount_buku() // fungsi buku
    {
        $this->CI->load->model('buku_m'); //load model bukum
        return $this->CI->buku_m->get()->num_rows(); // ambil total dari data dari buku
    }
    public function count_pinjam()
    {
        $this->CI->load->model('pinjam_m');
        return $this->CI->pinjam_m->get()->num_rows();
    }
    public function count_pengembalian()
    {
        $this->CI->load->model('kembali_m');
        return $this->CI->kembali_m->get()->num_rows();
    }
    public function count_user()
    {
        $this->CI->load->model('user_m');
        return $this->CI->user_m->get()->num_rows();
    }
}
