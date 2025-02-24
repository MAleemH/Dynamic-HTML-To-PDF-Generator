<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Set custom error log file
$logPath = __DIR__ . '/errors.log';
ini_set('log_errors', 1);
ini_set('error_log', $logPath);
