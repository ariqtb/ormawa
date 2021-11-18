<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class prestasi extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_prestasi');
		$this->load->helper('url');
	}

	function index()
	{
		$data['title'] = "Daftar Prestasi | Ormawa SV IPB";
		$data['data_prestasi'] = $this->model_prestasi->tampil_data()->result();

		$data_array = $this->model_prestasi->data_ormawa()->result_array();

		$array = 0;
		$d = array();
		if ($array < count($data_array)) {
			foreach ($data_array as $u) {
				array_push($d, array("label" => $u['tahun'], "value" => $u['jumlah']));
			}
			$array++;
		}
		$c = array(
			"caption" => "Persebaran Program Studi Anggota",
			"subCaption" => "BEM SV IPB 2021",
			"xAxisName" => "Program Studi",
			"yAxisName" => "Jumlah",
			"theme" => "fint"
		);
		$gab = array("chart" => $c, "data" => $d);
		$j = json_encode($gab);


		$this->load->view('header', $data);
		$this->load->view('v_prestasi', $data);
		$this->load->view('footer');
	}

	function excel()
	{
		$this->load->model('model_prestasi');
		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();

		$data_excel = $this->model_prestasi->tampil_data()->result_array();

		$sheet->setCellValue('A1', 'No');
		$sheet->setCellValue('B1', 'Nama');
		$sheet->setCellValue('C1', 'NIM');
		$sheet->setCellValue('D1', 'Jabatan');
		$sheet->setCellValue('E1', 'Prestasi');



			$rows = 2;
			foreach ($data_excel as $u) {
				$sheet->setCellValueByColumnAndRow(1, $rows, $u['id']);
				$sheet->setCellValueByColumnAndRow(2, $rows, $u['nama']);
				$sheet->setCellValueByColumnAndRow(3, $rows, $u['nim']);
				$sheet->setCellValueByColumnAndRow(4, $rows, $u['jabatan']);
				$sheet->setCellValueByColumnAndRow(5, $rows, $u['prestasi']);
				$rows++;
			}

		print_r($data_excel);

		$writer = new Xlsx($spreadsheet);
		$writer->save('data-prestasi.xlsx');
		$fileName = 'Data Prestasi';

		// Redirect hasil generate xlsx ke web client
		ob_end_clean();
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename=' . $fileName . '.xlsx');
		header('Cache-Control: max-age=0');
		$writer->save('php://output');
	}

	function pdf(){
		$this->load->library('Pdf');

		$data['data_prestasi'] = $this->model_prestasi->tampil_data()->result();

		error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
        $pdf = new FPDF('L', 'mm','Letter');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(0,7,'DAFTAR PRESTASI',0,1,'C');
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'No',1,0,'C');
        $pdf->Cell(60,6,'Nama Mahasiswa',1,0,'C');
        $pdf->Cell(30,6,'NIM',1,0,'C');
        $pdf->Cell(40,6,'Jabatan',1,0,'C');
		$pdf->Cell(90,6,'Prestasi',1,1,'C');
        $pdf->SetFont('Arial','',10);

        $no=0;
        foreach ($data['data_prestasi'] as $data){
            $no++;
            $pdf->Cell(10,6,$no,1,0, 'C');
            $pdf->Cell(60,6,$data->nama,1,0);
            $pdf->Cell(30,6,$data->nim,1,0);
            $pdf->Cell(40,6,$data->jabatan,1,0);
			$pdf->Cell(90,6,$data->prestasi,1,1);
        }
        $pdf->Output();
	}


	function tambah()
	{
		$this->load->view('header');
		$this->load->view('v_input_prestasi');
		$this->load->view('footer');
	}

	function tambah_aksi()
	{
		$nama = $this->input->post('nama');
		$nim = $this->input->post('nim');
		$jabatan = $this->input->post('jabatan');
		$prestasi = $this->input->post('prestasi');

		$data = array(
			'nama' => $nama,
			'nim' => $nim,
			'jabatan' => $jabatan,
			'prestasi' => $prestasi
		);
		$this->model_prestasi->input_data($data, 'data_prestasi');
		redirect('prestasi/index');
	}

	function edit($id)
	{
		$where = array('id' => $id);
		$data['data_prestasi'] = $this->model_prestasi->edit_data($where, 'data_prestasi')->result();
		$this->load->view('header');
		$this->load->view('v_edit_prestasi', $data);
		$this->load->view('footer');
	}

	function update()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$nim = $this->input->post('nim');
		$jabatan = $this->input->post('jabatan');
		$prestasi = $this->input->post('prestasi');

		$data = array(
			'nama' => $nama,
			'nim' => $nim,
			'jabatan' => $jabatan,
			'prestasi' => $prestasi
		);

		$where = array('id' => $id);

		$this->model_prestasi->update_data($where, $data, 'data_prestasi');
		redirect('prestasi/index');
	}

	function hapus($id)
	{
		$where = array('id' => $id);
		$this->model_prestasi->hapus_data($where, 'data_prestasi');
		redirect('prestasi/index');
	}
}
