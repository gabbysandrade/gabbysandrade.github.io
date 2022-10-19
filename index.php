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