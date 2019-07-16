<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$data['title'] = 'Tentang Kami | Sekolah Luar Biasa';
		$data['content'] = 'Tentang';

		$this->load->view('v_head.php', $data);
		$this->load->view('v_header.php');
		$this->load->view('v_navbar.php');
		$this->load->view('v_tentang.php');
		$this->load->view('v_footer.php');
	}
}
