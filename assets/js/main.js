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

// Define function to validate form input
function validate() {
    // Initialize error message as empty
    var errorMessage = "";

    // Retrieve and trim inputs
    var name = $("#name").val().trim();
    var subject = $("#subj").val().trim();
    var message = $("#frmmsg").val().trim();
    var email = $("#email").val().trim();

    // Return trimmed inputs to form
    $("#name").val(name);
    $("#subj").val(subject);
    $("#frmmsg").val(message);
    $("#email").val(email);

    // Test form inputs and return error messages if invalid
    if (name == "") {
        errorMessage += "The 'Name' field cannot be empty. <br>"
    }
    if (subject == "") {
        errorMessage += "The 'Subject' field cannot be empty. <br>"
    }
    if (!validEmail(email)) {
        errorMessage += "You must enter a valid email. <br>"
    }
    if (message == "") {
        errorMessage += "The 'Message' field cannot be empty. <br>"
    }
    
    // Send data to server with AJAX if there are no errors
    if (errorMessage === "") {
        sendData(name, email, subject, message);
    }
    // Otherwise, report errors
    else {
        $("#msg").html(errorMessage);
    }
}


$(document).ready(function(){
    
    // Add event handler to clear form with click of clear button
    $("#clearbtn").click(function () {
        clearForm();
    });

    // Add event handler for submit button
    $("#submitbtn").click(function () {
        // Validate form and return error messages
        validate();
    });

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
