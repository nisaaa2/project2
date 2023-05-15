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
                        <div class="card-header"><h5>List customer</h5></div>
                            <div class="card-body">
                                <table class="table mt-4">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Gender</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Card_id</th>
                                            <th scope="col" width="100px"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $data = $db->query("SELECT * FROM customer"); 
                                        foreach ($data as $d) :
                                        ?>
                                    <tr> 
                                        <td><?= $d['id'];?></td>
                                        <td><?= $d['name'];?></td>
                                        <td><?= $d['gender'];?></td>
                                        <td><?= $d['phone'];?></td>
                                        <td><?= $d['email'];?></td>
                                        <td><?= $d['address'];?></td>
                                        <td><?= $d['card_id'];?></td>
                                        <td>
                                        <a href="delete_customer.php?id=<?= $d['id'];?>" class="btn btn-success">Hapus customer</a>
                                        <a href="form_update_customer.php?id=<?= $d['id'];?>" class="btn btn-success">Edit customer</a>
                                        </td>                                       
                                    </tr>
                                        <?php 
                                        endforeach;
                                        ?>                       
                                    </tbody>
                                </table>
                                <a href="form_customer.php" class="btn btn-success mt-4">Input Baru</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<?php include_once('footer.php'); ?>


