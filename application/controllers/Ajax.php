<?php
/**************************
Name: Gabriela Andrade
Floração Design
Purpose: This program will create the Ajax controller for the Contact
form of the Floração website.
**************************/
class Ajax extends CI_Controller {

    public function processnames() {

        // Ensure caller is an AJAX request
        if ($this->input->is_ajax_request()){
        
            // Validate
            $name = strip_tags(trim($this->input->post('name')));
            $subject = strip_tags(trim($this->input->post('subj')));
            $message = strip_tags(trim($this->input->post('frmmsg')));
            $from = strip_tags(trim($this->input->post('email')));

            // Use PHP filter for email input
            $from = filter_var($from, FILTER_VALIDATE_EMAIL, FILTER_NULL_ON_FAILURE);
    
            // Process data
            if(!empty($name) && !empty($subject) && !empty($message) && !empty($from)){

                // Form the email headers
                $headers = "From: $from\r\n";
                $headers .= "Reply-To: $from\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";

                // Create email variable to send to
                $to = "gabbysandrade@gmail.com";

                // Use built-in email function to send email
                if (mail($to, $subject, $message, $headers)) {
                    // Output
                    echo "okay";
                } else {
                    // Output
                    echo "error";
                }
            } else {
                // Silence is golden
                echo "";
            }
        }
    }

    public function index() {
        // Silence is golden
        echo "";
    }
}