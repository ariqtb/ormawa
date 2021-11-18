<?php
class grafik_prestasi extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
		$this->load->model('model_prestasi');
		$this->load->helper('url');
	}
    function index()
    {
        $data['data_ipk'] = $this->model_prestasi->data_ormawa()->result_array();

        print_r($data['data_ipk']);



        //print_r($d);
        //$jd = json_encode($d);
        //echo $jd;

        $c = array(
            "caption" => "Micro IT Community",
            "subCaption" => "Penilaian Kinerja Ormawa",
            "xAxisName" => "Periode",
            "yAxisName" => "Indeks Prestasi",
            "theme" => "fint"
        );


    }
}
