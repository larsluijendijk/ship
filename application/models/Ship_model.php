<?php 
class Ship_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function get_containers_with_ship_id($id){

    }

	public function get_ships(){
        $query = $this->db->get('ships');
        return $query->result_array();
    }

    public function create(){
        $data = array(
            'name' => $_POST['name'],
            'levels' => $_POST['levels'],
            'x_amount_space' =>$_POST['x_amount_space'],
            'y_amount_space' =>$_POST['y_amount_space'],
            'max_weight' => $_POST['max_weight'],
            'route_id' => $_POST['route_id']
        );
        $this->db->insert('ships', $data);
    }

    public function get_ship_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('ships');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('ships', array('id' => $id));
        return $query->row_array();
    }

    public function set_ship($id = 0)
    {
        $this->load->helper('url');
 
        $data = array(
            'name' => $this->input->post('name'),
            'levels' => $this->input->post('levels'),
            'x_amount_space' => $this->input->post('x_amount_space'),
            'y_amount_space' => $this->input->post('y_amount_space'),
            'max_weight' => $this->input->post('max_weight'),
            'route_id' => $this->input->post('route_id')
        );

        if ($id == 0) {
            return $this->db->insert('ships', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('ships', $data);
        }
    }

    public function delete_ship($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('ships');
    }
}