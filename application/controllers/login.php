<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data['title']="Login | Ormawa SV IPB";
        $this->load->view('v_login',$data);

	}
}