<?php include_once('navbar.php'); ?>
<?php include_once('sidebar.php'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"></h1>
            <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5>Input supplier</h5>
              </div>
              <div class="card-body">
                  <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 mt-4">
                                <form method="POST" action="proses_supplier.php">
                                    <div class="form-group row">
                                        <label for="id" class="col-4 col-form-label">Id</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="id" name="id" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-4 col-form-label">Name</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="name" name="name" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone" class="col-4 col-form-label">Phone</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="phone" name="phone" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="address" class="col-4 col-form-label">Address</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="address" name="address" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="contact_name" class="col-4 col-form-label">Contact_name</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="contact_name" name="contact_name" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="form-group row">
                                        <div class="offset-4 col-8">
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                        </div>
                  </div>
                </form>
              </div>
          </div>
        </div>
        </div>
    </main>
<?php include_once('footer.php'); ?>


