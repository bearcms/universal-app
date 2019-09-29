<?php

require __DIR__ . '/../vendor/autoload.php';

$bearCMS = new BearCMS\Universal([
    'displayErrors' => true,
    'dataDir' => __DIR__ . '/../data', // The directory where the website data will be stored
    'logsDir' => __DIR__ . '/../logs', // The directory for logs
    'appSecretKey' => 'TODO' // Get your app secret key from https://bearcms.com/
]);

$bearCMS->captureStart();
include __DIR__ . '/../app/index.html';
$bearCMS->captureSend();
