<?php

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet; 
use PhpOffice\PhpSpreadsheet\Writer\Xlsx; 

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$column_header=["nim","nama","jenis_kelamin","jabatan","prodi","status"];
$j=1;
foreach($column_header as $x_value) {
		$sheet->setCellValueByColumnAndRow($j,1,$x_value);
  		$j=$j+1;
	} 

//ambil data dari Database
$conn = mysqli_connect("localhost", "root", "", "evieta");

$sql = "SELECT * FROM `struktur_ormawa_micro`";
$data = mysqli_query($conn, $sql);

$i = 2; //baris
while($record=mysqli_fetch_row($data)){
    //print_r($record);
    //echo "<br>";
    $sheet->setCellValueByColumnAndRow(1, $i, $record[1]);
    $sheet->setCellValueByColumnAndRow(2, $i, $record[2]);
    $sheet->setCellValueByColumnAndRow(3, $i, $record[3]);
    $sheet->setCellValueByColumnAndRow(4, $i, $record[4]);
    $sheet->setCellValueByColumnAndRow(5, $i, $record[5]);
    $sheet->setCellValueByColumnAndRow(6, $i, $record[6]);
    $i++;
}

// Write an .xlsx file  
$writer = new Xlsx($spreadsheet); 
  
// Save .xlsx file to the files directory 
$writer->save('../struktur_ormawa_micro.xlsx'); 

?>