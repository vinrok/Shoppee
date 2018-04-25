<?php
    require '../includes/common.php';

    // https://regexr.com/3is4l  ---- for regular expression...

    if (isset($_SESSION['email'])){
        header('location: products.php');
    }
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
    <title>Sign Me up</title>
  </head>

  <body>
  <?php
    include '../includes/header.php';
  ?>

    <div id="pad-top" class="container">
        <div class="row">
                <div class="col-md-3 col-md-offset-4">
                    <form class="form-group" action="signup_script.php" method="POST">
                        <h1> SIGN UP </h1>

                            <input type="text" name="name" placeholder="Name" pattern="^([A-Z]){1}([a-zA-Z0-9]).{2,20}$" required class="form-control form-group" />
                            <input type="email" name="email" placeholder="Email" required class="form-control form-group" />
                            <input type="password" name="password" placeholder="Password" required  class="form-control form-group"
                                   pattern="^(?=^.{8,}$)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" />
                            <input type="number" name="contact" placeholder="+CountryCode" required pattern="^[\+]\d{2}\d{2}\d{4}\d{4}$" class="form-control form-group" />
                            <input type="text" name="city" placeholder="City" required class="form-control form-group" />
                            <input type="text" name="address" placeholder="Address" required class="form-control form-group" />
                            <button type="submit" name="submit" class="btn btn-lg btn-warning">Submit</button>
                    </form>
                </div>
            </div>
        </div>

  <?php
        include '../includes/footer.php';
  ?>

  </body>
</html>
