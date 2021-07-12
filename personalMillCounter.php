<?php

 function millCounter(){

   $db = mysqli_connect("localhost", "root","","mess");
   $date1 = '2021-07-08';
   $date2 = '2021-07-10';
   $mquery="SELECT SUM(millNumber) AS totalMill FROM millCounter where date>='".$date1."' AND date<='".$date2."'";
   $result = mysqli_query($db,$mquery);
   $sum = mysqli_fetch_array($result); 

   return $sum['totalMill'];
    }

?>


