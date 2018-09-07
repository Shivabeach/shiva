<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forms extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function increment()
  {
  	if($this->input->post('id'))
	  {
	  	$id = $this->input->post('id');
	   	$this->db->set('counter', 'counter+1', false);
	    $this->db->where('id', $id);
	    $this->db->update("music");
	  }
  }

  public function add_link()
  {
  	$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
  	$data = [
			'url'     => trim($this->input->post('url')),
			'name'    => trim($this->input->post('name')),
			'genre'   => trim($this->input->post('genre')),
			'counter' => trim($this->input->post('counter')),
			'type'    => trim($this->input->post('type'))
    ];

    $this->form_validation->set_rules('url', 'url', 'required|trim');
    $this->form_validation->set_rules('name', 'Name', 'required|trim|callback_trims');
    $this->form_validation->set_rules('genre', 'Genre', 'required|trim');
    $this->form_validation->set_rules('counter', 'Counter', 'numeric');
    $this->form_validation->set_rules('type', 'Type', 'required|min_length[3]');

    if( $this->form_validation->run() == FALSE) {
			echo validation_errors();
		}else
		{
			$this->db->insert('music', $data);
			$url = $this->input->post('url');
			$name = $this->input->post('name');
			$genre = $this->input->post('genre');
			echo "<a href='$url'>$name</a> is in the $genre genre";
		}
  }

  public function trims($str)
  {
  	$str = $this->input->post('name');
  	if($str !== trim($str))
  	{
  		$this->form_validation->set_message('trims', 'This {field} field is not trimmed.');
  		return false;
  	}else
  	{
  		return true;
  	}
  }


}

/* End of file Forms.php */
/* Location: ./application/controllers/Forms.php */
