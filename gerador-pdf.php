<?php
require "vendor/autoload.php";

// reference the Dompdf namescape
use Dompdf\Dompdf;


// instantiate and use tje dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('hello WOrld');


//(optional) Setup the paper size and orietaion
$dompdf->setPaper('A4', 'landscape');


//render the HTML as PDF
$dompdf->render;


// Output the generated PDF to Browser
$dompdf->stream();
