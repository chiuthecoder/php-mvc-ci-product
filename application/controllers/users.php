<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		// $products = $this->product->retrieveAll();
		// die('here');
		$this->load->view('login');
	}

	// public function newProduct()
	// {
	// 	$this->load->view('new_review');
	// }

	// public function create()
	// {
	// 	$result = $this->product->create($this->input->post());
	// 	if($result)
	// 	{
	// 		redirect('/');
	// 	}
	// 	else
	// 	{
	// 		echo "Network is not working!";
	// 	}
	// }


}
