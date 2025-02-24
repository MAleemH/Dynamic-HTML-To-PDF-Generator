<?php
include_once "error_handler.php";
include_once "loadenv.php";
require_once __DIR__ . '/vendor/autoload.php';

use Knp\Snappy\Pdf;

$wkhtmltopdf_path = $_ENV['WKHTMLTOPDF_PATH'];

$snappy = new Pdf($wkhtmltopdf_path);

$html = '<html>
            <head>
                <title>Resume</title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
                <style> body { font-family: Arial; padding: 20px; } </style>
            </head>
            <body>
                <h1>John Doe</h1>
                <p>This is a sample resume.</p>
            </body>
         </html>';

header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="resume.pdf"');

echo $snappy->getOutputFromHtml($html, [
    'page-size'     => 'A4',
    'margin-top'    => '10mm',
    'margin-right'  => '10mm',
    'margin-bottom' => '10mm',
    'margin-left'   => '10mm',
]);