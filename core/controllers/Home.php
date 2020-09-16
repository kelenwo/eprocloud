<?php
Class Home Extends CI_Controller {

  public function index() {
    $data['title'] = "ePROCLOUD - HOME";
    $this->parser->parse('home/head',$data);
    $this->parser->parse('home/index',$data);
    $this->load->view('home/end');
  }
  public function pricing() {
    $data['title'] = "ePROCLOUD - Pricing";
    $this->parser->parse('home/head',$data);
    $this->parser->parse('home/pricing',$data);
    $this->load->view('home/end');
  }
  public function contact() {
    $data['title'] = "PROCLOUD - HOME";
    $this->parser->parse('home/head',$data);
    $this->parser->parse('home/contact',$data);
    $this->load->view('home/end');
  }
  public function send_message() {
  $msg = $this->main_model->send_message();
  if($msg==true) {
  echo 'true';
  } else {
  echo $msg;}
  }

}
