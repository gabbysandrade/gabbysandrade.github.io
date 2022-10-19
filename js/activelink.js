/**************************
Name: Gabriela Andrade
Floração Design
Purpose: This script will move the class of "active" to the appropriate
link in the navbar depending upon the page title.
**************************/
$(document).ready(function(){
    // Check page title
    console.log($(".page-title").text());
    switch ($(".page-title").text()) {
        case "Home":
            // Leave homepage as active link
            break;
        case "About the Designer":
            // Remove active class from home nav link
            $("#navindx").removeClass("active");
            // Add active class to About the Designer nav link
            $("#navabt").addClass("active");
            break;
        case "Portfolio":
            // Remove active class from home nav link
            $("#navindx").removeClass("active");
            // Add active class to Portfolio nav link
            $("#navport").addClass("active");
            break;
        case "Work Experience":
            // Remove active class from home nav link
            $("#navindx").removeClass("active");
            // Add active class to Work Experience nav link
            $("#navexp").addClass("active");
            break;
        case "ERROR":
            // Remove active class from home nav link
            $("#navindx").removeClass("active");
            break;
        default:
            // Remove active class from home nav link
            $("#navindx").removeClass("active");
            break;
    }});