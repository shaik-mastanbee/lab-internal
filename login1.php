<?php
include "includes/connect.php";
session_start();

if(isset($_POST['sub'])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $qry = "INSERT INTO `tbl_user` ( `user_name`, `user_email`, `password`) VALUES ('$name', '$email', '$pass')";
        mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
        header('location:upload.php');
        }
   
?>
<!DOCTYPE html>
<html>
<head>
  <h2>Login</h2>
  <link rel="stylesheet" href="c.css">
 </head> 
  <body>
        
            <div class="disp">
               
                 
                <form class="form" method="post" action="">
                Name<input type="text" name="name"></br>
                Email<input type="text" name="email"></br>
                Password<input type="password" name="pass"></br>
                <input type="submit" name="sub" value="Click to Submit"></br>
            </form>
            </div> 
            <p class="footer">&#169; 2018 Property-Selling</p>
        </div>
    </body>  
