<?php
//require 'vendor/autoload.php';

class Manage extends CI_Controller {
  public function __construct()
  {
          parent::__construct();
$data['author'] = $this->session->author;
if(empty($this->session->email)) {
//  header('Location:'.base_url().'/ucp/login');
}
if($this->session->position=='member') {
    header('Location:'.base_url());
}
}
        public function index()
        {

$data['title'] = "Admin Panel";
$this->parser->parse('admin/head',$data);
  $this->load->view('admin/index',$data);
        }

public function approved_contracts() {
$data['contract'] = $this->contract_model->get_contracts_approved();
$data['title'] = "Admin Panel - Approved Contracts";
$this->parser->parse('admin/head',$data);
$this->parser->parse('admin/approved_contracts',$data);
}

public function bids() {
$data['bids'] = $this->contract_model->get_bids();
$data['title'] = "Admin Panel - Submissions";
$this->parser->parse('admin/head',$data);
$this->parser->parse('admin/bids',$data);
}

public function contracts() {
  $data['contract'] = $this->contract_model->get_contracts();
$data['title'] = "Admin Panel - Articles";
$this->parser->parse('admin/head',$data);
$this->parser->parse('admin/contracts',$data);
}


public function events() {
$data['events'] = $this->admin_model->get_events();
$data['title'] = "Admin Panel - Editorial Team";
$this->parser->parse('admin/head',$data);
$this->parser->parse('admin/events',$data);
}

public function users() {
  $data['user'] = $this->user_model->get_user();
$data['title'] = "Admin Panel - Users";
$this->parser->parse('admin/head',$data);
$this->parser->parse('admin/users',$data);
}

public function settings() {
$data['title'] = "Admin Panel - Settings";
$res = $this->user_model->get_volume();
$ress = $this->user_model->get_issue();
$data['archive'] = $this->user_model->get_archive();
$data['volume'] = $res;
$data['issue'] = $ress;
$this->parser->parse('admin/head',$data);
$this->parser->parse('admin/settings',$data);
}

public function publish_contract() {
//Generate Unique contract number
$rand = random_string('alpha', 2);
$id = $this->contract_model->count_contracts();
if($id < 1) {
  $nid = 'PCL0001'.$rand;
} elseif($id>=1 && $id<10) {
  $ids = $id+1;
 $nid = 'PCL000'.$ids.$rand;
}
elseif($id>9) {
    $ids = $id+1;
  $nid = 'PCL00'.$ids.$rand;
}
$contract = $this->contract_model->publish_contract($nid);
if($contract==true) {
echo 'true';
} else {
echo $contract;}
}


public function save_event() {
$event = $this->admin_model->save_event();
if($event==true) {
echo 'saved';
} else {
echo 'fail';}
}

public function update_contract() {
$contract = $this->contract_model->update_contract();
if($contract==true) {
echo 'true';
} else {
echo $contract;}
}

public function get_volume() {
$issue = $this->user_model->get_volumes();
foreach($issue as $issues) {
echo '<option>-Select Volume</option><option value="'.$issues['volume'].'">'.$issues['volume'].'</option>';
}
}

public function get_issue() {
$issue = $this->user_model->get_issues();
foreach($issue as $issues) {
echo '<option value="'.$issues['issue'].'">'.$issues['issue'].'</option>';
}
}

public function update_issue() {
$issue = $this->user_model->update_issue();
if($issue==true) {
echo 'saved';
} else {
echo 'fail';}
}

public function update_user() {
$issue = $this->user_model->update_user();
if($issue==true) {
echo 'saved';
} else {
echo 'fail';}
}

public function save_archive() {
$issue = $this->user_model->save_archive();
if($issue==true) {
echo 'saved';
} else {
echo 'fail';}
}

public function update_archive() {
$issue = $this->user_model->update_archive();
if($issue==true) {
echo 'saved';
} else {
echo 'fail';}
}

public function news() {
$data['news'] = $this->user_model->get_news();
$data['title'] = "Admin Panel - News";
$this->parser->parse('admin/head',$data);
$this->parser->parse('admin/news',$data);
}

public function update_news() {
$issue = $this->user_model->update_news();
if($issue==true) {
echo 'true';
} else {
echo 'fail';}
}

public function save_volume() {
$volume = $this->user_model->save_volume();
if($volume==true) {
echo 'saved';
} else {
echo 'fail';}
}


public function update_volume() {
$volume = $this->user_model->update_volume();
if($volume==true) {
echo 'saved';
} else {
echo 'fail';}
}

//handles delete button
public function delete_item() {
$del = $this->user_model->delete_item();
if($del==true) {
echo 'true';
} else {
echo $del;}
}





//

public function do_uploads(){
//upload contestant passport
if($this->input->post('type') == 'document') {
//$name = explode($this->input->post('name'),' ');
$config['allowed_types']        = 'pdf';
$config['max_size']             = 10000;
$config['file_name']          =  $this->input->post("title").'.pdf';
$config['upload_path']          = './uploads/articles/publications/';
$this->upload->initialize($config);
      if($this->upload->do_upload("document")){
unlink("./uploads/articles/publications/".$this->input->post('former'));
$document = $this->upload->data('file_name');
echo '
<b><i class="fa fa-check-square-o" style="color:green; font-size:14px;"> File Uploaded successfully</i></b>
<script>
$("#doc-'.$this->input->post("title").'").val("'.$document.'");
</script>';
      } else {
        $msg = $this->upload->display_errors();
        echo '
        <i class="fa fa-info-circle" style="color:red;">'.$msg.'</i>';
  }
}
}
  public function do_upload(){
//upload contestant passport
if($this->input->post('type') == 'document') {
  //$name = explode($this->input->post('name'),' ');
$config['allowed_types']        = 'pdf';
$config['max_size']             = 10000;
$config['file_name']          =  $this->input->post("title").'.pdf';
$config['upload_path']          = './uploads/articles/publications/';
$this->upload->initialize($config);
        if($this->upload->do_upload("document")){
$document = $this->upload->data('file_name');
echo '
<b><i class="fa fa-check-square-o" style="color:green; font-size:14px;"> File Uploaded successfully</i></b>
<script>
$("#doc-'.$this->input->post("title").'").val("'.$document.'");
</script>';
        } else {
          $msg = $this->upload->display_errors();
          echo '
          <i class="fa fa-info-circle" style="color:red;">'.$msg.'</i>';
		}
  } elseif($this->input->post('type') == 'image') {
    $config['allowed_types']        = 'jpg|jpeg|png';
    $config['max_size']             = 10000;
    $config['file_name']          =  $this->input->post("title").'.docx';
    $config['upload_path']          = './uploads/articles/publications/';
    $this->upload->initialize($config);
            if($this->upload->do_upload("document")){
    $document = $this->upload->data('file_name');
    echo '
    <b><i class="fa fa-check-square-o" style="color:green; font-size:14px;"> File Uploaded successfully</i></b>
    <script>
    $("#doc").val("'.$document.'");
    </script>';
            } else {
              $msg = $this->upload->display_errors();
              echo '
              <i class="fa fa-info-circle" style="color:red;">'.$msg.'</i>';
    		}
}
}
}
