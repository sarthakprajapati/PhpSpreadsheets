<?php
require_once('vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


$spreadsheet = new Spreadsheet(); //Creates New Spreadsheet
$sheet = $spreadsheet->getActiveSheet(); //Retrieve the current active worksheet

$sheet->setCellValue(
    'A1',
    "7017998256"
);//Set cell A1 with the 07017798256 with explicit conversion

$spreadsheet->getActiveSheet()->getStyle('A1')
    ->getNumberFormat()
    ->setFormatCode(
        '0000-000-0000'
    );

$writer = new Xlsx($spreadsheet); //Write an .xlsx file 
$writer->save('leading03.xlsx'); // Save .xlsx file to the current directory
?>
