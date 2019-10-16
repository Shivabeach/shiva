<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blogs extends CI_Controller {

	public function __construct()
	{
    parent::__construct();
    $this->load->model("music");
	}

	public function index()
	{
		$data['title']   = "ShivaBeach Blog";
		$data['heading'] = "Shiva's Blog";
		$n = 2600;
    // $this->output->cache($n);
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
    if($query = $this->music->teasee()){
      $data['bought'] = $query;
    }
    if($query = $this->music->wishlist()){
      $data['wish'] = $query;
    }
    if($query = $this->music->lastresort()){
      $data['sayno'] = $query;
    }
    if($query = $this->music->results()){
      $data['comment'] = $query;
		}
		$n = 60;
		$this->output->cache($n);
		$this->load->view('header/header', $data);
		$this->load->view('pages/tea', $data);
		$this->load->view('footer/teafooter');
  }

}


/* End of file Pages.php */
/* Location: ./application/controllers/Pages.php */
