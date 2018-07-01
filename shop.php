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
  <title>GreenWall-Shop</title>
  
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
            <li><a href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
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
              <li><a href="index.php?logout='1'"><span class='glyphicon glyphicon-log-out'></span>LogOut</a></li>
            </ul>
          <?php endif ?>
        </div>
      </div>
    </nav>
    <!-- Content -->
    <div class="container">

      <div class="row">

          <div class="col-md-3">
              <p class="lead">Shop Name</p>
              <div class="list-group">
                  <a href="#" class="list-group-item">Category 1</a>
                  <a href="#" class="list-group-item">Category 2</a>
                  <a href="#" class="list-group-item">Category 3</a>
              </div>
          </div>

          <div class="col-md-8">

              <div class="row carousel-holder">

                  <div class="col-md-12">
                      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner">
                              <div class="item active">
                                  <img class="slide-image" src="http://placehold.it/800x300" alt="">
                              </div>
                              <div class="item">
                                  <img class="slide-image" src="http://placehold.it/800x300" alt="">
                              </div>
                              <div class="item">
                                  <img class="slide-image" src="http://placehold.it/800x300" alt="">
                              </div>
                          </div>
                          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left"></span>
                          </a>
                          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                              <span class="glyphicon glyphicon-chevron-right"></span>
                          </a>
                      </div>
                  </div>

              </div>

              <div class="row">

                  <div class="col-sm-4 col-lg-4 col-md-4">
                      <div class="thumbnail">
                          <img src="http://placehold.it/320x150" alt="">
                          <div class="caption">
                              <h4 class="pull-right">$24.99</h4>
                              <h4><a href="#">First Product</a>
                              </h4>
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                          </div>
                          <div class="ratings">
                              <p class="pull-right">15 reviews</p>
                              <p>
                                  <span class="glyphicon glyphicon-star"></span>
                                  <span class="glyphicon glyphicon-star"></span>
                                  <span class="glyphicon glyphicon-star"></span>
                                  <span class="glyphicon glyphicon-star"></span>
                                  <span class="glyphicon glyphicon-star"></span>
                              </p>
                          </div>
                      </div>
                  </div>

                  <div class="col-sm-4 col-lg-4 col-md-4">
                      <div class="thumbnail">
                          <img src="http://placehold.it/320x150" alt="">
                          <div class="caption">
                              <h4 class="pull-right">$64.99</h4>
                              <h4><a href="#">Second Product</a>
                              </h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                          </div>
                          <div class="ratings">
                              <p class="pull-right">12 reviews</p>
                              <p>
                                  <span class="glyphicon glyphicon-star"></span>
                                  <span class="glyphicon glyphicon-star"></span>
                                  <span class="glyphicon glyphicon-star"></span>
                                  <span class="glyphicon glyphicon-star"></span>
                                  <span class="glyphicon glyphicon-star-empty"></span>
                              </p>
                          </div>
                      </div>
                  </div>

                  <div class="col-sm-4 col-lg-4 col-md-4">
                      <div class="thumbnail">
                          <img src="http://placehold.it/320x150" alt="">
                          <div class="caption">
                              <h4 class="pull-right">$74.99</h4>
                              <h4><a href="#">Third Product</a>
                              </h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                          </div>
                          <div class="ratings">
                              <p class="pull-right">31 reviews</p>
                              <p>
                                  <span class="glyphicon glyphicon-star"></span>
                                  <span class="glyphicon glyphicon-star"></span>
                                  <span class="glyphicon glyphicon-star"></span>
                                  <span class="glyphicon glyphicon-star"></span>
                                  <span class="glyphicon glyphicon-star-empty"></span>
                              </p>
                          </div>
                      </div>
                  </div>

                  <div class="col-sm-4 col-lg-4 col-md-4">
                      <div class="thumbnail">
                          <img src="http://placehold.it/320x150" alt="">
                          <div class="caption">
                              <h4 class="pull-right">$84.99</h4>
                              <h4><a href="#">Fourth Product</a>
                              </h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                          </div>
                          <div class="ratings">
                              <p class="pull-right">6 reviews</p>
                              <p>
                                  <span class="glyphicon glyphicon-star"></span>
                                  <span class="glyphicon glyphicon-star"></span>
                                  <span class="glyphicon glyphicon-star"></span>
                                  <span class="glyphicon glyphicon-star-empty"></span>
                                  <span class="glyphicon glyphicon-star-empty"></span>
                              </p>
                          </div>
                      </div>
                  </div>

                  <div class="col-sm-4 col-lg-4 col-md-4">
                      <div class="thumbnail">
                          <img src="http://placehold.it/320x150" alt="">
                          <div class="caption">
                              <h4 class="pull-right">$94.99</h4>
                              <h4><a href="#">Fifth Product</a>
                              </h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                          </div>
                          <div class="ratings">
                              <p class="pull-right">18 reviews</p>
                              <p>
                                  <span class="glyphicon glyphicon-star"></span>
                                  <span class="glyphicon glyphicon-star"></span>
                                  <span class="glyphicon glyphicon-star"></span>
                                  <span class="glyphicon glyphicon-star"></span>
                                  <span class="glyphicon glyphicon-star-empty"></span>
                              </p>
                          </div>
                      </div>
                  </div>

              </div>

          </div>

      </div>

  </div>
  </body>

</html>