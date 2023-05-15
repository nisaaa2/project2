<?php include_once('navbar.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php 
include_once('database.php');
$data = $db->query("SELECT * FROM restock WHERE id='$_GET[id]'");
$restock = $data->fetch();
?>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <input type="hidden" name="id" value="<?=$_GET['id']?>">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"></h1>
                        <div class="row">
                        <div class="col-md-12">
                        <div class="card">
                        <div class="card-header">
                            <h5>Input restock</h5>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12 mt-4">
                                            <form method="POST" action="update_restock.php">
                                                <div class="form-group row">
                                                    <label for="id" class="col-4 col-form-label">Id</label> 
                                                    <div class="col-8">
                                                    <div class="input-group">
                                                        <input id="id" name="id" type="text" class="form-control" value="<?= $restock['id'] ?>">
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="restock_number" class="col-4 col-form-label">Restock_Number</label> 
                                                    <div class="col-8">
                                                    <div class="input-group">
                                                        <input id="restock_number" name="restock_number" type="text" class="form-control" value="<?= $restock['restock_number'] ?>">
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="date" class="col-4 col-form-label">Date</label> 
                                                    <div class="col-8">
                                                    <div class="input-group">
                                                        <input id="date" name="date" type="text" class="form-control" value="<?= $restock['date'] ?>">
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="qty" class="col-4 col-form-label">Qty</label> 
                                                    <div class="col-8">
                                                    <div class="qty">
                                                        <input id="qty" name="qty" type="text" class="form-control" value="<?= $restock['qty'] ?>">
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="price" class="col-4 col-form-label">Price</label> 
                                                    <div class="col-8">
                                                    <div class="input-group">
                                                        <input id="price" name="price" type="text" class="form-control" value="<?= $restock['price'] ?>">
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="supplier_id" class="col-4 col-form-label">Supplier_Id</label> 
                                                    <div class="col-8">
                                                    <div class="input-group">
                                                        <input id="supplier_id" name="supplier_id" type="text" class="form-control" value="<?= $restock['supplier_id'] ?>">
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="offset-4 col-8">
                                                        <input type="hidden" name="id" value="<?=$_GET['id']?>">
                                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </main>
            <?php include_once('footer.php'); ?>


