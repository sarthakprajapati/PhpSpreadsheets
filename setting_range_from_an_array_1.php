
<?php
require_once('vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Creates New Spreadsheet

$spreadsheet = new Spreadsheet(); 

// Retrieve the current active worksheet

$sheet = $spreadsheet->getActiveSheet();

$rowArray = ['Geeks', 'For', 'Geeks'];
$columnArray = array_chunk($rowArray, 1);
$spreadsheet->getActiveSheet()
	->fromArray(
        $columnArray,   // The data to set
        NULL,           // Array values with this value will not be set
        'C3');          // Top left coordinate of the worksheet range where
              
//Write an .xlsx file 

$writer = new Xlsx($spreadsheet);

// Save .xlsx file to the current directory

$writer->save('gfg_range_2.xlsx'); 
?>
