<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pinjam_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('data_pinjem');
        $this->db->join('data_buku', 'data_buku.id_buku= data_pinjem.p_buku');
        if ($id != null) {
            $this->db->where('id_pinjem', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $data = [
            'p_buku' => $post['buku'],
            'nama_peminjam' => $post['nama_peminjam'],
            'nrp' => $post['nrp'],
            'batas_pinjam' => $post['batas_pinjam'],
            'hari' => $post['hari'],
            'waktu' => $post['waktu'],
        ];
        $this->db->insert('data_pinjem', $data);
    }

    public function edit($post)
    {
        $data = [
            'p_buku' => $post['buku'],
            'nama_peminjam' => $post['nama_peminjam'],
            'nrp' => $post['nrp'],
            'batas_pinjam' => $post['batas_pinjam'],
            'hari' => $post['hari'],
            'waktu' => $post['waktu'],
        ];
        $this->db->where('id_pinjem', $post['id']);
        $this->db->update('data_pinjem', $data);
    }

    public function del($id)
    {
        $this->db->where('id_pinjem', $id);
        $this->db->delete('data_pinjem');
    }
}

/* End of file Pinjam_m.php */
