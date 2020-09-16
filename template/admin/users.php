<style>
.modal { overflow-y: auto !important}
</style>
<script src="<?php echo base_url();?>template/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>template/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>template/assets/js/demo/datatables-demo.js"></script>

<div class="col-xs-12 col-sm-9 content">
  <div class="panel panel-default">
<div class="panel-heading">
  <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar">
    <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>Archives</h3>
</div>
   <div class="panel-body">
<div class="content-row">
   <div class="col-md-12 panel">
<div class="panel-heading">

<div class="panel-options">
<a class="bg" data-target="#sample-modal-dialog-1" data-toggle="modal" href="#sample-modal"><i class="entypo-cog"></i></a>
<a data-rel="collapse" href="#"><i class="entypo-down-open"></i></a>
<a data-rel="close" href="#!/tasks" ui-sref="Tasks"><i class="entypo-cancel"></i></a>
</div>
</div>

<div class="">
  <div class="">
 <div class="tab-contents">
  <ul id="myTab1" class="nav nav-tabs nav-justified">
 <li class="active"><a class="" href="#tab1" data-toggle="tab">Users</a></li>
   <li class="" ></li>
   </ul>
  <div id="myTabContent" class="tab-content">
 <div class="tab-pane fade  active in" id="tab1">
   <div class="tab-pane" id="tab2">
   <div class="col-md-12">
    <div class="panel">

   <table class="table table-hover table-responsive custom-tbl" id="dataTable">
     <thead>
   <tr class="active">
     <th>#</th>
     <th>Name</th>
     <th>Phone Number</th>
     <th>Email</th>
     <th>Marital Status</th>
      <th>Position</th>
     <th>Date Joined</th>
     <th>Actions</th>
   </tr>
     </thead>
       <tbody>
     <?php if($user==false): ?>
       <tr><td colspan="7"><h4 class="text-center">NO DATA TO DISPLAY</h4></td></tr>
     <?php else: $i=1;?>
   <?php  foreach($user as $req): ?>
   <tr>
       <td><?php  echo $i++.'.';?>
     <td><a href="#viewuser-<?php echo $req['id'];?>" data-toggle="modal"><?php echo $req['name']; ?></a></td>
       <td><?php echo $req['phone']; ?></td>
       <td><?php echo $req['email']; ?></td>
        <td><?php echo $req['marital_status']; ?></td>
       <td><?php echo $req['rights'];?></td>
     <td><?php echo $req['date']; ?></td>
     <td class="actions">
       <a href="#edit_user_<?php echo $req['id'];?>" data-toggle="modal">Edit&nbsp;<i class="far fa-edit"></i></a>|
       <a id="del-user-<?php echo $req['id'];?>"><b style="color:red;">Delete&nbsp;<i class="fas fa-trash-alt"></i></a></b>
       <form id="del_users-<?php echo $req['id'];?>">
       <input type="hidden" name="id" value="<?php echo $req['id'];?>">
       <input type="hidden" name="type" value="users">
     </form>
     </td>
   </tr>

   <!-- view user modal -->
   <div class="modal fade" id="viewuser-<?php echo $req['id'];?>" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">

       <div class="modal-content" style="font-size: 1.5em;">
         <div class="modal-header inline">
         <div class="text-center mt-3">
   <span class="fa-stack text-main fa-2x" style="margin-top: -0.7em; font-size: 1.1em !important;">
     <i class="fas fa-circle fa-stack-2x"></i>
     <i class="fas fa-user fa-stack-1x fa-inverse"></i>
   </span> <h3 class="d-inline">View User</h3>
   </div>
   </div>
         <div class="modal-body">
   <!-- General Information start-->
   <div class="col-md-12">
   <span class="fa-stack text-success fa-2x" style="font-size: 0.9em !important;">
   <i class="fas fa-circle fa-stack-2x"></i>
   <i class="far fa-copy fa-stack-1x fa-inverse"></i>
 </span> <h5 class="d-inline">User Information</h5>
   </div>
   <div class="col-sm-11 col-md-11 card  bg-light ml-4">
   <div class="card-body" style="margin: -5px!important;">
   <div class="row">
     <div class="col-sm-6 col-md-6 mt-3">
   <div class="text-sm text-primary ml-3 text-capitalize"><small class="text-success">Full Name:</small>
   <br>
   <h6><?php echo $req['name'];?></h6></div>
   <br>
             <div class="ml-3">
             <div class="text-sm text-primary text-capitalize"><small class="text-success">Mobile Number:</small>
             <br>
           <h6><?php echo $req['phone'];?></h6></div>
         <br>
         <div class="text-sm text-primary text-capitalize"><small class="text-success">Email Address:</small>
         <br>
       <h6><?php echo $req['email'];?></h6></div>
       <br>
       <div class="text-sm text-primary text-capitalize"><small class="text-success">Date Joined:</small>
       <br>
     <h6><?php echo $req['date'];?></h6></div>
         </div></div>
           <div class="col-sm-5 col-md-5 ml-4 mt-3">
             <div class="text-sm text-primary text-capitalize"><small class="text-success">Marital Status:</small>
             <br>
           <h6><?php echo $req['marital_status'];?></h6></div><br>
           <div class="text-sm text-primary text-capitalize"><small class="text-success">Religion:</small>
           <br>
         <h6><?php echo $req['religion'];?></h6></div>
         <br>
         <div class="text-sm text-primary text-capitalize"><small class="text-success">Rights:</small>
         <br>
       <h6><?php echo $req['rights'];?></h6></div>
       <br>
       <div class="text-sm text-primary text-capitalize"><small class="text-success">User ID:</small>
       <br>
     <h6><?php echo $req['id'];?></h6></div>
           </div>
         </div>
       </div>
         </div>
   <!-- General Information end -->

       </div>

         <div class="modal-footer mt-2">
           <div class="form-group text-center mt-5">
             <a class="btn pl-5 pr-5 btn-success" href="#edit_user_<?php echo $req['id'];?>" data-toggle="modal"><i class="far fa-edit"></i> Edit &nbsp;</a>
             <button class="btn pl-5 pr-5 btn-danger" id="del-user-<?php echo $req['id'];?>"><i class="fas fa-trash-alt"></i> Delete </button>
             <button class="btn pl-5 pr-5 btn-info" type="button" data-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i> &nbsp;Close</button>
          </div>
         </div>
       </div>
     </div>
   </div>
    <!-- view user modal end -->
  <!-- edit user modal -->
   <div class="modal fade" id="edit_user_<?php echo $req['id'];?>" tabindex="-1" role="dialog" data-backdrop="static">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
      <div class="modal-header">
     <h3 class="modal-title text-center">Edit User</h3>
      </div>
      <div class="modal-body">
   <form name="edit_user-<?php echo $req['id'];?>" method="post" id="edit_user-<?php echo $req['id'];?>">
      <div class="form-group">
    <label for="user">Name</label>
    <div class="input-group">
      <span class="input-group-addon">
      <i class="fa fa-user"></i>
      </span>
    <input type="text" name="name" value="<?php echo $req['name'];?>" required class="form-control" id="name">
    <input type="hidden" name="id" value="<?php echo $req['id'];?>">
    </div></div>

    <div class="form-group">
  <label for="user">Email</label>
  <div class="input-group">
    <span class="input-group-addon">
    <i class="fa fa-user"></i>
    </span>
  <input type="text" name="email" value="<?php echo $req['email'];?>" required class="form-control" id="email">
    </div></div>

  <div class="form-group">
