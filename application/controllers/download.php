<?php
defined('BASEPATH') OR exit('No direct script access allowed'); // Syntax yang berfungsi mencegah akses langsung pada file controller

class download extends CI_Controller { //Meng-extend controller baru dengan CI_Controller
	
	function __construct(){ // function construct adalah function yang berfungsi untuk menjalankan fungsi yang diinginkan ketika controller diakses
		parent::__construct();
		$this->load->helper(array('url','download'));				
	}

	public function index(){		
		$this->load->view('v_download');
	}

	// function untuk menjalankan download file yang sudah ada
	// function ini dijalankan ketika meng-klik tombol download file yang ada di view v_download
	public function lakukan_download(){			
		force_download('gambar/hinata.jpg',NULL);
	}	

}