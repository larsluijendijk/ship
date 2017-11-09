<?php
class Container extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Container_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->library('table');
        $this->load->database();
   }

   public function index(){
        $data['ships'] = $this->Container_model->get_ships();
        $this->load->view('templates/header');    
        $this->load->view('Container/index', $data);
        $this->load->view('templates/footer');
   }
   public function create(){
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('type', 'type', 'required');
        $this->form_validation->set_rules('weight', 'weight', 'required');
        $this->form_validation->set_rules('ship_id', 'ship_id', 'required');

        if ($this->form_validation->run() === FALSE) {
            $data['ships'] = $this->Container_model->get_ships();
            $this->load->view('templates/header');
            $this->load->view('container/create', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->model('Container_model');
            $this->Container_model->create();

            $this->session->set_flashdata('succeed', '<div class="alert alert-success text-center">Containers has been added.</div>');
            redirect("container/", "refresh");
        }
    }
    public function view(){
        $id = $this->uri->segment(3);
        
        if (empty($id)){
            show_404();
        }
              
        $data['containers'] = $this->Container_model->get_container_by_ship_id($id);
        $data['ship'] = $this->Container_model->get_ship_by_id($id);
            $this->load->view('templates/header');
            $this->load->view('container/view', $data);
            $this->load->view('templates/footer');
    }

}