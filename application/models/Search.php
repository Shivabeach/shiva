<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();

	}

	public function find_genre($value)
	{
		$genre = $value;
		$this->db->select('url,name, genre,')
		$this->db->where("genre", $genre);
		$query = $this->db->get("music");
		if ( $query->num_rows() > 1)
    {
      return $query->result();
    }
	}

}

/* End of file Search.php */
/* Location: ./application/models/Search.php */
