<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Navigasi extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function beranda(){
		if($this->uri->segment(1)=='beranda'){echo 'active';}
		else if($this->uri->segment(1)==''){echo 'active';}
	}

	public function tentang(){
		if($this->uri->segment(1)=='tentang'){echo 'active';}
	}

	public function berita(){
		if($this->uri->segment(1)=='berita'){echo 'active';}
	}

	public function galeri(){
		if($this->uri->segment(1)=='galeri'){echo 'active';}
	}

	public function daftar(){
		if($this->uri->segment(1)=='daftar'){echo 'active';}
	}
	
	public function kontak(){
		if($this->uri->segment(1)=='kontak'){echo 'active';}
	}

}
