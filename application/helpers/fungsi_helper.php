<?php
function check_already_login() // cek user jika dia sudah login
{
    $CI = &get_instance(); // memangil fungsi dari ci
    $user_session = $CI->session->userdata('userid'); // ambil session dari user login
    if ($user_session) { // jika ada session 
        redirect('dashboard'); // alikan kan ke dashboard
    }
}

function check_not_login() // cek user belum login 
{
    $CI = &get_instance(); //memangil function login 
    $user_session = $CI->session->userdata('userid'); // ambil session  dari user login 
    if (!$user_session) { // jika ada session salah makan 
        redirect('auth/login'); // alihkan ke halaman login kembali
    }
}


function indo_rupiah($rp)
{
    return 'Rp.  ' .  number_format($rp);
}
