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
                        <div class="card-header"><h5>List restock</h5></div>
                            <div class="card-body">
                                <table class="table mt-4">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Restock_Number</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Qty</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">supplier_Id</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $data = $db->query("SELECT * FROM restock"); 
                                        foreach ($data as $d) :
                                        ?>
                                    <tr> 
                                        <td><?= $d['id'];?></td>
                                        <td><?= $d['restock_number'];?></td>
                                        <td><?= $d['date'];?></td>
                                        <td><?= $d['qty'];?></td>
                                        <td><?= $d['price'];?></td>
                                        <td><?= $d['supplier_id'];?></td>
                                        <td>
                                        <a href="delete_restock.php?id=<?= $d['id'];?>" class="btn btn-success">Hapus restock</a>
                                        <a href="form_update_restock.php?id=<?= $d['id'];?>" class="btn btn-success">Edit restock</a>
                                        </td>                                       
                                    </tr>
                                        <?php 
                                        endforeach;
                                        ?>                       
                                    </tbody>
                                </table>
                                <a href="form_restock.php" class="btn btn-success mt-4">Input Baru</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<?php include_once('footer.php'); ?>


