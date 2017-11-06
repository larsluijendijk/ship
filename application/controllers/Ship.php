<?php
class Ship extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Ship_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->database();
   }

public function index(){
        $data['ships'] = $this->Ship_model->get_ships();
	    $this->load->view('templates/header');    
        $this->load->view('Ship/index', $data);
        $this->load->view('templates/footer');
}

public function view(){

}
}