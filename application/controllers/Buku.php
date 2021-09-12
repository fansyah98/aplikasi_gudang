<?php

defined('BASEPATH') or exit('No direct script access allowed');

class buku extends CI_Controller
{


    function __construct() // function load pertama
    {
        parent::__construct(); //panggil function
        check_not_login(); // fungsi dari helper
        $this->load->model('buku_m'); // load model buku 
    }

    public function index() // funtion utama 
    {
        $data = array( // array assosite 
            'row' => $this->buku_m->get(), // row //data dari buku_m
            'title' => 'Halaman data buku', // kata 
            'h1' => 'master buku' // kata 
        );
        //lempardata tampilkan
        $this->template->load('template', 'buku/data_buku', $data);
    }

    public function add()
    {
        $buku = new stdClass();
        $buku->id_buku = null;
        $buku->kode_buku = null;
        $buku->p_buku  = null;
        $buku->Jenis  = null;
        $buku->penerbit  = null;
        $buku->tahun  = null;

        $data = array(
            'title' => 'tambah',
            'page' => 'add',
            'h1' => 'data buku',
            'buku' => $buku,

        );
        $this->template->load('template', 'buku/add_from_data', $data);
    }

    public function prosess() // function proses 
    {
        $post = $this->input->post(null, TRUE); // ambil inputan dari post
        if (isset($post['add'])) { // jika ada input dari post name add
            $this->buku_m->add($post); // buat function add di buku m 
        } else if (isset($post['edit'])) { // jika ada input edit  
            $this->buku_m->edit($post); // buat function edit di  post
        } //tampilkan data di rows

        if ($this->db->affected_rows() > 0) {
            //pesan data berhasil di tambag
            echo "<script> 
                alert('Selamat data Berhasil di tambah/ubah');
                window.location='" . site_url('buku') . "';
            </script>";
        }
    }

    public function del($id) // function del dengan parameter id 
    {
        $this->buku_m->del($id); // bikin function del dengan parameter id 
        if ($this->db->affected_rows() > 0) { //jika data di rows 

            //tampilkan pesan 
            echo "<script> 
                alert('Selamat data Berhasil di hapus');
                window.location='" . site_url('buku') . "';
            </script>";
        }
    }

    public function edit($id) // buat function edit berdasarkan id 
    {
        $query = $this->buku_m->get($id); // variabel dari buku m data get
        if ($query->num_rows() > 0) { // jika variabel ini di row 
            $buku = $query->row(); // buka  ini di ambil satu baris 
            $data = array( // array assoisted 
                'title' => 'tambah', // kata 
                'h1' => 'data buku', // kata 
                'page' => 'edit', //name button
                'buku' => $buku //lempar data dalam buku

            );
            //load template
            $this->template->load('template', 'buku/add_from_data', $data);
            //data tidak ada 
        } else {
            echo "<script>alert('Data yang anda cari tidak ada ');</script>";
            echo "window.location='" . site_url('buku/form_departemen') . "';";
        }
    }
}

/* End of file Controllername.php */
