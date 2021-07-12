<?php

   session_start();
   //require_once('connection.php');
   $db = mysqli_connect("localhost", "root","","mess");

   $user = $_SESSION['uname'];
   $mquery="SELECT name,date, millNumber FROM millCounter where name='".$user."'";
   $result = mysqli_query($db,$mquery); 
   ?>
   <table border="1">
    <thead>
    <tr><th>Date</th><th>Mill</th></tr>
    </thead>
    <tbody>

    <?php
    $sum =0;
   while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$row['date']."</td>";
    echo "<td>".$row['millNumber']."</td>";
    $sum+=$row['millNumber'];
    echo "</tr>";
      
    //echo $row['name']." ".$row['date']." ".$row['millNumber']."\n";
   }


?>

<?php
echo "<th>Total Mill</th>";
echo "<td>".$sum."</td>";
?>
   
 </tbody>
</table>