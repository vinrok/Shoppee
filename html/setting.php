<?php
    /* require '../includes/common.php';

    if (!isset($_SESSION['email'])){
        header('location: shop.php');
    } */
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Settings</title>
  </head>
  <body>

  <?php
  include '../includes/header.php';
  ?>

  <div id="pad-top" class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="text-warning"> Change Password </h2>
          </div>
          <div class="panel-body">
            <form autocomplete="off" class="form-group" action="setting_script.php" method="POST">
              <input type="password" name="old" placeholder="old password" autofocus required class="form-control form-group"/>
              <input type="password" name="new" placeholder="new password" required class="form-control form-group" />
              <input type="password" name="repeat-new" placeholder="Re-type new password" required class="form-control form-group" />
              <button type="submit" name="change" class="btn btn-lg btn-warning">Change</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
    include '../includes/footer.php';
  ?>

  </body>
</html>
