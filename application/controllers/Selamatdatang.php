<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//  berikut adalah classs yang menampilkan view
class Selamatdatang extends CI_Controller {
	// Function untuk memanggil helper
	function __construct(){
		parent::__construct();
		$this->load->helper('html');
	}
	// method yang akan diakses saat controller ini diakses tanpa menyertakan method
	public function index(){
		$this->load->view('view_belajar');
	}
}