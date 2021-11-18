<?php

class Crud extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
	}

	function index()
	{
		$data['bem'] = $this->m_data->tampil_data()->result();
		$this->load->view('header');
		$this->load->view('v_tampil', $data);
		$this->load->view('footer');
	}

	function tambah()
	{
		$this->load->view('v_input');
	}

	function tambah_aksi()
	{
		$prodi = $this->input->post('prodi');
		$jumlah = $this->input->post('jumlah');

		$data = array(
			'prodi' => $prodi,
			'jumlah' => $jumlah,
		);
		$this->m_data->input_data($data, 'bem');
		redirect('/crud/index');
	}

	function edit($id)
	{
		$where = array('id' => $id);
		$data['bem'] = $this->m_data->edit_data($where, 'bem')->result();
		$this->load->view('v_edit', $data);
	}

	function update()
	{
		$id = $this->input->post('id');
		$prodi = $this->input->post('prodi');
		$jumlah = $this->input->post('jumlah');

		$data = array(
			'prodi' => $prodi,
			'jumlah' => $jumlah
		);

		$where = array('id' => $id);

		$this->m_data->update_data($where, $data, 'bem');
		redirect('crud/index');
	}

	function hapus($id)
	{
		$where = array('id' => $id);
		$this->m_data->hapus_data($where, 'bem');
		redirect('crud/index');
	}
}
