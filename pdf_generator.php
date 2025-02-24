<?php
include_once "error_handler.php";
include_once "loadenv.php";
require_once __DIR__ . '/vendor/autoload.php';

use Knp\Snappy\Pdf;

$wkhtmltopdf_path = $_ENV['WKHTMLTOPDF_PATH'];

$templates = [
    'template_1' => 'template_1.php',
    'template_2' => 'template_2.php',
    'template_3' => 'template_3.php',
];

$templateId = isset($_GET['template']) ? $_GET['template'] : '';
if (!array_key_exists($templateId, $templates)) {
    die('Invalid template.');
}

if ($templateId === 'template_1') {
    $customerName = "John Smith";
    $invoiceDate  = date("Y-m-d");
    $items        = [
        ['name' => 'Item A', 'price' => '$10'],
        ['name' => 'Item B', 'price' => '$20'],
    ];
    $totalAmount  = '$30';
} elseif ($templateId === 'template_2') {
    $reportMonth  = "August 2025";
    $totalSales   = '$5000';
    $orderCount   = 150;
    $comments     = "Great performance!";
} elseif ($templateId === 'template_3') {
    $participantName = "Alice Johnson";
    $courseName      = "PHP Development";
    $completionDate  = date("Y-m-d");
}

ob_start();
include $templates[$templateId];
$html = ob_get_clean();

$snappy = new Pdf($wkhtmltopdf_path);

header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="File.pdf"');

echo $snappy->getOutputFromHtml($html, [
    'page-size'     => 'A4',
    'margin-top'    => '10mm',
    'margin-right'  => '10mm',
    'margin-bottom' => '10mm',
    'margin-left'   => '10mm',
]);
