<?php

class beranda extends CI_Controller{
    public function index()
	{
		$this->load->view('header');
		$this->load->view('ormawa/v_beranda');
		$this->load->view('footer');
		$this->load->helper('url');
	}
}

?>