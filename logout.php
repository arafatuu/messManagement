<?php
session_start();

if(isset($_SESSION['uname']))
{
    $_SESSION['uname']="";
 header("Location:Header.php");
}

?>