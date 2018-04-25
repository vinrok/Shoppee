

<nav class="nav navbar-inverse">
 <div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a href="shop.php" class="navbar-brand">Lifestyle Store</a>
  </div>
  <div id="myNavbar" class="nav navbar-collapse">
    <ul class="nav navbar-nav navbar-right">
      <?php
      if (isset($_SESSION['email'])) {
        ?>
      <li><a href="cart.php"><button class="btn-info"><span class="glyphicon glyphicon-shopping-cart"></span></button> Cart</a></li>
      <li><a href="setting.php"><button class="btn-warning"><span class="glyphicon glyphicon-cog"></span></button> Settings</a></li>
      <li><a href="logout.php"><button class="btn-danger"><span class="glyphicon glyphicon-log-out"></span></button> Log Out</a></li>
    <?php } else { ?>
          <li><a href="signup.php"><button class="btn-info"><span class="glyphicon glyphicon-user"></span></button> SignUp</a></li>
          <li><a href="login.php"><button class="btn-danger"><span class="glyphicon glyphicon-log-in"></span></button> LogIn</a></li>
     <?php } ?>
    </ul>
  </div>
</div>
</nav>
