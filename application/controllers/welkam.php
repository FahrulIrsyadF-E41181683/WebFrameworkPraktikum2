<?php
defined('BASEPATH') OR exit('No direct script access allowed'); // Syntax yang berfungsi mencegah akses langsung pada file controller
 
//Meng-extend controller baru dengan CI_Controller
class Welcome extends CI_Controller {
	
	// function construct adalah function yang berfungsi untuk menjalankan fungsi yang diinginkan ketika controller diakses
	function __construct(){
		parent::__construct();
		$this->load->helper('html'); //untuk memanggil helper
	}
 
	// berikut adalah method yang akan berjalan saat controller ini diakses
	public function index(){
		$this->load->view('welcome');
	}
}