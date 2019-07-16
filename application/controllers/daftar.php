<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$data['title'] = 'Pendaftaran | Sekolah Luar Biasa';
		$data['content'] = 'daftar';

		$this->load->view('v_head.php', $data);
		$this->load->view('v_header.php');
		$this->load->view('v_navbar.php');
		$this->load->view('v_daftar.php');
		$this->load->view('v_footer.php');
	}
}
