<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Music extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function priority()
	{
		$numb = 8;
		$local = "local";
		$this->db->where('counter >', $numb);
		$this->db->where_not_in('type', $local);
		$this->db->order_by('counter', 'desc');
		$this->db->limit(10);
		$query = $this->db->get('music');
		return $query->result();
	}

	public function get_music()
    {
        $this->db->where('type', 'music');
        $this->db->select('id, url, name, genre, counter');
        $this->db->order_by('name', 'asc');
        $query = $this->db->get('music');
        return $query->result();
    }

    public function get_design()
    {
        $this->db->where('type', 'car');
        $this->db->select('id, url, name, genre, counter');
        $this->db->order_by('name', 'asc');
        $query = $this->db->get('music');
        return $query->result();
    }

    public function get_code()
    {
        $this->db->where('type', 'code');
        $this->db->select('id, url, name, genre, counter');
        $this->db->order_by('name', 'asc');
        $query = $this->db->get('music');
        return $query->result();
    }

    public function get_flex(){
        $this->db->where('type', 'flex');
        $this->db->select('id, url, name, genre, counter');
        $this->db->order_by('name', 'asc');
        $query = $this->db->get('music');
        return $query->result();
    }

    public function get_interest(){
        $this->db->where('type', 'inter');
        $this->db->select('id, url, name, genre, counter');
        $this->db->order_by('name', 'asc');
        $query = $this->db->get('music');
        return $query->result();
    }

    public function get_color(){
        $this->db->where('type', 'css');
        $this->db->select('id, url, name, genre, counter');
        $this->db->order_by('name', 'asc');
        $query = $this->db->get('music');
        return $query->result();
    }

    public function get_news(){
        $this->db->where('type', 'news');
        $this->db->select('id, url, name, genre, counter');
        $this->db->order_by('name', 'asc');
        $query = $this->db->get('music');
        return $query->result();
    }

    public function get_utility(){
        $this->db->where('type', 'utility');
        $this->db->select('id, url, name, genre, counter');
        $this->db->order_by('name', 'asc');
        $query = $this->db->get('music');
        return $query->result();
    }
    public function get_herbs()
    {
        $this->db->where('type', 'herbs');
        $this->db->select('id, url, name, genre, counter');
        $this->db->order_by('name', 'asc');
        $query = $this->db->get('music');
        return $query->result();
      }
}

/* End of file Music.php */
/* Location: ./application/models/Data-model.php */
