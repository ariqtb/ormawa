<?php


class proposal extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_proposal');
        $this->load->helper('url');
    }

    function index()
    {
        $data['data_proposal'] = $this->model_proposal->tampil_data()->result();
        $this->load->view('header');
        $this->load->view('ormawa/v_proposal', $data);
        $this->load->view('footer');
    }

    function tambah()
    {
        $this->load->view('header');
        $this->load->view('ormawa/v_input_proposal');
        $this->load->view('footer');
    }

    function tambah_aksi()
    {
        $nama_kegiatan = $this->input->post('nama_kegiatan');
        $nama_ormawa = $this->input->post('nama_ormawa');
        $deskripsi = $this->input->post('deskripsi');
        $bentuk = $this->input->post('bentuk');
        $status = $this->input->post('status');
        $berkas = $this->input->post('berkas');

        $data = array(
            'nama_kegiatan' => $nama_kegiatan,
            'nama_ormawa' => $nama_ormawa,
            'deskripsi' => $deskripsi,
            'bentuk' => $bentuk,
            'status' => $status,
            'berkas' => $berkas
        );
        $this->model_proposal->input_data($data, 'data_proposal');
        redirect('proposal/index');
    }

    function edit($id)
    {
        $where = array('id' => $id);
        $data['data_proposal'] = $this->model_proposal->edit_data($where, 'data_proposal')->result();
        $this->load->view('header');
        $this->load->view('v_edit_proposal', $data);
        $this->load->view('footer');
    }

    function update()
    {
        $id = $this->input->post('id');
        $nama_kegiatan = $this->input->post('nama_kegiatan');
        $nama_ormawa = $this->input->post('nama_ormawa');
        $deskripsi = $this->input->post('deskripsi');
        $bentuk = $this->input->post('bentuk');
        $status = $this->input->post('status');
        $berkas = $this->input->post('berkas');

        $data = array(
            'nama_kegiatan' => $nama_kegiatan,
            'nama_ormawa' => $nama_ormawa,
            'deskripsi' => $deskripsi,
            'bentuk' => $bentuk,
            'status' => $status,
            'berkas' => $berkas
        );

        $where = array('id' => $id);

        $this->model_proposal->update_data($where, $data, 'data_proposal');
        redirect('proposal/index');
    }

    function hapus($id)
    {
        $where = array('id' => $id);
        $this->model_proposal->hapus_data($where, 'data_proposal');
        redirect('proposal/index');
    }
}
