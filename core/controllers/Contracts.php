<?php
Class Contracts Extends CI_Controller {
  public function __construct()  {
          parent::__construct();
if(empty($this->session->email)) {
  header('Location:'.base_url().'/ucp/login');
}
if($this->session->position=='member') {
    header('Location:'.base_url());
}
}
  public function add() {
    $data = $this->session->userdata();
    $data['title'] = 'Dashboard - Home';
    $this->parser->parse('head',$data);
    $this->parser->parse('add_contract',$data);
    $this->load->view('end');
  }

  public function confirm_contract() {
    $dat = $this->contract_model->get_bid_where();
    $arr = get_object_vars($dat);
    $data = array_merge($arr,$this->session->userdata());
    $data['title'] = 'Dashboard - Home';
    $this->parser->parse('head',$data);
    $this->parser->parse('add_contract_bid',$data);
    $this->load->view('end');
  }

  public function publish_contract() {
  //Generate Unique contract
  $contract = $this->main_model->publish_contract();
  if($contract==true) {
  echo 'true';
  } else {
  echo $contract;}
  }

  public function publish_contract_bid() {
  //Generate Unique contract
  $this->main_model->update_contract_bid();
  $contract = $this->main_model->publish_contract();
  if($contract==true) {
  echo 'true';
  } else {
  echo $contract;}
  }

  public function list() {
    $data['contract'] = $this->main_model->get_contracts();
    $data['title'] = 'Dashboard - List Contracts';
    $this->parser->parse('head',$data);
    $this->parser->parse('list_contracts',$data);
    $this->load->view('end');
  }

  public function details() {
    $data['title'] = 'Dashboard - Pending Bids ';
    $this->parser->parse('head',$data);
    $this->parser->parse('contract_details',$data);
    $this->load->view('end');
  }
  public function update_contract() {
  $contract = $this->main_model->update_contract();
  if($contract==true) {
  echo 'true';
  } else {
  echo $contract;}
  }
}
 ?>
