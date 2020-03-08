<?php 

class Form extends CI_Controller{ //Meng-extend controller baru dengan CI_Controller

	function __construct(){ // function construct adalah function yang berfungsi untuk menjalankan fungsi yang diinginkan ketika controller diakses
		parent::__construct();
		$this->load->library('form_validation'); // Syntax yang berisi library form_validation
	}

	// berikut adalah method yang akan berjalan saat controller ini diakses
	function index(){
		$this->load->view('v_form');
	}

	function aksi(){
		// Syntax yang melakukan validation form
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('konfir_email','Konfirmasi Email','required');

		// Percabangan if else
		if($this->form_validation->run() != false){
			echo "Form validation oke"; // Jika benar maka menampilkan "Form validation oke"
		}else{
			$this->load->view('v_form'); // Jika gagal maka kembali ke halaman view v_form
		}
	}
}