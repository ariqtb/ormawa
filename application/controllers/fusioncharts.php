<?php


class fusioncharts extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('fusioncharts');
        $this->load->helper('url');
    }

    function index()
    {
        $data['data_prestasi'] = $this->model_prestasi->tampil_data()->result();
        $data_array = $this->model_prestasi->data_excel()->result_array();

        $this->load->library('FusionCharts');

        if ($this->uri->segment(3) == '')
            $chartType = 'Column2D';
        else
            $chartType = $this->uri->segment(3);

        $width = '600';
        $height = '300';

        $chart = new FusionCharts($chartType, $width, $height);

        $caption = 'Grafik Mahasiswa';
        $xAxisName = 'Jenis Kelamin';
        $yAxisName = 'Jumlah';
        $decimalPrecision = '0';
        $formatNumberScale = '0';
        $showNames = '1';

        $strXML = "
            <graph caption='" . $caption . "' xAxisName='" . $xAxisName . "' yAxisName='" . $yAxisName . "' decimalPrecision='" . $decimalPrecision . "' formatNumberScale='" . $formatNumberScale . "'>
                <set name='Pria' value='" . $data_array->view_jenis_kelamin('Pria')->num_rows() . "' color='AFD8F8' />
                <set name='Wanita' value='" . $this->mahasiswa_m->view_jenis_kelamin('Wanita')->num_rows() . "' color='F6BD0F' />
            </graph>";

        $data['chart'] = $chart->renderChartHTML(base_url() . 'charts/FCF_' . $chartType . '.swf', '', $strXML, 'chartId', $width, $height);

        $this->load->view('mahasiswa_chart_v', $data);
    }
}
