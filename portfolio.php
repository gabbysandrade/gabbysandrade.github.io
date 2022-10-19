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
$body2_data1 = [
    "crdimg" => "images/psd_outbranding.png",
    "imgalt" => "OutBranding Promos",
    "crdtitle" => "OutBranding Promos",
    "crddate" => "July 2022",
    "crdtxt" => "A site developed with Wordpress for OutBranding Promos, a promotional product concierge service. I led and executed a complete redesign of the site,
    from layout to wording to graphics.",
    "crdlink" => "https://www.outbranding.com/"];
$body2_data2 = [
    "crdimg" => "",
    "imgalt" => "H&H Tax Services",
    "crdtitle" => "H&H Tax Services",
    "crddate" => "September 2022",
    "crdtxt" => "A site developed with Wordpress for H&H Tax Services, a local tax service in Texas. The site was built from concept to actualization and elements from 
    the color theme to the logo to the text was determined through an iterative and collaborative process with the client.",
    "crdlink" => "https://hhtaxservice1040.com/"];
$body2_data3 = [
    "crdimg" => "images/psd_austinmunchies.png",
    "imgalt" => "Austin Munchies",
    "crdtitle" => "Austin Munchies Food Blog",
    "crddate" => "April 2022",
    "crdtxt" => "A Wordpress site designed for a fictional young Austinite food blogger.",
    "crdlink" => "http://www.austinmunchies.wordpress.com"];
$body2_data4 = [
    "crdimg" => "images/psd_emergyinc.png",
    "imgalt" => "Emergy Inc",
    "crdtitle" => "Emergy Incorporated",
    "crddate" => "March 2022",
    "crdtxt" => "A homepage for a site designed for a (secretly) evil renewable energy corporation. Developed with Bootstrap.",
    "crdlink" => "bootstrap/html/ei_home.html"];
$body2_dataD = [
    "crdimg" => "images/psd_moresoon.png",
    "imgalt" => "More To Bloom Soon",
    "crdtitle" => "More Designs Germinating",
    "crddate" => "",
    "crdtxt" => "Return soon to check on our growth!",
    "crdlink" => ""];
$footer_data = ["footertitle" => "Portfolio"];

// Combine variables with templates and render pages
echo $mustache->render($header, $header_data) . PHP_EOL;
echo $mustache->render($body1) . PHP_EOL;
echo $mustache->render($body2, $body2_data1) . PHP_EOL;
echo $mustache->render($body2, $body2_data2) . PHP_EOL;
echo $mustache->render($body2, $body2_data3) . PHP_EOL;
echo $mustache->render($body2, $body2_data4) . PHP_EOL;
echo $mustache->render($body2, $body2_dataD) . PHP_EOL;
echo $mustache->render($body2, $body2_dataD) . PHP_EOL;
echo $mustache->render($body3) . PHP_EOL;
echo $mustache->render($footer, $footer_data) . PHP_EOL;
echo $mustache->render($end) . PHP_EOL;