<?php
/**************************
Name: Gabriela Andrade
Floração Design
Purpose: This program will render the launch page for a fictional startup app,
tindog.
**************************/

// This will load the mustache template library
require_once '../mustache/mustache/src/Mustache/Autoloader.php';
Mustache_Autoloader::register();

// This will create a new mustache template engine
$mustache = new Mustache_Engine;