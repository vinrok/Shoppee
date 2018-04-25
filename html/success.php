<?php
    require '../includes/common.php';

    if(!isset($_SESSION['email'])){
        header('location: shop.php');
    }

    $id = $_GET['id'];
    $change_status_query = "UPDATE users_items SET status = 'Confirmed' WHERE  item_id = $id";
    $change_status = mysqli_query($con,$change_status_query);
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
    <title>Successfully Done</title>
  </head>
  <body>

    <?php
        include '../includes/header.php';
    ?>

    <div id="pad-top" class="container">
      <div class="jumbotron">
        <h3>Your order is confirmed. Thank you for shopping with us.</h3><hr>
        <h4>Wanna purchase more items?</h4><a href="products.php" class="btn btn-lg btn-success">Click here</a>
      </div>
    </div>

    <?php
        include '../includes/footer.php';
    ?>

  </body>
</html>
