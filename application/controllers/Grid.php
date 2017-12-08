<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Grid extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
  }

	public function index()
	{
    $data['title'] = "Grid page";
    $this->load->view("pages/grid", $data);
	}

	public function newgrid()
	{
		$data['title'] = "NEW Grid page";
    $this->load->view("pages/new-grid", $data);
	}

}