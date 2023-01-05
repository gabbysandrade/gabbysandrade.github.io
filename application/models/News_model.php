<?php
/**************************
Name: Gabriela Andrade
Intermediate Web Programming
Purpose: This program will fetch articles from the news database for
the comer o sol web application.
**************************/

class News_model extends CI_Model {

    public function __construct()
    {
            $this->load->database();
    }
    public function get_news($slug = FALSE)
    {
            if ($slug === FALSE)
            {
                    $query = $this->db->get('news');
                    return $query->result_array();
            }
        
            $query = $this->db->get_where('news', array('slug' => $slug));
            return $query->row_array();
    }
}