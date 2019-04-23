<?php
    require "../conn.inc.php";

    $id=$_GET['id'];
   
    mysqli_query($conn,"update orderstatus set status='delivered' where orderId=$id") or die(mysqli_error($conn));
   


 ?>
