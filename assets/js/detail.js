"use strict";
/**************************
Name: Gabriela Andrade
Floração Design
Purpose: This script will serve the Portfolio Detail pages of the 
Floração website. It will move the class of "active" to the appropriate
link in the navbar depending upon the page title and will initiate
the popover animations.
**************************/

$(document).ready(function(){
    // Check page title
    console.log($(".page-title").text());
    switch ($(".page-title").text()) {
        case "Home":
            // Leave homepage as active link
            break;
        case "Portfolio":
            // Remove active class from home nav link
            $("#navindx").removeClass("active");
            // Add active class to Portfolio nav link
            $("#navport").addClass("active");
            break;
        case "ERROR":
            // Remove active class from home nav link
            $("#navindx").removeClass("active");
            break;
        default:
            // Remove active class from home nav link
            $("#navindx").removeClass("active");
            break;
    } 
    
    // Initiate popovers
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
});