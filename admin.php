<?php 
    session_start();
    if($_SESSION['usertype']!="1"){
	header('location: index.php');
    }
	$connection = mysqli_connect('localhost', 'root', '', 'nikola_prj');

    $image="";
    $name = "";
    $price = "";
    $text="";
    $id=0;
    $update=false;

	if (isset($_POST['save'])) {
        $image=$_FILES['image']['name'];
		$name = $_POST['name'];
		$price = $_POST['price'];
        $text=$_POST['desc'];
        $target= "images/".basename($image);
        $query="INSERT INTO item_prj (item_name, item_price, item_text, item_image) VALUES ('$name', '$price', '$text','$image')";
        mysqli_query($connection, $query); 
        
        if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
            $_SESSION['message'] = "Item saved";
        }
        else{
            $_SESSION['message'] = "Image not saved correctly";
        }
    }

    if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($connection, "SELECT * FROM item_prj WHERE item_id=$id");
    
		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['item_name'];
            $price = $n['item_price'];
            $text=$n['item_text'];
            $image = $n['item_image'];
		}
	}

    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($connection, "DELETE FROM item_prj WHERE item_id=$id");
        $_SESSION['message'] = "Item deleted!"; 
        header('location: admin.php');
    }
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $text =$_POST['desc'];
        $image=$_FILES['image']['name'];
        $target= "images/".basename($image);
        $sql="UPDATE item_prj SET item_name='$name', item_price ='$price', item_text='$text', item_image='$image' WHERE item_id=$id";
        mysqli_query($connection, $sql);
        if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
        }
        else{
            $_SESSION['message'] = "Image not saved correctly";
        }    
        $_SESSION['message'] = "Item updated!"; 
        header('location: admin.php');
    }
?>
<html>

<title> GreenWall-Admin Page </title>
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
        table{
            width: 50%;
            margin: 30px auto;
            border-collapse: collapse;
            text-align: left;
        }
        tr {
            border-bottom: 1px solid #cbcbcb;
        }
        th, td{
            border: none;
            height: 30px;
            padding: 2px;
        }
        tr:hover {
            background: #F5F5F5;
        }
        .edit_btn {
            text-decoration: none;
            padding: 2px 5px;
            background: #2E8B57;
            color: white;
            border-radius: 3px;
        }

        .del_btn {
            text-decoration: none;
            padding: 2px 5px;
            color: white;
            border-radius: 3px;
            background: #800000;
        }
        </style>
<body>
    <!--Navbar -->
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
    <!-- msg -->
    <?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
    <?php endif ?>
    <!-- FORM -->
    <div class="container">
        <div class="col-lg-6 col-lg-offset-3">
        <form id="admin_form" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div>
                <label>Item Name</label>
                <input type="text" name="name" value="<?php echo $name; ?>">
            </div>
            <div>
                <label>Item Price(RSD)</label>
                <input type="text" name="price" value="<?php echo $price; ?>">
            </div>
            <div>
                <label>Item Description</label>
                <textarea type="text" name="desc" cols='40' rows ='4'><?php echo $text; ?></textarea>
            </div>
            <div>
                <label>Item Image
                <input type="file" name="image" value="<?php echo $image; ?>"></label>
            </div>
            <div>
            
            <?php if ($update == true) : ?>
                <input id="submit_button" type="submit" name="update" style="background: #556B2F;" value="Edit" >
            <?php else : ?>
                <input id="submit_button" type="submit" name="save" value="Save">
            <?php endif ?>
            
            </div>
            <!-- msg -->
                <?php if (isset($_SESSION['message'])): ?>
                <div>
                    <?php 
                        echo $_SESSION['message']; 
                        unset($_SESSION['message']);
                    ?>
                </div>
                <?php endif ?>
        </form>
        </div>
    </div>
    <!--SQL TABLE-->
    <?php $results = mysqli_query($connection, "SELECT * FROM item_prj"); ?>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Image</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        
        <?php while ($row = mysqli_fetch_array($results)) { ?>
            <tr>
                <td><?php echo $row['item_name']; ?></td>
                <td><?php echo $row['item_price']; ?></td>
                <td><?php echo $row['item_text']; ?></td>
                <td><?php echo $row['item_image']; ?></td>
                <td>
                    <a href="admin.php?edit=<?php echo $row['item_id']; ?>" class="edit_btn" >Edit</a>
                </td>
                <td>
                    <a href="admin.php?del=<?php echo $row['item_id']; ?>" class="del_btn">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    
<body

</html>