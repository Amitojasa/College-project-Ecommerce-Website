<?php
    require "conn.inc.php";

    $id=$_GET['id'];
   
    $q=mysqli_query($conn,"select * from orderstatus where orderid=$id") or die(mysqli_error($conn));
    $r=mysqli_fetch_assoc($q)['status'];
    if($r==""){
        echo "not yet dispatched";
    }else
    echo $r;


 ?>
