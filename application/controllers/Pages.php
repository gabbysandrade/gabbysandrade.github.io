<?php
/**************************
Name: Gabriela Andrade
Intermediate Web Programming
Purpose: This program will create the Pages class for the comer
o sol web application.
**************************/
class Pages extends CI_Controller {

    public function view($page = 'home')
    {
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter
        $data['css'] = 'assets/css/main.css';
        $data['favicon'] = 'assets/images/favicon.ico';
        $data['logo'] = 'assets/images/logo.png';
        $data['navabt'] = 'about';
        $data['navnews'] = 'news';
        $data['js'] = 'assets/js/main.js';

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
}