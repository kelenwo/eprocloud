
        <!-- Begin Page Content -->
        <div class="container-fluid ml-7">
          <!-- Event details start-->
          <div class="col-md-10">
          <span class="fa-stack text-success fa-2x" style="font-size: 0.9em !important;">
          <i class="fas fa-circle fa-stack-2x"></i>
          <i class="fas fa-user fa-stack-1x fa-inverse"></i>
        </span> <h5 class="inline mb-3">Profile Details</h5>
          </div>
          <div class="col-sm-10 col-md-10 card  bg-light ml-4 mr-4">
          <div class="card-body" style="margin: -5px!important;">
          <div class="row">
                            <div class="col-sm-6 col-md-6 mt-3">
                          <div class="text-sm text-primary ml-3 text-capitalize"><small class="text-success">Full name:</small>
                          <br>
                        <h6>{name}</h6></div>
                        <br>
                    <div class="ml-3">
                    <div class="text-sm text-primary text-capitalize"><small class="text-success">Mobile Number:</small>
                    <br>
                  <h6>{phone}</h6></div>
                  <div class="text-sm text-primary text-capitalize"><small class="text-success">Email Address:</small>
                  <br>
                <h6>{email}</h6></div>
                </div></div>
                  <div class="col-sm-5 col-md-5 ml-4 mt-3">
                    <div class="text-sm text-primary ml-3 text-capitalize"><small class="text-success">Marital Status:</small>
                    <br>
                  <h6>{marital_status}</h6></div>
                  <br>
              <div class="ml-3">
              <div class="text-sm text-primary text-capitalize"><small class="text-success">Religion:</small>
              <br>
            <h6>{religion}</h6></div>
            <div class="text-sm text-primary text-capitalize"><small class="text-success">Date Joined:</small>
            <br>
          <h6>{date}</h6></div>

                  </div>
                </div>
              </div>
                </div>
          <!-- event details end -->

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


    </div>
    <!-- End of Content Wrapper -->


  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script>
  $(document).ready(function() {

  //Hide all loading icons
  $('#loading').hide();

  $('#add').on('click',function() {
  $('#loading').show();
  $.ajax({
    url:'<?php echo base_url()."events/publish_event";?>',
    type: "POST",
    data: $('#add_event').serialize(),
    success:function(data) {
  $('#loading').hide();
  if(data='true') {
  alert('Event has been saved successfully');
  window.location.href = "<?php echo base_url();?>events/list";
} else {
    alert(data);
  }
    }
  })
  });
  });
  </script>
</body>

</html>
