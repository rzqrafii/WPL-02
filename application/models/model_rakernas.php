<?php 
	class model_rakernas extends CI_Model{
		public function __construct(){
			parent::__construct();

		}
		function tampil_rakernas(){
			$this->db->select('*');
			$this->db->from('rakernas');
			return $this->db->get();
		}
	}

?>