<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function index()
	{
		$this->load->view('home');
	}
	
	public function signup()
	{
		$this->load->view('signup');
	}
	
	public function portfolio()
	{
		$this->load->view('portfolio');
	}
	
	
}
