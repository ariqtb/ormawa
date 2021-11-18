<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;

$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

$spreadsheet = $reader->load("../struktur_ormawa_micro.xlsx");
$data=$spreadsheet->getSheet(0)->toArray();

//print_r($data);

$conn = mysqli_connect("localhost", "root", "", "evieta");


$N = count($data);
//echo $N;
for($i = 1; $i<$N; $i++){
    //echo $data[$i][0];

    $sql = "INSERT INTO `struktur_ormawa_micro` (`id`, `nim`, `nama`, `jenis_kelamin`, `jabatan`, `prodi`, `status`)
               VALUES (NULL, '".$data[$i][0]."', '".$data[$i][1]."', '".$data[$i][2]."', '".$data[$i][3]."', '".$data[$i][4]."')";
    "<br>";
    
    return mysqli_query($conn, $sql);
}

?>