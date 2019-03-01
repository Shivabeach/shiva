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

	public function money()
	{
		$data['title']   = "Expenses";
		$data['heading'] = "Expense trial";
		$this->load->view('header/header', $data);
		$this->load->view('pages/money', $data);
		$this->load->view('footer/footer-money');
	}

	public function expense()
	{
		$data['title']   = "Expense 2";
		$data['heading'] = "Expense Two";
		$this->load->view('header/header', $data);
		$this->load->view('pages/expense2', $data);
		$this->load->view('footer/footer-expense');
  }

  public function teabag ()
  {
    $data['title']   = "Tea Page";
		$data['heading'] = "Tea Page";
		$this->load->view('header/header', $data);
		$this->load->view('pages/tea', $data);
		$this->load->view('footer/footer-expense');
  }


}


/* End of file Pages.php */
/* Location: ./application/controllers/Pages.php */
