<script src="<?php echo base_url();?>template/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>template/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url();?>template/assets/js/demo/datatables-demo.js"></script>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Bid Contract</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Contract details</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">

                <div class="col-xl-12 col-md-10 mb-2">
                  <div class="card h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters ">
                        <div class="col mr-2">
                          <table class="table table-responsive">
                            <tbody>
                              <tr>
                                <td class="table-dark">Title</td>
                                <td>{contract_title}</td>
                              </tr>
                              <tr>
                                <td class="table-dark">Description</td>
                                <td>{description}</td>
                              </tr>
                              <tr>
                                <td class="table-dark">Category</td>
                                <td>{category}</td>
                              </tr>
                              <tr>
                                <td class="table-dark">Location</td>
                                <td>{location}</td>
                              </tr>
                              <tr>
                                <td class="table-dark">Bid Opening date</td>
                                <td><?php echo date("d F Y", strtotime($bid_opening_date));?></td>
                              </tr>
                              <tr>
                                <td class="table-dark">Bid Closing date</td>
                                <td><?php echo date("d F Y", strtotime($bid_closing_date));?></td>
                              </tr>
                            </tbody>
                          </table>
<button class="btn btn-success btn-lg btn-block" data-toggle="modal"  data-target="#bidcontractconfirm">Place Bid</button>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

<!-- Bid contract modal -->
<div class="modal fade" id="bidcontractconfirm" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Complete Bid</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form id="place_bid">
      <div class="modal-body">
        <div class="form-group">
          <label>Amount to Bid <small style="color: red">*</small></label>
          <input type="text" name="bid_amount" class="form-control form-control-user" placeholder="Amount">
        </div>
        <br>
        <div class="form-group">
          <h6>Clicking "place bid" registers you as one of the bidder for the product, do you understand?
            <small style="color: red">*</small>
          <input type="checkbox" id="confirm" class="" style="height:1rem;width:1rem;background-color:#32b449;color:#fff"></h6>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <button class="btn btn-success" id="placebid" disabled type="button">Place Bid <i id="loading" class="fas fa-cog fa-spin"></i></button>

        <input type="hidden" name="contract_title" value="{contract_title}">
        <input type="hidden" name="bid_number" value="{bid_number}">
        <input type="hidden" name="category" value="{category}">
        <input type="hidden" name="bid_by" value="kelvin">
        <input type="hidden" name="owner" value="{owner}">
        <input type="hidden" name="location" value="{location}">
        <input type="hidden" name="bid_date" value="<?php echo date('d-m-Y');?>">
        <input type="hidden" name="bid_time" value="<?php echo time();?>">
        <input type="hidden" name="bid_status" value="Pending">
</form>
      </div>
    </div>
  </div>
</div>

</body>

</html>
<script>
$(document).ready(function() {
$('#loading').hide();
$('#confirm').click(function() {
  if ($(this).is(':checked')) {
$('#placebid').removeAttr('disabled'); //enable input
} else {
$('#placebid').attr('disabled', true); //disable input
       }
});

$('#placebid').on('click',function() {
$('#loading').show();
$.ajax({
  url:'<?php echo base_url()."bidding/placebid";?>',
  type: "POST",
  data: $('#place_bid').serialize(),
  success:function(data) {
$('#loading').hide();
if(data=="true") {
alert('Bid has been placed successfully');
window.location.href = "<?php echo base_url('bidding/pending');?>";
} else {
  alert(data);
}
  }
})
});
});
</script>
