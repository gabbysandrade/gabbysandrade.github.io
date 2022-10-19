<?php
/**************************
Name: Gabriela Andrade
Floração Design
Purpose: This program will render the homepage for a properly structured mobile-friendly, 
mobile-first, responsive portfolio website, Floração Design, using templates created using
the mustache library.
**************************/

// This will load the mustache template library
require_once 'mustache/mustache/src/Mustache/Autoloader.php';
Mustache_Autoloader::register();

// This will create a new mustache template engine
$mustache = new Mustache_Engine;

// These lines load the header, footer, and body template into strings
$header = file_get_contents('templates/header.html');
$body = file_get_contents('templates/home.html');
$footer = file_get_contents('templates/footer.html');
$end = file_get_contents('templates/bodend.html');

// Add page-specific variables
$header_data = ["pagetitle" => "Home"];
$footer_data = ["footertitle" => "Home"];

// Combine variables with templates and render pages
echo $mustache->render($header, $header_data) . PHP_EOL;
echo $mustache->render($body) . PHP_EOL;
echo $mustache->render($footer, $footer_data) . PHP_EOL;
echo $mustache->render($end) . PHP_EOL;