<?php
require_once('vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


$spreadsheet = new Spreadsheet(); //Creates New Spreadsheet
$sheet = $spreadsheet->getActiveSheet(); //Retrieve the current active worksheet
$sheet->getCell('A1')->setValue('GeeksForGeeks!');//Sets cell A1 with String Value 
$sheet->getCell('A2')->setValue(TRUE);//Sets cell A2 with Boolean Value 
$sheet->getCell('B1')->setValue(123.456);//Sets cell B1 with Numeric Value 

$writer = new Xlsx($spreadsheet); //Write an .xlsx file 
$writer->save('gfg2.xlsx'); // Save .xlsx file to the current directory
?>
