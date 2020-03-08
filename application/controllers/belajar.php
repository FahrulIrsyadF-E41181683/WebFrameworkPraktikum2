<?php
// Syntax di bawah berfungsi mencegah akses langsung pada file controller
defined('BASEPATH') OR exit('No direct script access allowed');
 
//Meng-extend controller baru dengan CI_Controller
class Belajar extends CI_Controller {

	// function construct adalah function yang berfungsi untuk menjalankan fungsi yang diinginkan ketika controller diakses
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
	}
 
  	// berikut adalah method yang akan diakses saat controller ini diakses walaupun tanpa menyertakan method
	public function index(){
		// berikut adalah print echo pada halaman index di controller Belajar
		echo "ini method index pada controller belajar";
	}

  	// Method untuk mengirimkan data melalui array ke view_belajar
	public function halo(){
		// Data array yang akan dikirim ke view_belajar
		$data = array(
			'judul' => "Cara Membuat View Pada CodeIgniter",
			'tutorial' => "CodeIgniter"
			);
		
		// Syntax untuk memuat view belajar dan membawa data array
		$this->load->view('view_belajar', $data);
	}
	
	// Method untuk mengambil data dari database dan dikirim ke view user
	function user()
	{
		// Variabel data yang berisi hasil query select from tabel user yang ada di databse melalui model m_data dan method ambil_data()
		$data['user'] = $this->m_data->ambil_data()->result();
		// Syntax untuk memuat view user dan menampilkan data dari tabel user
		$this->load->view('v_user.php', $data);
	}
 
}