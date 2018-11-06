<?php
require_once('vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


$spreadsheet = new Spreadsheet(); //Creates New Spreadsheet
$sheet = $spreadsheet->getActiveSheet(); //Retrieve the current active worksheet
$sheet->setCellValue('A1', 'GeeksForGeeks!'); //Sets cell A1 with String Value 
$sheet->setCellValue('A2', TRUE); //Sets cell A2 with Boolean Value 
$sheet->setCellValue('B1', 123.456); //Sets cell B1 with Numeric Value 

$writer = new Xlsx($spreadsheet); //Write an .xlsx file 
$writer->save('gfg1.xlsx'); // Save .xlsx file to the current directory
?>
