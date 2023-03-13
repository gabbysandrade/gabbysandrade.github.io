"use strict";
/*******************
Name: Gabriela Andrade
EBQ Demo
Purpose: This script will cause contact icons to appear
when the "Contact Us" button on the bottom of the EBQ
landing page is clicked.
********************/

$(document).ready(function(){
    $("#contact").click(function () {
        $("#call").fadeIn(400);
        $("#email").fadeIn(1200);
        $("#linkedin").fadeIn(2000);
});
})