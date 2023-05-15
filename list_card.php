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
                        <div class="card-header"><h5>List card</h5></div>
                            <div class="card-body">
                                <table class="table mt-4">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Code</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Discount</th>
                                            <th scope="col">Member_fee</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $data = $db->query("SELECT * FROM card"); 
                                        foreach ($data as $d) :
                                        ?>
                                    <tr> 
                                        <td><?= $d['id'];?></td>
                                        <td><?= $d['code'];?></td>
                                        <td><?= $d['name'];?></td>
                                        <td><?= $d['discount'];?></td>
                                        <td><?= $d['member_fee'];?></td>
                                        <td>
                                        <a href="delete_card.php?id=<?= $d['id'];?>" class="btn btn-success">Hapus card</a>
                                        <a href="form_update_card.php?id=<?= $d['id'];?>" class="btn btn-success">Edit card</a>
                                        </td>                                       
                                    </tr>
                                        <?php 
                                        endforeach;
                                        ?>                       
                                    </tbody>
                                </table>
                                <a href="form_card.php" class="btn btn-success mt-4">Input Baru</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include_once('footer.php'); ?>


