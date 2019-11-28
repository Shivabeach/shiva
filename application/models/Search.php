<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();

	}

	public function find_genre()
	{
		$this->load->model('search');
		$value = $this->input->post("search");
		$this->db->select('url,name, genre, type');
		$this->db->like("genre", $value);
		$this->db->or_like("name", $value);
		$this->db->or_like("type", $value);
		$query = $this->db->get("music");
		return $query->result();

	}

}

/* End of file Search.php */
/* Location: ./application/models/Search.php */
