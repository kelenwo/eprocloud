<?php
Class Login Extends CI_Controller{


  public function index() {
  $this->load->view('admin/login');
  }
  public function logins() {
  $login = $this->user_model->login();
  if($login==false) {
    echo 'Invalid Email/Password';
  }
  else{
  $pass = $this->input->post('password');
  if(password_verify($pass,$login->password)) {
    $res = get_object_vars($login);
  $store =  $this->session->set_userdata($res);
    echo 'true';
  } else { echo 'Inavlid Password';}
  }
}
public function save_user() {
$verify = $this->user_model->verify();
if($verify==true) {
  echo 'Email address already exist';
} else {
  $code = random_string('numeric',4); //Generate verification code

  //Initialize mail sending
  $config['protocol'] = "smtp";
  $config['smtp_host']    = 'ssl://smtp.googlemail.com';
  $config['smtp_port']    = '465';
  $config['smtp_timeout'] = '7';
  $config['smtp_user']    = 'sydneybestmanelenwo@gmail.com';
  $config['smtp_pass']    = 'dubemski04';
  $config['charset']    = 'utf-8';
  $config['newline']    = "\r\n";
  $config['mailtype'] = 'text'; // or html
  $config['validation'] = FALSE;

  $this->email->initialize($config);
  $this->email->from('ePROCLOUD');
  $this->email->to($this->input->post('email'));
  $this->email->subject('ePROCLOUD Verification');
  $this->email->message('Your activation code is: '.$code);
  $send = $this->email->send();

if($send) {
  $save = $this->user_model->save_user($code);
  if($save==true) {
$this->session->set_userdata($this->input->post());
echo 'true';
} else {
  echo 'false';
}
} else {
  show_error($this->email->print_debugger());
     return false;
}
  }
}

public function auth() {
  $mail = $this->session->email;
  $code = $this->user_model->auth($mail);
  $pass = $this->input->post('auth');
  if(password_verify($pass,$code->auth)) {
    $update = $this->user_model->update_user_auth();
    if($update==true) {
    $login = $this->user_model->login();
    $res = get_object_vars($login);
  $store =  $this->session->set_userdata($res);
    echo 'true';
  } else { echo $update;
  }
} else { echo 'The code you entered is invalid';}

}

public function signup() {
$this->load->view('register');
}

public function verify_email() {
if(empty($this->input->post())) {
  show_404();
} else {
$data = $this->input->post();
$this->parser->parse('verify',$data);
}
}

  public function logout() {
  session_destroy();
    header('Location:'.base_url());
  }
}
