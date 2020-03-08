<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_belajar extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
	}
//  berfungsi untuk 
	function user(){
		$data['user'] = $this->m_data->ambil_data()->result();
		$this->load->view('user',$data);
    }
    

}


