<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Petugas_m extends CI_Model
{



    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('data_petugas');
        if ($id != null) {
            $this->db->where('id_petugas', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function del($id)
    {
        $this->db->where('id_petugas', $id);
        $this->db->delete('data_petugas');
    }


    public function add($post)
    {
        $data = [
            'nama_petugas' => $post['nama_petugas'],
            'hari' => $post['hari'],
            'waktu' => $post['waktu_masuk'],
            'istirahat' => $post['istirahat'],
            'waktu_pulang' => $post['waktu_pulang'],
        ];
        $this->db->insert('data_petugas', $data);
    }

    public function edit($post)
    {
        $data = [
            'nama_petugas' => $post['nama_petugas'],
            'hari' => $post['hari'],
            'waktu' => $post['waktu_masuk'],
            'istirahat' => $post['istirahat'],
            'waktu_pulang' => $post['waktu_pulang'],
        ];
        $this->db->where('id_petugas', $post['id']);
        $this->db->update('data_petugas', $data);
    }
}
