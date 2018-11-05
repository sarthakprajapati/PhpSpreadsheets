<?php
require_once('vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


$spreadsheet = new Spreadsheet(); //Creates New Spreadsheet
$sheet = $spreadsheet->getActiveSheet(); //Retrieve the current active worksheet
$sheet->setCellValue('A1', 'GeeksForGeeks!'); //Sets value of cell A1
$sheet->setCellValue('B1', 'A Computer Science Portal For Geeks'); //Sets value of cell B1

$writer = new Xlsx($spreadsheet); //Write an .xlsx file 
$writer->save('gfg.xlsx'); // Save .xlsx file to the current directory
?>
