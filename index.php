<?php

require 'vendor/autoload.php';

use selby\{
    IOHandler\InputHandler,
    SitemapMaker\SitemapMaker
};


$title = 'Sitemap maker';
$outputData = '';

$inputHandler = new InputHandler();

if ($inputHandler->issetPost(['submit', 'type', 'inputData'])) {
    $htmlMap = SitemapMaker::newMap($inputHandler->post('type'));
    $outputData = $htmlMap->createMap($inputHandler->post('inputData'));
}

/**
 * передаем в шаблон:
 * $title
 * $outputData
 */
include 'public/views/layout.php';
