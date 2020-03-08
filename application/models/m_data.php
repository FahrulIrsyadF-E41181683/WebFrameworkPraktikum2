<?php 

class M_data extends CI_Model{
	
	// ini adalah function untuk mengambil data dari tabel user yang ada dalam database yang telah di setting di database.php

	function ambil_data(){
		return $this->db->get('user');
	}
}