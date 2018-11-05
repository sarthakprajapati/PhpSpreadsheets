<?php 
require_once('vendor/autoload.php');
//Load an .xlsx file
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load('gfg.xlsx');

//Store data from the activeSheet to the varibale in the form of Array

$data = array(1,$spreadsheet->getActiveSheet()->toArray(null,true,true,true));

var_dump($data);
?>
