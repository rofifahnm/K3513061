<?php
	class Tabel extends CI_Controller{	
	function datatabel(){
		$this->load->database();
		$this->load->library('table');
		$data=$this->db->query("select * from coba");
		echo $this->table->generate($data);
	}
}
?>