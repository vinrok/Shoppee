 <!-- <?php
    require '../includes/common.php';

    if (isset($_SESSION['email'])) {
        header('location: products.php');
    }
?> -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>My Shoppee</title>
  </head>

  <body>
  <?php
    include '../includes/header.php';
  ?>

  <div id="banner_img">
    <div class="container">
      <center>
      <div id="banner_content">
          <h3>Enjoy Shopping</h3>
          <a href="products.php"><button type="button" name="button" class="btn btn-lg btn-danger"><span>Shop Now</span></button></a>
      </div>
      </center>
    </div>
  </div>

  <!-- ************************************** FOOTER NAVIGATION WITH TOGGLE ************************************ -->

    <?php
        include '../includes/footer.php';
    ?>
  </body>
</html>
