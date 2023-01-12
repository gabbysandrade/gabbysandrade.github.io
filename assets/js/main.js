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

// Define function to validate email
function validEmail(email) {
    // Regex for email address
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    // Return true if valid and false if invalid
    return re.test(email);
}

// Define function to send data for server validation through AJAX
function sendData(name, email, subj, frmmsg){
    
    // Send data through AJAX
    $.ajax({
        url: 'processnames',
        type: 'POST',
        data: {name: name, email: email, subj: subj, frmmsg: frmmsg},
        success: function (val) {
            // Clear form and generate success message if server returns success response
            if (val === "okay") {
                clearForm();
                $("#msg").html("Your message was sent!");
            }
            // Otherwise generate error message 
            else {
                $("#msg").html("Sorry, your email was not sent.");
            }
        },
        // Generate error message in case of server error response
        error: function () {
            $("#msg").html("Sorry, your email was not sent.");
        }
    });

    return;
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
