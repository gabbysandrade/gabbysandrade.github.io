"use strict";
/**************************
Name: Gabriela Andrade
Floração Design
Purpose: This script will serve the Portfolio page of the Floração
website. It will move the class of "active" to the appropriate
link in the navbar depending upon the page title and will animate
the portfolio cards upon page load.
**************************/

$(document).ready(function(){
    activelink();
    fadein();    
});

function fadein() {
    $("#crd1").animate({"opacity":"1"}, 1000);
    $("#crd2").animate({"opacity":"1"}, 1500);
    $("#crd3").animate({"opacity":"1"}, 2000);
    $("#crd4").animate({"opacity":"1"}, 2500);
    $("#crd5").animate({"opacity":"1"}, 3000);
    $("#crd6").animate({"opacity":"1"}, 3500);
}