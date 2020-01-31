<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller{

	function index(){
		$data['tamu'] = $this->m_crud->tampil_data()->result();
		$this->load->view('index',$data);
	}

	function tambah(){
		$this->load->view('tambah');
	}
	function create(){
		$nama = $this->input->post('nama');
		$instansi = $this->input->post('instansi');
		$kegiatan = $this->input->post('kegiatan');

		$data = array(
			'nama' => $nama,
			'instansi' => $instansi,
			'kegiatan' => $kegiatan,
			'check_in' => date('Y:m:d H:i:s')
			);
		$this->m_crud->input_data($data,'tbl_bukutamu');
		redirect('Main/index');
	}

	function hapus($id_bukutamu){
		$where = array('id_bukutamu' => $id_bukutamu);
		$this->m_crud->hapus_data($where,'tbl_bukutamu');
		redirect('Main/index');
	}

	function edit($id_bukutamu){
		$where = array('id_bukutamu' => $id_bukutamu);
		$data['user'] = $this->m_crud->edit_data($where,'tbl_bukutamu')->result();
		$this->load->view('edit',$data);
	}
	function update(){
	$id_bukutamu = $this->input->post('id_bukutamu');
	$nama = $this->input->post('nama');
	$instansi = $this->input->post('instansi');
	$kegiatan = $this->input->post('kegiatan');

	$data = array(
		'nama' => $nama,
		'instansi' => $instansi,
		'kegiatan' => $kegiatan
	);

	$where = array(
		'id_bukutamu' => $id_bukutamu
	);

	$this->m_crud->update_data($where,$data,'tbl_bukutamu');
	redirect('Main/index');
	}
		function check_out($id_bukutamu){
		$where = array('id_bukutamu' => $id_bukutamu);
		$data['user'] = $this->m_crud->edit_data($where,'tbl_bukutamu')->result();
		$this->load->view('check_out',$data);
	}
	function proses_check_out(){
	$id_bukutamu = $this->input->post('id_bukutamu');
	$data = array(
		'check_out' => date('Y:m:d H:i:s')
	);

	$where = array(
		'id_bukutamu' => $id_bukutamu
	);

	$this->m_crud->update_data($where,$data,'tbl_bukutamu');
	redirect('Main/index');
	}

}
