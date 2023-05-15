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
                <h5>Input order</h5>
              </div>
              <div class="card-body">
                  <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 mt-4">
                                <form method="POST" action="proses_order.php">
                                    <div class="form-group row">
                                        <label for="id" class="col-4 col-form-label">Id</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="id" name="id" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="order_number" class="col-4 col-form-label">Order_Number</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="order_number" name="order_number" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="date" class="col-4 col-form-label">Date</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="date" name="date" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="qty" class="col-4 col-form-label">Qty</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="qty" name="qty" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="total_price" class="col-4 col-form-label">Total_Price</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="total_price" name="total_price" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="customer_id" class="col-4 col-form-label">Customer_id</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="customer_id" name="customer_id" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="product_id" class="col-4 col-form-label">Product_id</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="product_id" name="product_id" type="text" class="form-control">
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


