<?php


require_once __DIR__ . 'assets/vendor/autoload.php';

//Variables
$text =$_POST['text'];


// Create new PDF instance

$mpdf = new \Mpdf\Mpdf();

// Create our PDF
$data='';

$data .= $text;

// Write PDF
$mpdf->WriteHTML($data);

// Output to browser
$mpdf->Output( 'certificate.pdf', 'D');

?>