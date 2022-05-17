<?php
if(lisset($_POST['submit']))
{
    //This page should not be accessed directly. Need to submit the form.
    echo "error; you need to submit the form!";
}
$fname = $_Post['fname'];
$lname = $_Post['lname'];
$company = $_Post['org'];
$email = $_Post['mail'];
$phone = $_Post['phone'];
$message = $_Post['message'];

//Validate first
if(empty($fname)||empty($lname)||empty($email)||empty($message))
{
    echo "Please complete all required (*) sections of the form.";
    exit;
}

$email_from = 'gabbysandrade@gmail.com';
$email_subject = "New Floração Form Submission";
$email_body = "You have received a new message from the user $fname $lname.\n".
    "Company/Organization: $company\n".
    "Email address: $email\n".
    "Phone Number: $phone\n".
    "Here is the message:\n $message".

$to = "gabbysandrade@gmail.com";
$headers = "From: $email_from \r\n";

//Send the email
mail($to,$email_subject,$email_body,$headers);

//Redirect to Homepage
header('Location: ../html/index.html');

?>