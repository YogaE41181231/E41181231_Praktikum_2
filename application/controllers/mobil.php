<?php
// ini adalah sebuah class mobil yang akan menerapkan fungsi url dengan mengirim beberapa parameter
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Mobil extends CI_Controller {
	// method warna yang akan menerapkan fungsi dari url 
	public function warna(){

		echo "Mobil itu berwarna " . $this->uri->segment('3');
		
	}
 
}