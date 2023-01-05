<?php
/**************************
Name: Gabriela Andrade
Floração Design
Purpose: This program will create the Portfolio controller for the Portfolio
page of the Floração website.
**************************/

class Portfolio extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('folio_model');
        $this->load->helper('url_helper');
    }

    public function index() {
        // Display all portfolio entries
        $data['title'] = "Portfolio";
        $data['navport'] = 'portfolio';

        // Fetch portfolio from model
        $portfolio['portfolio'] = $this->folio_model->get_folio();

        // Use the parser to turn the portfolio into formatted html
        // Include TRUE to tell parser to return and not print
        $data['portfolio'] = $this->parser->parse('templates/folio_template', $portfolio, TRUE);

        $this->load->view('templates/header', $data);
        $this->load->view('portfolio/index');
        $this->load->view('templates/footer');
    }
}