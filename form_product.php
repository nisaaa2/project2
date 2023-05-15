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
                <h5>Input product</h5>
              </div>
              <div class="card-body">
                  <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 mt-4">
                                <form method="POST" action="proses_product.php">
                                    <div class="form-group row">
                                        <label for="id" class="col-4 col-form-label">Id</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="id" name="id" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="sku" class="col-4 col-form-label">Sku</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="sku" name="sku" type="text" class="form-control">
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
                                        <label for="purchase_price" class="col-4 col-form-label">Purchase_Price</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="purchase_price" name="purchase_price" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="sell_price" class="col-4 col-form-label">Sell_Price</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="sell_price" name="sell_price" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="stock" class="col-4 col-form-label">Stock</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="stock" name="stock" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="min_stock" class="col-4 col-form-label">Min_Stock</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="min_stock" name="min_stock" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="product_type_id" class="col-4 col-form-label">Product_Type_Id</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="product_type_id" name="product_type_id" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="restock_id" class="col-4 col-form-label">Restock_id</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="restock_id" name="restock" type="text" class="form-control">
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


