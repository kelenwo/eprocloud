<?php
Class Bidding Extends CI_Controller {

  public function current() {
    $data['title'] = 'Dashboard - Current Bids ';
    $this->parser->parse('head',$data);
    $this->parser->parse('current_bids',$data);
    $this->load->view('end');
  }
  public function pending() {
    $data['title'] = 'Dashboard - Pending Bids ';
    $this->parser->parse('head',$data);
    $this->parser->parse('pending_bids',$data);
    $this->load->view('end');
  }
  public function bid() {
    $data['contracts'] = $this->main_model->get_contracts();
    $data['title'] = 'Bidding - Bid Contract ';
    $this->parser->parse('head',$data);
    $this->parser->parse('bid_contract',$data);
    $this->load->view('end');
  }
  public function contract_details($bid_number) {
    $dat = $this->main_model->get_contracts_where($bid_number);
    $data = get_object_vars($dat);
    //$data['title'] = 'Dashboard - Pending Bids ';
    $this->parser->parse('head',$data);
    $this->parser->parse('contract_details',$data);
    $this->load->view('end');
  }
  public function placebid() {
  $bid = $this->main_model->placebid();
  if($bid==true) {
  echo 'true';
  } else {
  echo 'fail';}
  }
}
 ?>
