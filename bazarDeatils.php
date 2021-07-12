<?php

   session_start();
   //require_once('connection.php');
   include 'personalMillCounter.php';
   $db = mysqli_connect("localhost", "root","","mess");

   $user = $_SESSION['uname'];
   $bazarDetails = "SELECT * FROM bazarDetails";
   $bazarDetailsQuery  = mysqli_query($db,$bazarDetails); 
   ?>
   <table border="1">
    <thead>
    <tr><th>Date</th><th>Bazar Cost</th><th>Extra Cost</th></tr>
    </thead>
    <tbody>

    <?php
    $sumOfToatalBazar=0;
    $sumOfToatalExtraBazar=0;
   while($row = mysqli_fetch_array($bazarDetailsQuery)){
    echo "<tr>";
    echo "<td>".$row['date']."</td>";
    echo "<td>".$row['bazarCost']."</td>";
    echo "<td>".$row['extraCost']."</td>";
    $sumOfToatalBazar+=$row['bazarCost'];
    $sumOfToatalExtraBazar+=$row['extraCost'];
    echo "</tr>";
      
    //echo $row['name']." ".$row['date']." ".$row['millNumber']."\n";
   }


?>

<?php
echo "<th>Total Bazar</th>";
echo "<td>".$sumOfToatalBazar."</td>";
echo "<th>Total Extra Bazar</th>";
echo "<td>".$sumOfToatalExtraBazar."</td>";
?>
   
 </tbody>
</table>


<?php
$allUserquery =  "SELECT staffName FROM  user";
$allUser = mysqli_query($db,$allUserquery);
$totalMill =0;

   $totalMill+=millCounter();

echo '<h1>Total Mill is : '.$totalMill.'</h1>';
echo '<h1>Total Cost : '.$sumOfToatalBazar+$sumOfToatalExtraBazar.'</h1>';
echo '<h1>Mill Rate : '.($sumOfToatalBazar+$sumOfToatalExtraBazar)/$totalMill.'</h1>';


?>
