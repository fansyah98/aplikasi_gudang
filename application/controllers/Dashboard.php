<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller // ini adalah sebuah classs
{
	public function index() // ini adalah sebuah function
	{
		check_not_login(); // ini adalah function untuk akses login jika dia gak login 
		//ini adalaha untuk meload tampilan yang ada di view
		$this->template->load('template', 'dashboard');
	}
}
