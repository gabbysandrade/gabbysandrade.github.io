"use strict";
/**************************
Name: Gabriela Andrade
Floração Design
Purpose: This script will provide client-side validation of the
Contact form of the comer o sol web appication. It will use AJAX written
in jQuery to either allow for successful submission of the form or 
provide error messages to the user depending on the validity of the
input. It also enables the use of a button to clear the form inputs
and if the input fails validation after submission, the AJAX
function will return a server error message to the user.

It will also ensure the correct navlink is underlined.
**************************/
// Define function to clear form
function clearForm() {
    // Clear user input from form
    $("#name").val("");
    $("#email").val("");
    $("#subj").val("");
    $("#frmmsg").val("");
    // Clear error messages
    $("#msg").html("<br>");
}


$(document).ready(function(){
    // Check page title
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
});
