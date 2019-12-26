<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Resetpass extends CI_Controller
{
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
		$this->load->view('form/resetpass');
		$this->load->view('templates/footer');
	}
}