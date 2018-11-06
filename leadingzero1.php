<?php
require_once('vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


$spreadsheet = new Spreadsheet(); //Creates New Spreadsheet
$sheet = $spreadsheet->getActiveSheet(); //Retrieve the current active worksheet

$sheet->setCellValueExplicit(
    'A1',
    "07017998256",
    \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING
);//Set cell A1 with the 07017798256 with explicit conversion

$writer = new Xlsx($spreadsheet); //Write an .xlsx file 
$writer->save('leading01.xlsx'); // Save .xlsx file to the current directory
?>
