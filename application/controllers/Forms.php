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


}

/* End of file Forms.php */
/* Location: ./application/controllers/Forms.php */
