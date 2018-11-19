<?php
require_once('vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Creates New Spreadsheet

$spreadsheet = new Spreadsheet(); 

// Retrieve the current active worksheet

$sheet = $spreadsheet->getActiveSheet();

// Dataset
$dataSet = [
    [NULL, 2017, 2018, 2019],
    ['ABC',   12,   15,   21],
    ['DEF',   56,   73,   86],
    ['GHI',   52,   61,   69],
    ['JKL',   30,   32,   85],
];

$spreadsheet->getActiveSheet()
    ->fromArray(
        $dataSet,  // The data to set
        NULL,        // Array values with this value will not be set
        'D3'         // Top left coordinate of the worksheet range where
                     //    we want to set these values (default is A1)
    );

//Write an .xlsx file 

$writer = new Xlsx($spreadsheet);

// Save .xlsx file to the current directory

$writer->save('gfg_range.xlsx'); 
?>
