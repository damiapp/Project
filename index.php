<?php
  session_start();
  
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GreenWall</title>
  
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap.css.map" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css.map" rel="stylesheet">
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <link href="css/bootstrap-theme.css.map" rel="stylesheet">
  <link href="css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.min.css.map" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
  <!-- Navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top navbar-dark" >
      <div class="container-fluid">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span> 
                </button>
            <a class="navbar-brand" href="index.php">GreenWall</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php"> <span class="glyphicon glyphicon-home	
              "></span> Home</a></li>
            <li><a href="#aboutus"><span class="glyphicon glyphicon-user"></span> About Us</a></li>
            <li><a href="shop.php"><span class="glyphicon glyphicon-shopping-cart"></span> Shop</a></li>
            <li><a href="#contact"><span class="glyphicon glyphicon-envelope"></span> Contact Us</a></li>
          </ul>
          <!--login logout profile -->
          <?php if(!isset($_SESSION['username'])) : ?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
          <?php endif ?>
          <?php if(isset($_SESSION['username'])) : ?>
            <ul class="nav navbar-nav navbar-right">
              <li><a><span class='glyphicon glyphicon-user'></span><?php echo $_SESSION['username']; ?></a></li>
              <?php if($_SESSION['usertype']=="1") : ?>
                <li><a href='admin.php'><span class='glyphicon glyphicon-wrench'></span>Settings</a></li>
              <?php endif ?>
              <li><a href="index.php?logout='1'"><span class='glyphicon glyphicon-log-out'></span>LogOut</a></li>
            </ul>
          <?php endif ?>
        </div>
      </div>
    </nav>
    <!-- Page -->
  <div class="pimg1">
    <div class="ptext">
      <span class="border">
        GreenWall
      </span>
    </div>
  </div>

  <section class="section section-light" id="aboutus">
    <h2>About us</h2>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, laudantium, quibusdam? Nobis, delectus, commodi, fugit amet tempora facere dolores nisi facilis consequatur, odio hic minima nostrum. Perferendis eos earum praesentium, blanditiis sapiente labore aliquam ipsa architecto vitae. Minima soluta temporibus voluptates inventore commodi cumque esse suscipit optio aliquam et, dolorem a cupiditate nihil fuga laboriosam fugiat placeat dignissimos! Unde eveniet placeat quisquam blanditiis voluptatem doloremque fugiat dolor repellendus ratione in. Distinctio provident dolorem modi cumque illo enim quidem tempora deserunt nostrum voluptate labore repellat quisquam quasi cum suscipit dolore ab consequuntur, ad porro earum temporibus. Laborum ad temporibus ex, omnis!
    </p>
  </section>

  <div class="pimg2">
    <div class="ptext">
      <span class="border trans">
        Shop
      </span>
    </div>
  </div>

  <section class="section section-dark">
    <h2>Shop</h2>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, laudantium, quibusdam? Nobis, delectus, commodi, fugit amet tempora facere dolores nisi facilis consequatur, odio hic minima nostrum. Perferendis eos earum praesentium, blanditiis sapiente labore aliquam ipsa architecto vitae. Minima soluta temporibus voluptates inventore commodi cumque esse suscipit optio aliquam et, dolorem a cupiditate nihil fuga laboriosam fugiat placeat dignissimos! Unde eveniet placeat quisquam blanditiis voluptatem doloremque fugiat dolor repellendus ratione in.
    </p>
  </section>

  <div class="pimg3">
    <div class="ptext">
      <span class="border trans">
        Contact Us
      </span>
    </div>
  </div>

  <section class="section section-dark" id="contact">
    <h2>Contact</h2>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, laudantium, quibusdam? Nobis, delectus, commodi, fugit amet tempora facere dolores nisi facilis consequatur, odio hic minima nostrum. Perferendis eos earum praesentium, blanditiis sapiente labore aliquam ipsa architecto vitae. Minima soluta temporibus voluptates inventore commodi cumque esse suscipit optio aliquam et, dolorem a cupiditate nihil fuga laboriosam fugiat placeat dignissimos! Unde eveniet placeat quisquam blanditiis voluptatem doloremque fugiat dolor repellendus ratione in.
    </p>
  </section>
</body>
</html>