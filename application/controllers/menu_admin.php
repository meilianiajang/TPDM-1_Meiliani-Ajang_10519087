<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_admin extends CI_Controller {

	function __construct(){
			parent::__construct();
			$this->load->model('m_database_admin');
		}
	
	//fungsi untuk pengelolaan data akun
	function data_tampilan(){
		$data['mcl'] = $this->m_database_admin->select_mcl();
		$this->load->view('admin/header');
		$this->load->view('admin/data_mcl/data_mcl',$data);
		$this->load->view('admin/footer');
	}
	function index(){
		$this->load->view('admin/header');
		$this->load->view('admin/data_mcl/tambah_mcl');
		$this->load->view('admin/footer');
	}
	function insert_data_mcl(){
		$woody = $this->input->post('woody');
		$spicy = $this->input->post('spicy');
		$fiorat = $this->input->post('fiorat');
		$gourmande = $this->input->post('gourmande');
		$akuatik = $this->input->post('akuatik');
		$fruty = $this->input->post('fruty');
		$total_nilai = $woody + $spicy + $fiorat + $gourmande + $akuatik + $fruty;
		$data = array(
			            'gender' => $this->input->post('gender'),
			            'woody' => $this->input->post('woody'),
			            'spicy' => $this->input->post('spicy'),
			            'fiorat' => $this->input->post('fiorat'),
			            'gourmande' => $this->input->post('gourmande'),
			            'akuatik' => $this->input->post('akuatik'),
			            'fruty' => $this->input->post('fruty'),
			            'total_nilai' => $total_nilai
			            );
		$this->m_database_admin->insert_mcl($data);
		$this->session->set_flashdata('Add','<div class = "alert alert-success text-center">Data Berhasil Disimpan, Data Bisa Diihat di Data Tampilan</div>');
		redirect('menu_admin/index','refresh');
	}
}