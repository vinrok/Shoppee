<?php
    require '../includes/common.php';
    /* $status = session_status();

    if($status == PHP_SESSION_NONE){
        //There is no active session
        session_start();
    }else
        if($status == PHP_SESSION_DISABLED){
            //Sessions are not available
        }else
            if($status == PHP_SESSION_ACTIVE){
                //Destroy current and start new one
                session_destroy();
                session_start();
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
    <title>Products Zone</title>
  </head>

<body>

    <?php
        include '../includes/header.php';
        include '../includes/check-if-added.php';
    ?>

 <div id="pad-top">
  <div class="container">
    <div class="jumbotron">
      <h1>Welcome! to our Lifestyle Store</h1>
      <p class="lead">We provide best variety of trousers, watches and cameras, no need to hunt around</p>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div id="1" class="col-md-3">
        <div class="thumbnail">
          <img src="../img/camera.jpg" alt="camera" />
          <div class="caption">
            <h4> Sony DSLR </h4>
            <p>  Price: Rs.34,000 </p>
              <?php if (!isset($_SESSION['email'])) { ?>
              <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php } else {
                  //We have created a function to check whether this particular product is added to cart or not.
                if (check_added_to_cart(1,$con)) { //This is same as if(check_if_added_to_cart != 0)
                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                } else { ?>
                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
              <?php } }?>
          </div>
        </div>
      </div>
      <div id="2" class="col-md-3">
        <div class="thumbnail">
          <img src="../img/canon.jpg" alt="Canon" />
          <div class="caption">
            <h4> Olympus Camera </h4>
            <p> Price: Rs. 45,000  </p>
              <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php } else {
              //We have created a function to check whether this particular product is added to cart or not.
              if (check_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
              }else { ?>
            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
              <?php } } ?>
          </div>
        </div>
      </div>
      <div id="3" class="col-md-3">
        <div class="thumbnail">
          <img src="../img/nikon.jpg" alt="Nikon" />
          <div class="caption">
            <h4> Nikon Camera </h4>
            <p> Price: Rs.75,000  </p>
              <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php } else {
                  //We have created a function to check whether this particular product is added to cart or not.
                  if (check_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                  }else { ?>
                      <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                  <?php } } ?>
          </div>
        </div>
      </div>
      <div id="4" class="col-md-3">
        <div class="thumbnail">
          <img src="../img/fujifilm.jpeg" alt="Fujifilm" />
          <div class="caption">
            <h4> Fujifilm Camera </h4>
            <p> Price: Rs.55,000  </p>
              <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php } else {
                  //We have created a function to check whether this particular product is added to cart or not.
                  if (check_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                  }else { ?>
                      <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                  <?php } } ?>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row">
      <div id="5" class="col-md-3">
        <div class="thumbnail">
          <img src="../img/shirt2.jpg" />
          <div class="caption">
            <h4> Pepe </h4>
            <p> Price: Rs.1,000 </p>
              <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php } else {
                  //We have created a function to check whether this particular product is added to cart or not.
                  if (check_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                  }else { ?>
                      <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                  <?php } } ?>
          </div>
        </div>
      </div>
      <div id="6" class="col-md-3">
        <div class="thumbnail">
          <img src="../img/shirt1.jpg" class="img-responsive" />
          <div class="caption">
            <h4> England </h4>
            <p> Price: Rs. 4,500  </p>
              <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php } else {
                  //We have created a function to check whether this particular product is added to cart or not.
                  if (check_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                  }else { ?>
                      <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                  <?php } } ?>
          </div>
        </div>
      </div>
      <div id="7" class="col-md-3">
        <div class="thumbnail">
          <img src="../img/shirt.jpg" />
          <div class="caption">
            <h4> Raymond </h4>
            <p> Price: Rs.2,500  </p>
              <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php } else {
                  //We have created a function to check whether this particular product is added to cart or not.
                  if (check_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                  }else { ?>
                      <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                  <?php } } ?>
          </div>
        </div>
      </div>
      <div id="8" class="col-md-3">
        <div class="thumbnail">
          <img src="../img/shirt3.jpg" />
          <div class="caption">
            <h4> Levi's</h4>
            <p> Price: Rs.1,500  </p>
              <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php } else {
                  //We have created a function to check whether this particular product is added to cart or not.
                  if (check_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                  }else { ?>
                      <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                  <?php } } ?>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row">
      <div id="9" class="col-md-3">
        <div class="thumbnail">
          <img src="../img/watch.jpg" />
          <div class="caption">
            <h4> Titan </h4>
            <p> Price: Rs.3,400 </p>
              <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php } else {
                  //We have created a function to check whether this particular product is added to cart or not.
                  if (check_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                  }else { ?>
                      <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                  <?php } } ?>
          </div>
        </div>
      </div>
      <div id="10" class="col-md-3">
        <div class="thumbnail">
          <img src="../img/watch1.jpg" />
          <div class="caption">
            <h4> Fastrack </h4>
            <p> Price: Rs. 5,000  </p>
              <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php } else {
                  //We have created a function to check whether this particular product is added to cart or not.
                  if (check_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                  }else { ?>
                      <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                  <?php } } ?>
          </div>
        </div>
      </div>
      <div id="11" class="col-md-3">
        <div class="thumbnail">
          <img src="../img/watch2.jpg" />
          <div class="caption">
            <h4> Kwijo </h4>
            <p> Price: Rs.1,500  </p>
              <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php } else {
                  //We have created a function to check whether this particular product is added to cart or not.
                  if (check_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                  }else { ?>
                      <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                  <?php } } ?>
          </div>
        </div>
      </div>
      <div id="12" class="col-md-3">
        <div class="thumbnail">
          <img src="../img/hummer.jpg" alt="hummer" />
          <div class="caption">
            <h4> Hummer </h4>
            <p> Price: Rs.7,500  </p>
              <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php } else {
                  //We have created a function to check whether this particular product is added to cart or not.
                  if (check_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                  }else { ?>
                      <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                  <?php } } ?>
          </div>
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
