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