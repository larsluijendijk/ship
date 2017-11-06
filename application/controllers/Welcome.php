<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->helper('url_helper');
   }
	public function index()
	{
		$this->load->view('templates/header');    
        $this->load->view('Ship/index');
        $this->load->view('templates/footer');
	}
}
