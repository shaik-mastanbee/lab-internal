<?php 
include "includes/connect.php";
session_start();

if(isset($_POST['sub'])) {
        $name=$_POST['user_name'];
        $email=$_POST['user_email'];
        $pass=$_POST['password'];
        $qry = "INSERT INTO `tbl_user` ( `user_name`, `user_email`, `password`) VALUES ('$name', '$email', '$pass')";
        mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
        header('location:upload.php');
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
                
                <h2>upload</h2>
              
                <form class="form" method="post" action=""></br>
                Type Of Product<input type="text" name="product"></br>
                price<input type="text" name="price"></br>
                place<input type="text" id="place" name="place"></br>
                <input type="submit" >
            </form>
            </div> 
            <p class="footer">&#169; 2018 Property-Selling</p>
        </div>
    </body>  
</html>
