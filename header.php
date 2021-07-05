<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$u=0;
//echo $_SESSION['uname'];

if(isset($_SESSION['uname']))
{
 
  $username=$_SESSION['uname'];
  if($username=="")
  {
      $u=0;
      
  }
else{  
  $u=1;
 
}
}

?>
<div class="navbar">
        <!--LOGO-->

                <div class="logo">
                  <img src="images/logo.png" alt="Logo" style="width: 100px" />
                </div>
        

        <!--Menue-->

                <nav>
                  <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Conact Us</a></li>
                    <?php 
                    if($u==1)
                    {
                      //$sql = "SELECT adminStatus FROM user WHERE ".$username."=".
                      echo '<li><a href="#">'.$username.'</a></li>';
                      echo '<li><a href="logout.php">Logout</a></li>';
                    }
                    else
                    {
                     // echo $username;
                      echo '<li><a href="login.php">Login</a></li>';
                    }
                    
                    ?>
                    

                  </ul>
                </nav>
              </div>
            </div>
</body>
</html>