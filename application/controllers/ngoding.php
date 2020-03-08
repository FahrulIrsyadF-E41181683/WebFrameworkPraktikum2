<?php
defined('BASEPATH') OR exit('No direct script access allowed'); // Syntax yang berfungsi mencegah akses langsung pada file controller

// Meng-extend controller baru dengan CI_Controller
class Ngoding extends CI_Controller {
	
	function index(){
		$this->load->library('malasngoding'); // Syntax untuk memuat library yang bernama "malasngoding"
		$this->malasngoding->nama_saya(); // Memanggil method yang ada di library "malasngoding"
                echo "<br/>";
		
		// Memanggil method yang ada di library "malasngoding" dan mengisi parameter
		$this->malasngoding->nama_kamu("Andi"); 
	}

}