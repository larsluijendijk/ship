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

        if ($this->form_validation->run() === FALSE) {
            $data['ships'] = $this->Container_model->get_ships();
            $this->load->view('templates/header');
            $this->load->view('container/create', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->model('Container_model');
            $this->Ship_model->create();

            $this->session->set_flashdata('succeed', '<div class="alert alert-success text-center">Containers has been added.</div>');
            redirect("ship/create", "refresh");
        }
    }



}