<?php
require_once('vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


$spreadsheet = new Spreadsheet(); //Creates New Spreadsheet
$sheet = $spreadsheet->getActiveSheet(); //Retrieve the current active worksheet

$sheet->setCellValue(
    'A1',
    "7017998256"
);//Set cell A1 with the 7017798256 with explicit conversion

$spreadsheet->getActiveSheet()->getStyle('A1')
    ->getNumberFormat()
    ->setFormatCode(
        '00000000000'
    );//// Set a number format mask to display the value as 11 digits with leading zeroes

$writer = new Xlsx($spreadsheet); //Write an .xlsx file 
$writer->save('leading02.xlsx'); // Save .xlsx file to the current directory
?>
