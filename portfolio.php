<?php
/**************************
Name: Gabriela Andrade
Floração Design
Purpose: This program will render the Portfolio page for a properly structured mobile-friendly, 
mobile-first, responsive portfolio website, Floração Design, using templates created using
the mustache library. The portfolio page will feature cards describing and linking to
portfolio entries.
**************************/

// This will load the mustache template library
require_once 'mustache/mustache/src/Mustache/Autoloader.php';
Mustache_Autoloader::register();

// This will create a new mustache template engine
$mustache = new Mustache_Engine;

// These lines load the header, footer, and body templates into strings
$header = file_get_contents('templates/header.html');
$body1 = file_get_contents('templates/folioStart.html');
$body2 = file_get_contents('templates/folioCard.html');
$body3 = file_get_contents('templates/folioEnd.html');
$footer = file_get_contents('templates/footer.html');
$end = file_get_contents('templates/bodend.html');

// Add page-specific variables
$header_data = ["pagetitle" => "Portfolio"];
$body2_data1 = [];
$body2_data2 = [];
$body2_data3 = [];
$body2_data4 = [];
$body2_data5 = [];
$body2_dataD = [];
$footer_data = ["footertitle" => "Portfolio"];

// Combine variables with templates and render pages
echo $mustache->render($header, $header_data) . PHP_EOL;
echo $mustache->render($body1) . PHP_EOL;
echo $mustache->render($body2, $body2_data1) . PHP_EOL;
echo $mustache->render($body2, $body2_data2) . PHP_EOL;
echo $mustache->render($body2, $body2_data3) . PHP_EOL;
echo $mustache->render($body2, $body2_data4) . PHP_EOL;
echo $mustache->render($body2, $body2_data5) . PHP_EOL;
echo $mustache->render($body2, $body2_dataD) . PHP_EOL;
echo $mustache->render($body3) . PHP_EOL;
echo $mustache->render($footer, $footer_data) . PHP_EOL;
echo $mustache->render($end) . PHP_EOL;