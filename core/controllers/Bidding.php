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
    $data['title'] = 'Dashboard - Pending Bids ';
    $this->parser->parse('head',$data);
    $this->parser->parse('bid_contract',$data);
    $this->load->view('end');
  }
  public function contract_details() {
    $data['title'] = 'Dashboard - Pending Bids ';
    $this->parser->parse('head',$data);
    $this->parser->parse('contract_details',$data);
    $this->load->view('end');
  }
}
 ?>
