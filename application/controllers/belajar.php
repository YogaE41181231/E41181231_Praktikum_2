<!--Membuat Controller bernama belajar.php dan membuat method halo -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//  berfunngsi mencegah akses langsung pada file controller
// nama class harus diawali huruf besar harus extends kepada CI_Controller
class Belajar extends CI_Controller {
	// function yang pertama di jalankan dan diajalankan otomatis
	function __construct(){
		parent::__construct();
		
	}
//  ini adalah method yang akan diakses saat controller ini diakses
	public function index()
		// nerikut ini print echo pada halaman index
		echo "ini method index pada controller belajar";
	}
//  ini adalah method halo yang mencoba mengirim data melalui array ke view_belajar.php
	public function halo(){
		// function memparsing data dengan bantuan array
        $data = array(
                'judul' => "Cara Membuat View Pada CodeIgniter",
                'tutorial' => "CodeIgniter"
                ); 
        // function menampilkan view view_belajar.php sekalian membawa data array
		$this->load->view('view_belajar', $data);
	}
    // berikut ini adalah method percobaan
    public function haha(){
        echo "dah lah";
    }
}