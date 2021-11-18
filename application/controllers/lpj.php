<?php
class lpj extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_lpj');
        $this->load->helper('url');
    }

    function index()
    {
        $data['data_lpj'] = $this->model_lpj->tampil_data()->result();
        $this->load->view('header');
        $this->load->view('ormawa/v_lpj', $data);
        $this->load->view('footer');
    }

    function tambah()
    {
        $this->load->view('header');
        $this->load->view('v_input_poposal');
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
        $this->model_lpj->input_data($data, 'data_lpj');
        redirect('proposal/index');
    }

    function edit($id)
    {
        $where = array('id' => $id);
        $data['data_lpj'] = $this->model_lpj->edit_data($where, 'data_lpj')->result();
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

        $this->model_lpj->update_data($where, $data, 'data_lpj');
        redirect('proposal/index');
    }

    function hapus($id)
    {
        $where = array('id' => $id);
        $this->model_lpj->hapus_data($where, 'data_lpj');
        redirect('proposal/index');
    }
}
