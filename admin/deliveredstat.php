<?php
    require "../conn.inc.php";

    $id=$_GET['id'];
    $date= date("Y-m-d");
    mysqli_query($conn,"update orderstatus set status='delivered',deliverydate='$date'  where orderId=$id") or die(mysqli_error($conn));
   


 ?>
