<?php
    require "../conn.inc.php";

    $id=$_GET['id'];
    $date= date("Y-m-d");
    mysqli_query($conn,"update transactions set status=1 where id=$id") or die(mysqli_error($conn));
    mysqli_query($conn,"insert into orderstatus (orderid,status,dispatchdate) values($id,'dispatched','$date')") or die(mysqli_error($conn));


 ?>
