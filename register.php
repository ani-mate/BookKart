<?php
    require("dbconfig/dbconfig.php");
?>


<!DOCTYPE HTML>
<html>
    <head>
        <title>
            Registration Page
        </title>
        <link rel="stylesheet" href="styling.css">
    </head>
    <body>
  
        <div class="boxter" >
            <form name="regform" action="index.php" method="POST">
                <h2 class="txt">
                    Register
                </h2>
                <img src="img.svg">
                <h3 class="txt">
                    Username
                </h3 >
                <input type = "text" class="tbox" name="Username" placeholder="Enter Username" required>
                <h3 class="txt">
                    Password
                </h3>
                <input type = "password" class="tbox" name="Password" placeholder="Enter Password" required>
                <h3 class="txt">
                    Confirm Password
                </h3>
                <input type = "password" class="tbox" name="cPassword" placeholder="Enter Password" required>
                <br>
                <br>
                
                <input class="rgbtn" type="submit" name="register" value="Register">
                
            </form>
        </div>

        <?php
            if(isset($_POST['register'])){
                //echo '<script type="text/javascript"> alert("Register button pressed!"); </script>';
                $username = $_POST['Username'];
                $password = $_POST['Password'];
                $cpassword = $_POST["cPassword"];

                if ($cpassword == $password){
                    $query = "select * from userDetails WHERE username='$username'";
                    $query_run = mysqli_query($con,$query);
                    
                    if (mysqli_num_rows($query_run)>0){
                        echo '<script type="text/javascript"> alert("User Exists!") </script>';
                    }
                    else{
                        $query = "insert into userDetails values('$username','$password')";
                        $query_run = mysqli_query($con,$query);
                        if($query_run){
                            echo '<script type="text/javascript"> alert("User Registered!") </script>';
                            
                        }
                    }
                }
                else{
                    echo '<script type="text/javascript"> alert("Passwords do not match!") </script>';
                }
            }
        ?>
    </body>
</html>
