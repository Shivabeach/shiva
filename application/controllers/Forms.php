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

  public function daily($time=null, $date=null,$weight=null)
  {
    $data = [
      "time"   => trim($this->input->post('time')),
      "date"   => trim($this->input->post('date')),
      "weight" => trim($this->input->post('weight'))
    ];
    $this->form_validation->set_rules('time', 'time', 'required|trim');
    $this->form_validation->set_rules('date', 'date', 'required|trim');
    $this->form_validation->set_rules('weight', 'Weight', 'required|trim|greater_than[200]|numeric');
    // eatery
    if( $this->form_validation->run() == FALSE) {
      echo validation_errors();
    }else {
      $this->db->insert("eatery", $data);
      echo "Yer too fat";
    }
  }
  public function teathug ()
    {
      $data = [
        "teaName"      => trim($this->input->post("teaName")),
        "teaType"      => trim($this->input->post("teaType")),
        "buyAgain"     => trim($this->input->post("buyAgain")),
        "lastPurchase" => trim($this->input->post("lastPurchase")),
        "cost"         => trim($this->input->post("cost")),
        "amount"       => trim($this->input->post("amount")),
        "orderedQty"   => trim($this->input->post("orderedQty")),
        "comment"      => trim($this->input->post("comment")),
        "total"        => $this->input->post("cost") * $this->input->post("amount")
      ];

      $this->form_validation->set_rules('teaName', 'teaname', 'required|min_length[6]');
      $this->form_validation->set_rules('teaType', 'teaType', 'required|min_length[4]');
      $this->form_validation->set_rules('buyAgain', 'buyAgain', 'required|min_length[2]');
      $this->form_validation->set_rules('lastPurchase', 'lastPurchase', 'required');
      $this->form_validation->set_rules('cost', 'cost', 'required|numeric');
      $this->form_validation->set_rules('amount', 'amount', 'required');
      $this->form_validation->set_rules('orderedQty', 'orderedQty', 'required');
      $this->form_validation->set_rules('comment', 'comment', 'min_length[10]');

      if( $this->form_validation->run() == FALSE) {
        echo validation_errors();
      }else {
        $this->db->insert("tea", $data);
        echo "in";
      }
    }


}

/* End of file Forms.php */
/* Location: ./application/controllers/Forms.php */
