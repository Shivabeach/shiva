<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("music");

	}
	public function index()
	{
		if($query = $this->music->get_music())
    {
      $data['music'] = $query;
    }
    if($query = $this->music->get_design())
    {
      $data['car'] = $query;
    }
    if($query = $this->music->get_code())
    {
      $data['code'] = $query;
    }
    if($query = $this->music->get_flex())
    {
      $data['flex'] = $query;
    }
    if($query = $this->music->get_interest())
    {
      $data['inter'] = $query;
    }
    if($query = $this->music->get_color())
    {
      $data['color'] = $query;
    }
    if($query = $this->music->get_news())
    {
      $data['news'] = $query;
    }
    if($query = $this->music->get_utility())
    {
      $data['utility'] = $query;
    }

    if($query = $this->music->get_herbs())
    {
      $data['herbs'] = $query;
    }
    if($query = $this->music->priority())
		{
			$data['prior'] = $query;
		}
		if($query = $this->music->get_links())
    {
      $data['links'] = $query;
    }
    $data['title']   = "New ShivaBeach";
		$data['heading'] = "Links Alive";
		$this->load->view('header/header', $data);
		$this->load->view('pages/prime', $data);
		$this->load->view('footer/footer');
	}

}
// End of file
