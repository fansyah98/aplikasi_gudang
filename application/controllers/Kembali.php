<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kembali extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(['kembali_m', 'buku_m', 'pinjam_m']);
    }

    public function index()
    {
        $data['row'] = $this->kembali_m->get();
        $this->template->load('template', 'kembali/data_buku_kembali', $data);
    }

    public function add()
    {
        $kembali = new stdClass();
        $kembali->id_pengembalian = null;
        $kembali->nrp = null;
        $kembali->nama_peminjam = null;
        $kembali->p_buku = null;
        $kembali->hari = null;
        $kembali->waktu_pengembalian = null;
        $kembali->telat = null;
        $kembali->denda = null;

        $query_buku = $this->buku_m->get();
        $p_buku[null] = '- pilih data - ';
        foreach ($query_buku->result() as $bku) {
            $p_buku[$bku->id_buku] = $bku->p_buku;
        }

        $query_pinjem = $this->pinjam_m->get();
        $pinjam[null] = '- pilih data - ';
        foreach ($query_pinjem->result() as $pjm) {
            $pinjam[$pjm->id_pinjem] = $pjm->nama_peminjam;
        }

        $query_nrp = $this->pinjam_m->get();
        $nrp[null] = '- pilih data - ';
        foreach ($query_nrp->result() as $ab) {
            $nrp[$ab->id_pinjem] = $ab->nrp;
        }

        $data = array(
            'title' => 'halamana data',
            'h1' => 'peminjam buku',
            'page' => 'add',
            'kembali' => $kembali,
            'pinjam' => $pinjam, 'selectedpinjam' => null,
            'p_buku' => $p_buku, 'selectedbuku' => null,
            'nrp' => $nrp, 'selectednrp' => null,
        );
        $this->template->load('template', 'kembali/add_data_buku_kembali', $data);
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['add'])) {
            $this->kembali_m->add($post);
        } else if (isset($post['edit'])) {
            $this->kembali_m->edit($post);
        }
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Berhasil di simpan ');
        }
        redirect('kembali');
    }

    public function edit($id)
    {
        $query_buku = $this->buku_m->get();
        $buku[null] = '- pilih data - ';
        foreach ($query_buku->result() as $bku) {
            $p_buku[$bku->id_buku] = $bku->p_buku;
        }

        $query_pinjem = $this->pinjam_m->get();
        $pinjam[null] = '- pilih data - ';
        foreach ($query_pinjem->result() as $pjm) {
            $pinjam[$pjm->id_pinjem] = $pjm->nama_peminjam;
        }

        $query_nrp = $this->pinjam_m->get();
        $nrp[null] = '- pilih data - ';
        foreach ($query_nrp->result() as $ab) {
            $nrp[$ab->id_pinjem] = $ab->nrp;
        }

        $query = $this->kembali_m->get($id);
        if ($query->num_rows() > 0) {
            $kembali = $query->row();
            $data = array(
                'title' => 'halamana data',
                'h1' => 'peminjam buku',
                'page'    => 'edit',
                'kembali' => $kembali,
                'pinjam' => $pinjam, 'selectedpinjam' => $kembali->nama_peminjam,
                'p_buku' => $p_buku, 'selectedbuku' => $kembali->p_buku,
                'nrp' => $nrp, 'selectednrp' => $kembali->nrp,
            );
            $this->template->load('template', 'kembali/add_data_buku_kembali', $data);
        }
    }



    public function del($id)
    {
        $id = $this->kembali_m->del($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'bata berhasil di hapus !!');
        }
        redirect('kembali', 'refresh');
    }

    public function print($id)
    {
        $data = array(
            'row' => $this->buku_m->get($id)->row(),
            'kembali' => $this->kembali_m->get($id)->row()
        );
        $this->load->view('kembali/print_bukti_kembali', $data);
    }
}

/* End of file kembali.php */
