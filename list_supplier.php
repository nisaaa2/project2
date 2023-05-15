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
                        <div class="card-header"><h5>List supplier</h5></div>
                            <div class="card-body">
                                <table class="table mt-4">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">name</th>
                                            <th scope="col">phone</th>
                                            <th scope="col">address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $data = $db->query("SELECT * FROM supplier"); 
                                        foreach ($data as $d) :
                                        ?>
                                    <tr> 
                                        <td><?= $d['id'];?></td>
                                        <td><?= $d['name'];?></td>
                                        <td><?= $d['phone'];?></td>
                                        <td><?= $d['address'];?></td>
                                        <td><?= $d['contact_name'];?></td>
                                        <td>
                                        <a href="delete_supplier.php?id=<?= $d['id'];?>" class="btn btn-success">Hapus supplier</a>
                                        <a href="form_update_supplier.php?id=<?= $d['id'];?>" class="btn btn-success">Edit supplier</a>
                                        </td>                                       
                                    </tr>
                                        <?php 
                                        endforeach;
                                        ?>                       
                                    </tbody>
                                </table>
                                <a href="form_supplier.php" class="btn btn-success mt-4">Input Baru</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<?php include_once('footer.php'); ?>


