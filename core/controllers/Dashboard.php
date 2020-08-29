<?php
Class Dashboard Extends CI_Controller {

  public function index() {
    $data['title'] = 'Dashboard - Home';
    $this->parser->parse('head',$data);
    $this->parser->parse('index',$data);
    $this->load->view('end');
  }
  public function add_contract() {
    $data['title'] = 'Dashboard - Home';
    $this->parser->parse('head',$data);
    $this->parser->parse('add_contract',$data);
    $this->load->view('end');
  }
  public function list_contracts() {
    $data['title'] = 'Dashboard - List Contracts';
    $this->parser->parse('head',$data);
    $this->parser->parse('list_contracts',$data);
    $this->load->view('end');
  }
  public function current_bids() {
    $data['title'] = 'Dashboard - Current Bids ';
    $this->parser->parse('head',$data);
    $this->parser->parse('current_bids',$data);
    $this->load->view('end');
  }
  public function pending_bids() {
    $data['title'] = 'Dashboard - Pending Bids ';
    $this->parser->parse('head',$data);
    $this->parser->parse('pending_bids',$data);
    $this->load->view('end');
  }
  public function bid_contract() {
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
  public function login() {
    $data['title'] = 'Dashboard - Login';
    $this->parser->parse('login',$data);
  }
}
 ?>