<label for="user">Phone Number</label>
<div class="input-group">
  <span class="input-group-addon">
  <i class="fa fa-user"></i>
  </span>
<input type="text" name="phone" value="<?php echo $req['phone'];?>" required class="form-control" id="phone">
</div></div>

<div class="form-group">
<label for="user">Rights</label>
<div class="input-group">
<span class="input-group-addon">
<i class="fa fa-user"></i>
</span>
<select name="rights" class="form-control">
  <option value="member" <?php if($req['rights']=='member') {echo 'selected';}?>>Member</option>
  <option value="moderator" <?php if($req['rights']=='moderator') {echo 'selected';}?>>Moderator</option>
  <option value="administrator" <?php if($req['rights']=='administrator') {echo 'selected';}?>>Administrator</option>
</select>
</div></div>

      <div class="form-group" id="editusermsg-<?php echo $req['id'];?>"></div>
      </div>
      <div class="modal-footer">
     <button type="button" id="cancel" class="btn btn-secondary" data-dismiss="modal" >CANCEL</button>
     <button type="button" id="save-user-edit-<?php echo $req['id'];?>" class="btn btn-primary">SUBMIT <i id="loadinguser-<?php echo $req['id'];?>" class="fa fa-gear fa-spin"></i></button>
      </div>
      </form>
   </div>
   </div>
      </div>
   <script>
   $(document).ready(function() {

   $('#loadinguser-<?php echo $req["id"];?>').hide();
     $("#del-user-<?php echo $req['id'];?>").click(function(){
       if (confirm("Do you want to delete?")){
         $.ajax({
           url:'<?php echo base_url()."ucp/manage/delete_item";?>',
           type: "POST",
           data: $('#del_users-<?php echo $req["id"];?>').serialize(),
           success:function(data) {
     if(data=='true') {
     window.location.href = "<?php echo $_SERVER['PHP_SELF'];?>";
     } else {
       alert(data);
     }
     }
     });
       } {
         return false;
       }
     });
     //Save Issue edit
     $("#save-user-edit-<?php echo $req['id'];?>").click(function() {
     $("#loadinguser-<?php echo $req['id'];?>").show();
     $.ajax({
       url:'<?php echo base_url()."ucp/manage/update_user";?>',
       type: "POST",
       data: $("#edit_user-<?php echo $req['id'];?>").serialize(),
       success:function(data) {
     $("#loadinguser-<?php echo $req['id'];?>").hide();
       if(data=="saved") {
     $("#editusermsg-<?php echo $req['id'];?>").html('saved');
     window.location.href = "<?php echo $_SERVER['PHP_SELF'];?>";
       } else {
     $('#editusermsg-<?php echo $req["id"];?>').html(data);
       }
       }
     });
     });
   });
   </script>
     <?php endforeach;
   endif;?>
     </tbody>
   </table>
    </div>
    </div>
    </div>

  </div>

 </div>
</div>

 </div>
 </div>
</div>
</div>
  </div>
</div>
