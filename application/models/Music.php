<?php if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Music extends CI_Model
{
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
        $this->db->limit(12);
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

    public function get_flex()
    {
        $this->db->where('type', 'flex');
        $this->db->select('id, url, name, genre, counter');
        $this->db->order_by('name', 'asc');
        $query = $this->db->get('music');
        return $query->result();
    }

    public function get_interest()
    {
        $this->db->where('type', 'inter');
        $this->db->select('id, url, name, genre, counter');
        $this->db->order_by('name', 'asc');
        $query = $this->db->get('music');
        return $query->result();
    }

    public function get_color()
    {
        $this->db->where('type', 'css');
        $this->db->select('id, url, name, genre, counter');
        $this->db->order_by('name', 'asc');
        $query = $this->db->get('music');
        return $query->result();
    }

    public function get_news()
    {
        $this->db->where('type', 'news');
        $this->db->select('id, url, name, genre, counter');
        $this->db->order_by('name', 'asc');
        $query = $this->db->get('music');
        return $query->result();
    }

    public function get_utility()
    {
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

    public function get_links()
    {
        $this->db->where('type', 'links');
        $this->db->select('id, url, name, genre, counter');
        $this->db->order_by('name', 'asc');
        $query = $this->db->get('music');
        return $query->result();
    }
    public function get_help()
    {
        $this->db->where('type', 'help');
        $this->db->select('id, url, name, genre, counter');
        $this->db->order_by('name', 'asc');
        $query = $this->db->get('music');
        return $query->result();
    }
    public function get_health()
    {
        $this->db->where('type', 'health');
        $this->db->select('id, url, name, genre, counter');
        $this->db->order_by('name', 'asc');
        $query = $this->db->get('music');
        return $query->result();
    }

    public function addup()
    {
      $this->db->select_sum('total');
      $query = $this->db->get('tea');
      return $query;
    }

    public function teasee()
    {
      $this->db->select("teaName AS Name");
      $this->db->select("teaType AS Type");
      $this->db->select('SUM(orderedQty) AS Grams');
      $this->db->select('SUM(total) AS Spent');
      $this->db->where('orderedQty >', 10);
      $this->db->group_by('teaName', 'desc');
      $this->db->order_by("lastPurchase", "desc");
      $query = $this->db->get('tea');
      return $query->result();
    }

    function grams()
    {
      $this->db->select_sum('amount');

      $query = $this->db->get('tea');
      $row = $query->row();
      return $row;
    }

    public function wishlist()
    {
      $this->db->select("teaName, teaType");
      $this->db->where('total', 0);
      $this->db->where('buyAgain', 'yes');
      $query = $this->db->get('tea');
      return $query->result();
    }
    public function lastresort()
    {
      $this->db->select("teaName, teaType");
      $this->db->where('buyAgain', 'no');
      $query = $this->db->get('tea');
      return $query->result();
    }
    public function results()
    {
      $this->db->select('teaName, teaType, comment');
      $this->db->where('comment!=', "");
      $query = $this->db->get('tea');
      return $query->result();
    }
}

/* End of file Music.php */
/* Location: ./application/models/Data-model.php */
