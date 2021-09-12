<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pinjam extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(['pinjam_m', 'buku_m']);
    }

    public function index()
    {
        $data['row'] = $this->pinjam_m->get();
        $this->template->load('template', 'pinjam/data_pinjam_buku', $data);
    }

    public function add()
    {
        $pinjem = new stdClass();
        $pinjem->id_pinjem = null;
        $pinjem->nrp = null;
        $pinjem->nama_peminjam = null;
        $pinjem->batas_pinjam = null;
        $pinjem->hari = null;
        $pinjem->waktu = null;

        $query_buku = $this->buku_m->get();
        $buku[null] = '- pilih data - ';
        foreach ($query_buku->result() as $bku) {
            $buku[$bku->id_buku] = $bku->p_buku;
        }

        $data = array(
            'title' => 'halamana data',
            'h1' => 'peminjam buku',
            'page' => 'add',
            'pinjem' => $pinjem,
            'buku' => $buku, 'selectedbuku' => null,
        );
        $this->template->load('template', 'pinjam/add_data_pinjam', $data);
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['add'])) {
            $this->pinjam_m->add($post);
        } else if (isset($post['edit'])) {
            $this->pinjam_m->edit($post);
        }
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Berhasil di simpan ');
        }
        redirect('pinjam');
    }

    public function edit($id)
    {
        $query_buku = $this->buku_m->get();
        $buku[null] = '- pilih data - ';
        foreach ($query_buku->result() as $bku) {
            $buku[$bku->id_buku] = $bku->p_buku;
        }

        $query = $this->pinjam_m->get($id);
        if ($query->num_rows() > 0) {
            $pinjem = $query->row();
            $data = array(
                'title' => 'halamana data',
                'h1' => 'peminjam buku',
                'page'    => 'edit',
                'pinjem' => $pinjem,
                'buku' => $buku, 'selectedbuku' => $pinjem->id_buku,
            );
            $this->template->load('template', 'pinjam/add_data_pinjam', $data);
        } else {
            $this->session->set_flashdata('warning', 'Data Sudah berelasi dengan tabel lain ');
            redirect('pegawai');
        }
    }


    public function del($id)
    {
        $id = $this->pinjam_m->del($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'bata berhasil di hapus !!');
        }
        redirect('pinjam', 'refresh');
    }

    public function print($id)
    {
        $data = array(
            'row' => $this->buku_m->get($id)->row(),
            'pinjem' => $this->pinjam_m->get($id)->row()
        );
        $this->load->view('pinjam/print_bukti_pinjam', $data);
    }
}

/* End of file Pinjam.php */
