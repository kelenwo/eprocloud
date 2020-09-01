<script src="<?php echo base_url();?>template/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>template/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url();?>template/assets/js/demo/datatables-demo.js"></script>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Contracts</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Contracts List</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Contract Title</th>
                      <th>Category</th>
                      <th>Contract number</th>
                      <th>Status</th>
                      <th>Start date</th>
                      <th>Billing Method</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td><a href="#" class="" data-toggle="modal"  data-target="#viewcontract">Market square construction</a></td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>61</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                    </tr>
                  </tbody>
                </table>
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

  <!-- List contract modal -->
  <div class="modal fade" id="viewcontract" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header inline">
        <div class="text-center mt-2">
 <span class="fa-stack text-main fa-2x" style="margin-top: -0.7em; font-size: 1.1em !important;">
    <i class="fas fa-circle fa-stack-2x"></i>
    <i class="fas fa-newspaper fa-stack-1x fa-inverse"></i>
  </span> <h3 class="inline">View Contract</h3>
  </div>
</div>
        <div class="modal-body">
  <div class="form-group text-center mt-3">
    <button class="btn pl-5 pr-5 btn-success" type="button"><i class="far fa-edit"></i> Edit</button>
    <button class="btn pl-5 pr-5 btn-danger" type="button"><i class="fas fa-trash"></i> Delete</button>
    <button class="btn pl-5 pr-5 btn-info" type="button" data-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i> Close</button>
</div>
<!-- General Information start-->
  <div class="col-md-12">
<span class="fa-stack text-success fa-2x" style="font-size: 0.9em !important;">
<i class="fas fa-circle fa-stack-2x"></i>
<i class="far fa-copy fa-stack-1x fa-inverse"></i>
</span> <h5 class="inline">General Information</h5>
</div>
<div class="col-sm-11 col-md-11 card  bg-light ml-4">
  <div class="card-body" style="margin: -5px!important;">
<div class="row">
                    <div class="col-sm-6 col-md-6 mt-3">
                  <div class="text-sm text-primary ml-3 text-capitalize"><small class="text-success">Contract Title:</small>
                  <br>
                <h6>COnstruction of uniuyo road</h6></div>
                <br>
            <div class="ml-3">
            <div class="text-sm text-primary text-capitalize"><small class="text-success">Category:</small>
            <br>
          <h6>Works</h6></div>
          <br>
          <div class="text-sm text-primary text-capitalize"><small class="text-success">Id:</small>
          <br>
        <h6>19130</h6></div>
        <br>
        <div class="text-sm text-primary text-capitalize"><small class="text-success">Business Partners:</small>
        <br>
      <h6>Sample</h6></div>
        </div></div>
          <div class="col-sm-5 col-md-5 ml-4 mt-3">
            <div class="text-sm text-primary text-capitalize"><small class="text-success">Contract Status:</small>
            <br>
          <h6>Active</h6></div><br>
          <div class="text-sm text-primary text-capitalize"><small class="text-success">Contract Number:</small>
          <br>
        <h6>GS06F0940Z</h6></div>
        <br>
        <div class="text-sm text-primary text-capitalize"><small class="text-success">Contract description:</small>
        <br>
      <h6>This is a sample description</h6></div>
          </div>
        </div>
      </div>
        </div>
<!-- General Information end -->
<!-- Lifecycle start-->
  <div class="col-md-12 mt-3">
<span class="fa-stack text-yellow fa-2x" style="font-size: 0.9em !important;">
<i class="fas fa-circle fa-stack-2x"></i>
<i class="fas fa-sync-alt fa-stack-1x fa-inverse"></i>
</span> <h5 class="inline">Lifecycle</h5>
</div>
<div class="col-sm-11 col-md-11 card  bg-light ml-4">
  <div class="card-body" style="margin: -5px!important;">
<div class="row">
                    <div class="col-sm-6 col-md-6">
            <div class="ml-3 mt-1">
            <div class="text-sm text-primary text-capitalize"><small class="text-success">Lifecycle:</small>
            <br>
          <h6>No renewal</h6></div>
          <br>
          <div class="text-sm text-primary text-capitalize"><small class="text-success">Start date:</small>
          <br>
        <h6>20 May, 2020</h6></div>
        </div></div>
          <div class="col-sm-5 col-md-5 ml-4 mt-2">
            <div class="text-sm text-primary text-capitalize"><small class="text-success">Renewal Period:</small>
            <br>
          <h6></h6></div><br>
          <div class="text-sm text-primary text-capitalize"><small class="text-success">End date:</small>
          <br>
        <h6>30 September, 2020</h6></div>
          </div>
        </div>
      </div>
        </div>
<!-- Lifecycle end -->
<!-- Billing start-->
  <div class="col-md-12 mt-3">
<span class="fa-stack text-danger fa-2x" style="font-size: 0.9em !important;">
<i class="fas fa-circle fa-stack-2x"></i>
<i class="far fa-credit-card fa-stack-1x fa-inverse"></i>
</span> <h5 class="inline">Billing & Financials</h5>
</div>
<div class="col-sm-11 col-md-11 card  bg-light ml-4">
  <div class="card-body" style="margin: -5px!important;">
<div class="row">
                    <div class="col-sm-6 col-md-6">
            <div class="ml-3 mt-1">
            <div class="text-sm text-primary text-capitalize"><small class="text-success">Billing Amount:</small>
            <br>
          <h6>₦300,000</h6></div>
          <br>
          <div class="text-sm text-primary text-capitalize"><small class="text-success">Billing Cycle</small>
          <br>
        <h6>Monthly</h6></div>
            </div></div>
          <div class="col-sm-5 col-md-5 ml-4 mt-2">
            <div class="text-sm text-primary text-capitalize"><small class="text-success">First Billing Date:</small>
  <br>
<h6>20 May, 2020</h6></div><br>
          <div class="text-sm text-primary text-capitalize"><small class="text-success">Last Billing date:</small>
          <br>
        <h6>30 September, 2020</h6></div>
          </div>
        </div>
      </div>
        </div>
<!-- Billing end -->
      </div>

        <div class="modal-footer inline">
          <div class="form-group text-center mt-3">
            <button class="btn pl-5 pr-5 btn-success" type="button"><i class="far fa-edit"></i> Edit</button>
            <button class="btn pl-5 pr-5 btn-danger" type="button"><i class="fas fa-trash"></i> Delete</button>
            <button class="btn pl-5 pr-5 btn-info" type="button" data-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i> Close</button>
        </div>
        </div>
      </div>
    </div>
  </div>
<!--List Contract modal End -->

</body>

</html>
