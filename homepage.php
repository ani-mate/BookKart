<?php
    session_start();
    
?>
<html>
    <head>
        <title>
            HomePage
        </title>
        <link rel="stylesheet" href="styling.css">
    </head>
    <body>
        <div class="boxter">
            <h1>
                Welcome 
            
                <?php
                    echo $_SESSION["Username"];
                ?>
                !
            </h1>
            <form  method="POST" action='homepage.php'>
                <input class="lgbtn" type="submit" value="Log Out" name="logout"/>
            </form>
        </div>

        <?php
            if(isset($_POST['logout'])){
                echo "<script type='type/javascript'> alert('session terminated'); </script>";
                session_destroy();
                header("location:index.php");
            }
            else{
                echo "<script type='type/javascript'> alert('session terminated'); </script>";
            }
                
        ?>
        
    </body>
</html>