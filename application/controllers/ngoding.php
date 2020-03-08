<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//  berikut ini adalah class yang menerapkan pembuatan librari
class Ngoding extends CI_Controller {
	// berikut adalah method yang akan diakses saat controller ini diakses tanpa menyertakan method
	function index(){
		// berikut baris kode untuk memuat librari yang telah dibuat yaitu library, dapat diliat pada folder application/libraries
		$this->load->library('library');
		// berikut ini kode function untuk memanggil method yang ada  pada library
		$this->library->nama_saya();
				echo "<br/>";
				// method pemanggil yang ada pada librari dan membutuhkan 1 parameter
                $this->library->nama_kamu("Yoga");
	}
 
}