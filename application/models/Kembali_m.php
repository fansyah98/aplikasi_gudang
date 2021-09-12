<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kembali_m extends CI_Model
{
    public function get($id = null) // function dengan parameter id 
    {
        //milih data yang di ambil dari data pengembailan
        $this->db->select('data_pengembalian.*  , data_pinjem.nama_peminjam as a , data_buku.p_buku as b');
        $this->db->from('data_pengembalian');
        //dari tabel form pengembalian

        //join database dari tabel lain
        $this->db->join('data_buku', 'data_buku.id_buku= data_pengembalian.p_buku');
        //join database dari tabel lain
        $this->db->join('data_pinjem', 'data_pinjem.id_pinjem = data_pengembalian.nama_peminjam');
        if ($id != null) {
            $this->db->where('id_pengembalian', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $data = [
            'p_buku' => $post['p_buku'],
            'nama_peminjam' => $post['pinjam'],
            'nrp' => $post['nrp'],
            'hari' => $post['hari'],
            'waktu_pengembalian' => $post['waktu_pengembalian'],
            'telat' => $post['telat'],
            'denda' => $post['denda'],
        ];
        $this->db->insert('data_pengembalian', $data);
    }

    public function edit($post)
    {
        $data = [
            'p_buku' => $post['p_buku'],
            'nama_peminjam' => $post['pinjam'],
            'nrp' => $post['nrp'],
            'hari' => $post['hari'],
            'waktu_pengembalian' => $post['waktu_pengembalian'],
            'telat' => $post['telat'],
            'denda' => $post['denda'],
        ];
        $this->db->where('id_pengembalian', $post['id']);
        $this->db->update('data_pengembalian', $data);
    }

    public function del($id)
    {
        $this->db->where('id_pengembalian', $id);
        $this->db->delete('data_pengembalian');
    }
}

/* End of file Kembali_m.php */
