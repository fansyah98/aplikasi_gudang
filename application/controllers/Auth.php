<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function login()
    {
        check_already_login();
        $this->load->view('login');
    }

    public function process() // function prosess
    {
        $post = $this->input->post(null, TRUE); // variabel post dari form
        if (isset($post['login'])) { // jika ada post dengan name login
            $this->load->model('user_m'); // load fungsi user m 
            $query = $this->user_m->login($post); // buat variabel query 
            if ($query->num_rows() > 0) { // jika query di row 
                $row = $query->row(); // maka ambil satu baris 
                $params = array( // array assosiated
                    'userid' => $row->user_id, // userid 
                    'level'  => $row->level, //level
                );

                //cetak session berdarkan parameter
                $this->session->set_userdata($params);
                // $this->session->set_flashdata('warning', 'selamat datang di perpustakaan Kuningan Kota By Andre Fatiha & Riza Maulana');

                // redirect('dashboard', 'refresh');
                //login berhasil 
                echo "<script> 
                    alert('Selamat Login Anda Berhasil ');
                    window.location='" . site_url('dashboard') . "';
                </script>";
                //login gagal
            } else {
                echo "<script> 
                alert('Login gagal , Username / password salah');
                window.location='" . site_url('auth/login') . "';
            </script>";
            }
        }
    }

    public function keluar() // function keluar
    {
        $params = array( //array assosiate
            'userid', // ambil user 
            'level', // ambil level
        );
        $this->session->unset_userdata($params); // cetak user data berdasarkan params
        echo "<script> 
		alert('selamat anda berhasil keluar ');
		window.location='" . site_url('auth/login') . "';
	</script>";
        //keluar
    }
}

/* End of file Auth.php */
