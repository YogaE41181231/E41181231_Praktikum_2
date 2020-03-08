<!-- membuat model dengan nama m_data -->

<?php  -->
class M_data extends CI_Model{
	//  function untuk mengambil data dari database
	function ambil_data(){
		// nama table yang ingin saya ambil bernama user
		// syntax return berfungsi untuk mengambalikan data yang di tangkap pada controller yang memanggil function ambil_data()
		return $this->db->get('user');
	}
}