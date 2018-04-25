<?php
    include '../includes/common.php';
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
    <title>Login Page</title>
  </head>

  <body>

    <?php
        include '../includes/header.php';
    ?>

    <div id="pad-top" class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <div class="panel panel-info panel-group">
            <div class="panel-heading">
              <h2 class="text-warning"> Login to start Shopping</h2>
            </div>
            <div class="panel-body">
              <form action="login_submit.php" method="POST">
                    <label for="email">Email:</label>
                    <input type="email" name="email" required class="form-control form-group" />
                    <label for="password">Password:</label>
                    <input type="password" name="password" required class="form-control form-group" />
                    <button type="submit" name="button" class="btn btn-lg btn-danger">Log In</button>
              </form>
            </div>
            <div class="panel-footer">
              <h4> Don't have an account? <a href="signup.php"><button type="button" class="btn btn-warning">Register</button></a></h4>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
        include  '../includes/footer.php';
    ?>

  </body>
</html>
