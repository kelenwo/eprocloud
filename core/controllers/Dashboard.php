<?php
Class Dashboard Extends CI_Controller {

  public function index() {
    $data['title'] = 'Dashboard - Home';
    $this->parser->parse('head');
    $this->parser->parse('index');
    $this->parser->parse('end');
  }
}
 ?>
