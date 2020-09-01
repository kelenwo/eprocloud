<?php
Class Contracts Extends CI_Controller {

  public function add() {
    $data['title'] = 'Dashboard - Home';
    $this->parser->parse('head',$data);
    $this->parser->parse('add_contract',$data);
    $this->load->view('end');
  }
  public function list() {
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
}
 ?>
