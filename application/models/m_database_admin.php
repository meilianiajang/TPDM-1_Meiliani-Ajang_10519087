<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class M_database_admin extends CI_Model{

		function __construct(){
			parent::__construct();
			
		}
		
		//function menampilkan data
		function select_mcl($where = null){
			if ($where != null) {
				$this->db->where($where);
			}
			$tb_mcl = $this->table = "test";
			$query=$this->db->get($tb_mcl);
        	return $query->result_array();
		}
		

		//function menambah data
		function insert_mcl($data){
			$tb_mcl = $this->table = "test";
			$this->db->insert($tb_mcl, $data);
		}
	}
?>