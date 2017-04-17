<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagram extends CI_Controller {

	function __construct() {
		parent:: __construct();
		$this->load->model('M_diagram');
	}

	function index() {
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('diagram');
		$this->load->view('template/footer');
	}




}