
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Contract</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-7 col-lg-7">
              <div class="card shadow mb-4">
                              <!-- Card Header - Accordion -->
          <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseCardExample">
              <h6 class="m-0 font-weight-bold text-primary">General Information</h6>
                </a>
    <!-- Card Content - Collapse -->
  <div class="collapse show" id="collapseCardExample" style="">
      <div class="card-body">
        <div class="form-group">
          <label>Contract Title <small style="color: red">*</small></label>
          <input type="text" class="form-control form-control-user" placeholder="Contract Title">
        </div>
        <div class="form-group">
          <label>Contract Number <small style="color: red">*</small></label>
          <input type="text" class="form-control form-control-user" placeholder="Contract Number">
        </div>
        <div class="form-group">
          <label>Category <small style="color: red">*</small></label>
          <select name="status" class="form-control">
          <option value="Active">Category</option>
          <option value="inactive">Inactive</option>
        </select>
                </div>
        <div class="form-group">
          <label>Status <small style="color: red">*</small></label>
          <select name="status" class="form-control">
          <option value="Active">Active</option>
          <option value="inactive">Inactive</option>
        </select>
                </div>
      </div>
          </div>
            </div>
            </div>
<!-- Contract Lifecylce -->
            <div class="col-xl-5 col-lg-5">
              <div class="card shadow mb-4">
                              <!-- Card Header - Accordion -->
          <a href="#lifecylclecard" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="lifecylclecard">
              <h6 class="m-0 font-weight-bold text-primary">Life Cycle</h6>
                </a>
    <!-- Card Content - Collapse -->
  <div class="collapse show" id="lifecylclecard" style="">
      <div class="card-body">
        <div class="form-group">
          <label>Start Date <small style="color: red">*</small></label>
          <input type="date" class="form-control form-control-user" placeholder="Contract Title">
        </div>
        <div class="form-group">
          <label>End Date <small style="color: red">*</small></label>
          <input type="date" class="form-control form-control-user" placeholder="Contract Number">
        </div>
        <div class="form-group">
          <label>Contract has renewal? <small style="color: red">*</small></label>
          <input type="checkbox" class="" style="height:1.5rem;width:1.5rem;background-color:#32b449;color:#fff">
        </div>
        <div class="form-group">
          <label>Renewal Period</label>
          <input type="date" class="form-control form-control-user" placeholder="Contract Number">
        </div>
</div>
                </div>
      </div>
          </div>

<!-- Billing transactions -->

          <div class="col-xl-10 col-lg-10">
            <div class="card shadow mb-4">
                            <!-- Card Header - Accordion -->
        <a href="#billingcard" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="billingcard">
            <h6 class="m-0 font-weight-bold text-primary">Billing and Financials</h6>
              </a>
  <!-- Card Content - Collapse -->
<div class="collapse" id="billingcard" style="">
    <div class="card-body">
      <div class="form-group">
        <label>Billing Cycle <small style="color: red">*</small></label>
        <select name="status" class="form-control">
        <option value="Active">One Time</option>
        <option value="inactive">Monthly</option>
        <option value="inactive">Quaterly</option>
        <option value="inactive">Yearly</option>
      </select>
    </div>
    <div class="form-group">
      <label>Billing Amount <small style="color: red">*</small></label>
      <input type="number" class="form-control form-control-user" placeholder="Billing Amount (NGN)">
    </div>

      <div class="form-group">
        <label>First Billing Date <small style="color: red">*</small></label>
        <input type="date" class="form-control form-control-user">
      </div>
      <div class="form-group">
        <label>Last Billing Date <small style="color: red">*</small></label>
        <input type="date" class="form-control form-control-user">
      </div>

      <div class="form-group">
        <label>Description</label>
        <input type="text" class="form-control form-control-user" placeholder="Description">
      </div>
</div>
              </div>
    </div>
        </div>
        <div class="form-group col-lg-10">
          <button class="btn btn-success btn-block">SUBMIT</button>
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

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>



</body>

</html>
