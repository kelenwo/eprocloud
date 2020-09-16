<?php
Class Dashboard Extends CI_Controller {

  public function __construct()  {
          parent::__construct();
if(empty($this->session->email)) {
    header('Location:'.base_url().'ucp/login/signin/return/'.str_replace('/','_',uri_string()));
}
}
  public function index() {
    $data = $this->session->userdata();
    $data['title'] = 'Dashboard - Home';
    $data['events'] = $this->main_model->get_events_where();
    $data['events_board'] = $this->main_model->get_events_limit();
    $data['contracts_new'] = $this->main_model->get_contracts_new();
    $data['contracts_count'] = $this->main_model->count_contracts();
    $data['contracts_finished'] = $this->main_model->count_contracts_finished();
    $data['contracts_pending_count'] = $this->main_model->count_contracts_pending();
    $data['contracts_approved_count'] = $this->main_model->count_contracts_approved();
    $data['contracts_active_count'] = $this->main_model->count_contracts_active();
    $this->parser->parse('head',$data);
    $this->parser->parse('index',$data);
    $this->load->view('end');
  }

  public function profile() {
    $data = get_object_vars($this->user_model->get_biodata());
    $data['title'] = 'Profile -'.$this->session->name;
    $this->parser->parse('head',$data);
    $this->parser->parse('profile',$data);
    $this->load->view('end');
  }
}
 ?>
