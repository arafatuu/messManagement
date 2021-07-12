<?php

session_start();
//require_once('connection.php');
$db = mysqli_connect("localhost","root","","mess");
$userName = $_SESSION['uname'];
$date1 = '2021-07-08';
 $date2 = '2021-07-10';
$queryUserPaymentdetailsQuery =  "SELECT * FROM payment WHERE staffName='".$userName."' AND ( date>='".$date1."' AND date<='".$date2."')";
$queryUserPaymentdetails = mysqli_query($db,$queryUserPaymentdetailsQuery);
   ?>
   <table border="1">
    <thead>
    <tr><th>Date</th><th>Payment</th></tr>
    </thead>
    <tbody>

    <?php
    $sumOfPay=0;
   while($row = mysqli_fetch_array($queryUserPaymentdetails)){
    echo "<tr>";
    echo "<td>".$row['date']."</td>";
    echo "<td>".$row['payAmount']."</td>";
    $sumOfPay+=$row['payAmount'];
    echo "</tr>";
      
    //echo $row['name']." ".$row['date']." ".$row['millNumber']."\n";
   }


?>

<?php
echo "<th>Total Total Pay</th>";
echo "<td>".$sumOfPay."</td>";
?>
   
 </tbody>
</table>
