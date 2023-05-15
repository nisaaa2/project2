<?php include_once('navbar.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php 
include_once('database.php');
$data = $db->query("SELECT * FROM card WHERE id='$_GET[id]'");
$card = $data->fetch();
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
                <h5>Input card</h5>
              </div>
              <div class="card-body">
                  <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 mt-4">
                                <form method="POST" action="update_card.php">
                                    <div class="form-group row">
                                        <label for="code" class="col-4 col-form-label">Code</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="code" name="code" type="text" class="form-control" value="<?= $card['code'] ?>">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-4 col-form-label">Name</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="name" name="name" type="text" class="form-control" value="<?= $card['name'] ?>">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="discount" class="col-4 col-form-label">Discount</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="discount" name="discount" type="text" class="form-control" value="<?= $card['discount'] ?>">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="member_fee" class="col-4 col-form-label">Member_fee</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="member_fee" name="member_fee" type="text" class="form-control" value="<?= $card['member_fee'] ?>">
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


