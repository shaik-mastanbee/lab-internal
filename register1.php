<?php 
include "includes/connect.php";
session_start();

if(isset($_POST['sub'])) {
        $name=$_POST['user_name'];
        $email=$_POST['user_email'];
        $pass=$_POST['password'];
        $qry = "INSERT INTO `tbl_user` ( `user_name`, `user_email`, `password`) VALUES ('$name', '$email', '$pass')";
        mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
        header('location:login1.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
            <title>PROPERTY-SELLING</title>
            <link rel="stylesheet" href="c.css">
    </head>   
    <body>
        
        <div class="content">
            <div class="disp">
                
                <h2>Register</h2>
              
                <form class="form" method="post" action=""></br>
                Name<input type="text" name="name"></br><br>
                Email<input type="text" name="email"></br>
                Password<input type="password" name="pass"><br>
                Retype Password <input type="password" name="repass"></br>
              
                 <input type="submit" name="sub" value="Click to Submit"></br>
            </form>
            </div> 
            <p class="footer">&#169; 2018 Property-Selling</p>
        </div>
    </body>  
</html>
