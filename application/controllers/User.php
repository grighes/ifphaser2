<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function index()
	{
		$this->load->view('home');
	}
	
	public function login()
	{
		$this->load->view('welcome_message');
	}
	
	public function portfolio()
	{
		$this->load->view('portfolio');
	}
	
	
}
