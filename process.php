<?php
session_start();
require_once("connection.php");
$db = mysqli_connect('localhost','root','','mess');
if(isset($_POST['loginUser']))
{
    $userName = $_POST['userName'];
    $password = $_POST['password'];

    $sql="SELECT * FROM user WHERE userName='".$userName."' AND password = '".$password."' LIMIT 1";
    
    $loginQuery = mysqli_query($db,$sql);

    $row = mysqli_fetch_array($loginQuery);

    if(mysqli_num_rows($loginQuery)==1)
    {
        // $_SESSION['uname']=$userName;
        // $_SESSION['pword'] = $password;

        $_SESSION['uname']=$row['userName'];
        $_SESSION['pword'] = $row['password'];
        header("Location:header.php");
    }
    else
    {header("Location:login.php?val=fail");
    }
   
}