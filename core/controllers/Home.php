<?php
Class Home Extends CI_Controller {

  public function index() {
    $data['title'] = "PROCLOUD - HOME";
    $this->parser->parse('home/head',$data);
    $this->parser->parse('home/index',$data);
    $this->load->view('home/end');
  }
}
