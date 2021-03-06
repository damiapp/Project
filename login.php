<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>User registration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
        body, html{
            color:rgb(0, 0, 0);
        }
        </style>
    </head>
        <body>
            <!-- Navbar -->
                <nav class="navbar navbar-inverse navbar-fixed-top navbar-dark" >
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span> 
                            </button>
                        <a class="navbar-brand" href="index.html">GreenWall</a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="shop.php">Shop</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                        <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>
                        </div>
                    </div>
                </nav>
            <!-- registration -->
            <div class="container">
                <div class="col-lg-6 col-lg-offset-3">
                <form action="login.php" method="POST">
                <?php include('errors.php'); ?>
                    <div class="imgcontainer">
                        <img src="avatar.png" alt="Avatar" class="avatar">
                    </div>
                    <div id="error"></div>
                    <div>
                        <label for='username'>Username</label>
                        <br>
                        <input id='username' placeholder="Enter Username" type="text" required name="username">
                    </div>
                    <div>
                        <label for='password'>Password</label>
                        <br>
                        <input id='password' placeholder="Enter Password" type="password" 
                        pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[a-z]).*$" required name="password">
                    </div>
                    <div>
                        <input id="submit_button" name = "login_confirm" type="submit" value="Log in" >
                    </div>
                </form>
                </div>
            </div>
    </body>
</html>