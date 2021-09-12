<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('petugas_m');
    }

    public function index()
    {
        $data = array(
            'row' => $this->petugas_m->get(),
            'title' => 'Halaman data Petugas',
            'h1' => 'master Petugas'
        );

        $this->template->load('template', 'petugas/data_Petugas', $data);
    }

    public function detail($id)
    {
        $data['row'] = $this->petugas_m->get($id)->row();
        $this->template->load('template', 'petugas/detail_data_petugas', $data);
    }

    public function add()
    {
        $petugas = new stdClass();
        $petugas->id_petugas = null;
        $petugas->nama_petugas = null;
        $petugas->hari  =  null;
        $petugas->waktu  = null;
        $petugas->istirahat  = null;
        $petugas->waktu_pulang  = null;
        $data = array(
            'title' => 'halaman tambah',
            'page' => 'add',
            'h1' => 'data Petugas',
            'petugas' => $petugas,
        );
        $this->template->load('template', 'petugas/add_from_petugas', $data);
    }

    public function prosess()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['add'])) {
            $this->petugas_m->add($post);
        } else if (isset($post['edit'])) {
            $this->petugas_m->edit($post);
        }
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'bata berhasil di simpan');
        }
        redirect('petugas', 'refresh');
    }

    public function del($id)
    {
        $this->petugas_m->del($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'bata berhasil di hapus !!');
        }
        redirect('petugas', 'refresh');
    }

    public function edit($id)
    {
        $query = $this->petugas_m->get($id);
        if ($query->num_rows() > 0) {
            $petugas = $query->row();
            $data = array(
                'title' => 'edit',
                'h1' => 'data Petugas',
                'page' => 'edit',
                'petugas' => $petugas

            );
            $this->template->load('template', 'Petugas/add_from_petugas', $data);
        } else {
            echo "<script>alert('Data yang anda cari tidak ada ');</script>";
            echo "window.location='" . site_url('Petugas/form_petugas') . "';";
        }
    }
}

/* End of file Controllername.php */
