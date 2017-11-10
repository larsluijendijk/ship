<?php
class Ship extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Ship_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->library('table');
        $this->load->database();
   }

    public function index(){
        $data['ships'] = $this->Ship_model->get_ships();
	    $this->load->view('templates/header');    
        $this->load->view('Ship/index', $data);
        $this->load->view('templates/footer');
    }

    public function create(){
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('levels', 'levels', 'required');
        $this->form_validation->set_rules('x_amount_space', 'x_amount_space', 'required');
        $this->form_validation->set_rules('y_amount_space', 'y_amount_space', 'required');
        $this->form_validation->set_rules('max_weight', 'max_weight', 'required');
        $this->form_validation->set_rules('route_id', 'route_id', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('ship/create');
            $this->load->view('templates/footer');
        } else {
            $this->load->model('Ship_model');
            $this->Ship_model->create();

            $this->session->set_flashdata('succeed', '<div class="alert alert-success text-center">Ship has been Created.</div>');
            redirect("ship/create", "refresh");
        }
    }

    public function edit(){
        $id = $this->uri->segment(3);
        
        if (empty($id)){
            show_404();
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
              
        $data['ship'] = $this->Ship_model->get_ship_by_id($id);
        
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('levels', 'levels', 'required');
        $this->form_validation->set_rules('x_amount_space', 'x_amount_space', 'required');
        $this->form_validation->set_rules('y_amount_space', 'y_amount_space', 'required');
        $this->form_validation->set_rules('max_weight', 'max_weight', 'required');
        $this->form_validation->set_rules('route_id', 'route_id', 'required');
 
        if ($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('ship/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Ship_model->set_ship($id);
            redirect(base_url('ship/index'));
        }
    }

    public function delete(){
        $id = $this->uri->segment(3);
        $ship = $this->Ship_model->get_ship_by_id($id);
        $this->Ship_model->delete_ship($id);
        redirect('ship/index');
    }
}