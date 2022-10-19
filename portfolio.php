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
$body1 = file_get_contents('templates/pageIntro.html');
$body2 = file_get_contents('templates/folioStart.html');
$body3 = file_get_contents('templates/folioCard.html');
$body4 = file_get_contents('templates/folioEnd.html');
$footer = file_get_contents('templates/footer.html');
$end = file_get_contents('templates/bodend.html');