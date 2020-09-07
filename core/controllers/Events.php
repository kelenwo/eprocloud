<?php
Class Events Extends CI_Controller {

  public function add() {
    $data['title'] = 'Dashboard - Home';
    $this->parser->parse('head',$data);
    $this->parser->parse('add_event',$data);
    $this->load->view('end');
  }
  public function list() {
    $data['title'] = 'Dashboard - List Contracts';
    $this->parser->parse('head',$data);
    $this->parser->parse('list_events',$data);
    $this->load->view('end');
  }

}
 ?>
