<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Buku_m extends CI_Model
{



    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('data_buku');
        if ($id != null) {
            $this->db->where('id_buku', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function del($id)
    {
        $this->db->where('id_buku', $id);
        $this->db->delete('data_buku');
    }


    public function add($post)
    {
        $data = [
            'kode_buku' => $post['kode_buku'],
            'p_buku' => $post['name'],
            'Jenis' => $post['Jenis'],
            'penerbit' => $post['penerbit'],
            'tahun' => $post['tahun'],
        ];
        $this->db->insert('data_buku', $data);
    }

    public function edit($post)
    {
        $data = [
            'kode_buku' => $post['kode_buku'],
            'p_buku' => $post['name'],
            'Jenis' => $post['Jenis'],
            'penerbit' => $post['penerbit'],
            'tahun' => $post['tahun'],
        ];
        $this->db->where('id_buku', $post['id']);
        $this->db->update('data_buku', $data);
    }
}
