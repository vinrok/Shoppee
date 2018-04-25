<?php
    require '../includes/common.php';

    if (isset($_SESSION['email'])){
        $user_id = $_SESSION['user_id'];

        $select_query = "SELECT users_items.id, users_items.item_id, items.name, items.price FROM users_items INNER JOIN items WHERE items.id = users_items.item_id";

        $select_item = mysqli_query($con,$select_query);
        $sel_row = mysqli_num_rows($select_item);


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Cart Details</title>
  </head>
  <body>

    <?php
        include '../includes/header.php';
     ?>

    <div class="container">
        <div class="jumbotron">
        <?php if ($sel_row == 0){ ?>
            <h1>Add Item First</h1>;
        </div>
    </div>

  <div id="pad-top" class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="table-responsive">
          <table class="table table-hover table-striped table-border">
            <thead>
              <th>Item Number</th>
              <th>Item Name</th>
              <th>Price</th>
              <th></th>
            </thead>
              <?php } else {$sum = 0;  $id = ''; while ($row = mysqli_fetch_array($select_item)){
              $sum += $row['items.price']; $id .= $row['users_items.item_id'] . ','; ?>
            <tbody>
              <tr>
                <td><?php echo $id; ?></td>
                <td class="text-justify"><?php echo $row['items.name'] ;?>&nbsp;<a href='cart-remove.php?id={$row['users_items.id']}' class="remove_item_link"> Remove</a></td>
                <td><?php echo $row['items.price']; ?></td>
                <td> <a href="#" class="btn btn-lg btn-info">Confirm Order</a> </td>
              </tr>
            </tbody>
              <?php } } ?>
              <tfoot>
              <tr><td></td>
                  <td class="text-center"><?php echo $sum; ?></td>
                  <td><a href='success.php?id={$id}'></a></td>
              </tr>
              </tfoot>
          </table>
                <?php } else {
                        include 'head.php'; ?>
            <h2 class="container" style="padding-top: 10%; padding-left: 10%;">It seems that You are not logged In?</h2>
            <p class="container" style="padding-left: 10%;"><a href="login.php" class="btn btn-lg btn-warning">Log In</a></p>
             <?php } ?>
        </div>
      </div>
    </div>
   </div>

    <?php
        include '../includes/footer.php';
    ?>

  </body>
</html>
