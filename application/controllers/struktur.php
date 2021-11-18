<?php

class struktur extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('model_struktur');
        $this->load->helper('url');
	}

	function index(){
		$data['struktur_ormawa_micro'] = $this->model_struktur->tampil_data()->result();
		$this->load->view('header');
		$this->load->view('v_struktur',$data);
		$this->load->view('footer');
	}

	function tambah(){
		$this->load->view('header');
		$this->load->view('v_input_struktur');
		$this->load->view('footer');
	}

	function tambah_aksi(){
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$jabatan = $this->input->post('jabatan');
		$prodi = $this->input->post('prodi');
		$status = $this->input->post('status');

		$data = array(
			'nim' => $nim,
			'nama' => $nama,
			'jenis_kelamin' => $jenis_kelamin,
			'jabatan' => $jabatan,
			'prodi' => $prodi,
			'status' => $status,
			);
		$this->model_struktur->input_data($data,'struktur_ormawa_micro');
		redirect('/struktur/index');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['struktur_ormawa_micro'] = $this->model_struktur->edit_data($where,'struktur_ormawa_micro')->result();
		$this->load->view('header');
		$this->load->view('v_edit_struktur',$data);
		$this->load->view('footer');
	}

	function update(){
	$id = $this->input->post('id');
	$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$jabatan = $this->input->post('jabatan');
		$prodi = $this->input->post('prodi');
		$status = $this->input->post('status');

	$data = array(
		'nim' => $nim,
			'nama' => $nama,
			'jenis_kelamin' => $jenis_kelamin,
			'jabatan' => $jabatan,
			'prodi' => $prodi,
			'status' => $status,
	);

	$where = array('id' => $id);

	$this->model_struktur->update_data($where,$data,'struktur_ormawa_micro');
	redirect('struktur/index');
}

	function hapus($id){
		$where = array('id' => $id);
		$this->model_struktur->hapus_data($where,'struktur_ormawa_micro');
		redirect('struktur/index');
	}
}