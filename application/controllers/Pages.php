<?php
/**************************
Name: Gabriela Andrade
Floração Design
Purpose: This program will create the Pages class for the Floração website.
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
        $data['navabt'] = '#about';
        $data['navcnt'] = '#contact-form';
        $data['navport'] = 'portfolio';
        $data['jslink'] = 'assets/js/main.js';

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
}