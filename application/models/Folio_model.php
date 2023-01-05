<?php
/**************************
Name: Gabriela Andrade
Intermediate Web Programming
Purpose: This program will fetch articles from the news database for
the comer o sol web application.
**************************/

defined('BASEPATH') OR exit('Forbidden');

class Folio_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    /*
     * **********************************
     * Setters
     * **********************************
    */
    public function get_folio() {
        
        // Retrieve array of portfolio cards from database
        $query = $this->db->get('portfolio');
        $portfolio = $query->result_array();
        
        return $portfolio;
  }

}