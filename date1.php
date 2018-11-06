<?php
require_once('vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


$spreadsheet = new Spreadsheet(); //Creates New Spreadsheet
$sheet = $spreadsheet->getActiveSheet(); //Retrieve the current active worksheet

// Set the number format mask so that the excel timestamp will be displayed as a human-readable date/time
$spreadsheet->getActiveSheet()->getStyle('A1')
    ->getNumberFormat()
    ->setFormatCode(
        \PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_DATE_DATETIME
    );


$dateTime = time(); //Get current date and timestamp
$excelDateValue = \PhpOffice\PhpSpreadsheet\Shared\Date::PHPToExcel( $dateTime ); //convert to an Excel date/time

$sheet->setCellValue('A1',$excelDateValue);//Set cell A1 with the Formatted date/time value

$writer = new Xlsx($spreadsheet); //Write an .xlsx file 
$writer->save('gfgdate.xlsx'); // Save .xlsx file to the current directory
?>
