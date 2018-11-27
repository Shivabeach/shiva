<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blogs extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title']   = "ShivaBeach Blog";
		$data['heading'] = "Shiva's Blog";
		$this->load->view('header/header', $data);
		$this->load->view('pages/blog', $data);
		$this->load->view('footer/blog-footer');
	}

}


/* End of file Pages.php */
/* Location: ./application/controllers/Pages.php */
