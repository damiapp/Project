<?php
$connection = mysqli_connect('localhost','root',"",'nikola_prj');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  if(isset($_POST['confirm_registration'])){
	$password = $_POST['password'];
    $email = $_POST['email'];
    mysqli_query($connection,"");
};
mysqli_close($connection);
?>
 <form action="" method="POST">
                    <div class="imgcontainer">
                        <img src="avatar.png" alt="Avatar" class="avatar">
                    </div>
                    <div id="error"></div>
                    <div>
                        <label for='email'>E-mail</label>
                        <br>
                        <input id='email' placeholder="Enter E-mail" type="email" pattern="[a-zA-Z0-9_.]+@.+\..+" required name="email">
                    </div>
                    <div>
                        <label for='password'>Password</label>
                        <br>
                        <input id='password' placeholder="Enter Password" type="password" 
                        pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[a-z]).*$" required name="password">
                    </div>
                    <div>
                        <input id="submit_button" name = "submit" type="submit" value="Log in" >
                    </div>
                </form>

                <!-- "INSERT INTO `user_prj`(`user_id`, `user_email`, `user_name`, `user_password`) VALUES(null, '{$email}', '{$username}', MD5('{$password}'))" -->

                <!-- SELECT * FROM `user_prj` WHERE user_name = 'andrija' AND user_password = MD5('andrija1') -->