<?php
    session_start();
    require 'dbconfig/dbconfig.php';
?>
<html>
    <head>
        <title>
            Login Page
        </title>
        <link rel="stylesheet" href="styling.css">
    </head>
    <body>
  
        <div class="boxter" >
            <h2 class="txt">
                Login
            </h2>
            <img src="img.svg">
                <form name=loginForm  method="POST" action='homepage.php'>
                    <h3 class="txt">
                        Username
                    </h3 >
                    <input type = "text" class="tbox" name="Username" placeholder="Enter Username" reequired>
                    <h3 class="txt">
                        Password
                    </h3>
                    <input type = "password" class="tbox" name="Password" placeholder="Enter Password" required>
                    <br>
                    <br>
                    <input class="lgbtn" type="submit" name="login" value="Login">
                   
                    
                </form>
                <?php
                    if(isset($_POST['login'])){
                        
                        $username = $_POST['Username'];
                        $password = $_POST['Password'];
                        $query = "select * from userDetails WHERE username ='$username' AND password='$password'";
                        $query_run =  mysqli_query($con,$query);
                        
                        
                        if (mysqli_num_rows($query_run)>0){
                            $_SESSION["Username"]=$username;
                            header('location:homepage.php');
                        }
                        else{
                            echo '<script type="text/javascript"> alert("inValid!") </script>';
                        }

                    }
                    
                ?>
                <a href="register.php">
                    <input class="rgbtn" type="submit" name="register"  value="Register" >
                </a>
        </div>
    </body>
</html>
