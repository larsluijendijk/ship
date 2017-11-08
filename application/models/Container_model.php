<?php 
class Container_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

	public function get_ships(){
        $query = $this->db->get('ships');
        return $query->result_array();
    }

}