<?php 
class Container_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

	public function get_ships(){
        $query = $this->db->get('ships');
        return $query->result_array();
    }

    public function create(){
        $data = array(
            'name' => $_POST['name'],
            'type' => $_POST['type'],
            'weight' =>$_POST['weight'],
            'ship_id' =>$_POST['ship_id']
        );
        $this->db->insert('containers', $data);
    }
}