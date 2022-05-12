/*
Filename: rb_formsubmit2.js

   Purpose: The purpose of this program is to verify that the form
            passes an initial validation test.

            When the form is submitted, the onsubmit event handler
            verifies that the form data is complete and valid.
            An alert box is displayed notifying the user.
*/

window.onload = init;

function init() {
   document.forms[0].onsubmit = function() {
      if (this.checkValidity()) window.alert("Contact Form submitted. Thank you!");
      return false;
   }
}