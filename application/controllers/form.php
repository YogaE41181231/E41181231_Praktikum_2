<?php 
 
class Form extends CI_Controller{
	// function construct adalah function yang akan dijalankan pertama sekali dan dijalankan otomatis
	function __construct(){
		parent::__construct();
		// berikut ini adalah kode yang memuat form_validation
		$this->load->library('form_validation');
	}
	// berikut ini adalah method yang akan diakses saat controller ini di akses tanpa menyertakan method
	function index(){
		// function menampilkan view form
		$this->load->view('v_form');
	}
	// method yang akan dijalankan ketika tombol submit di klik
	function aksi(){
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('konfir_email','Konfirmasi Email','required');
		// ini adalah kode logika yang jika benar maka akan menampilkan tulisan form validation, jika salah akan kembali ke view form
		if($this->form_validation->run() != false){
			echo "Form validation oke";
		}else{
			$this->load->view('v_form');
		}
	}
}