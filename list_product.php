<?php include_once('navbar.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php include_once('database.php'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"></h1>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h5>List product</h5></div>
                            <div class="card-body">
                                <table class="table mt-4">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Sku</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Purchase_Price</th>
                                            <th scope="col">Sell_Price</th>
                                            <th scope="col">Stock</th>
                                            <th scope="col">Min_Stock</th>
                                            <th scope="col">product_type_id</th>
                                            <th scope="col">Restock_id</th>
                                            <th scope="col" width="100px"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $data = $db->query("SELECT * FROM product"); 
                                        foreach ($data as $d) :
                                        ?>
                                    <tr> 
                                        <td><?= $d['id'];?></td>
                                        <td><?= $d['sku'];?></td>
                                        <td><?= $d['name'];?></td>
                                        <td><?= $d['purchase_price'];?></td>
                                        <td><?= $d['sell_price'];?></td>
                                        <td><?= $d['stock'];?></td>
                                        <td><?= $d['min_stock'];?></td>
                                        <td><?= $d['product_type_id'];?></td>
                                        <td><?= $d['restock_id'];?></td>
                                        <td>
                                        <a href="delete_product.php?id=<?= $d['id'];?>" class="btn btn-success">Hapus product</a>
                                        <a href="form_update_product.php?id=<?= $d['id'];?>" class="btn btn-success">Edit product</a>
                                        </td>                                       
                                    </tr>
                                        <?php 
                                        endforeach;
                                        ?>                       
                                    </tbody>
                                </table>
                                <a href="form_product.php" class="btn btn-success mt-4">Input Baru</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<?php include_once('footer.php'); ?>


