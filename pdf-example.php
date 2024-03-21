<?php
    require_once __DIR__ . '/vendor/autoload.php';
    
    // Generate PDF
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->showImageErrors = true;

    // Set PDF content and return as string
    $mpdf->WriteHTML('<h1>Hello World</h1>');
    $mpdf->Output('', 'S');
?>