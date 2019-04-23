<?php
    require "../conn.inc.php";

    $id=$_GET['id'];
   
    mysqli_query($conn,"update transactions set status=1 where id=$id") or die(mysqli_error($conn));
    mysqli_query($conn,"insert into orderstatus (orderid,status) values($id,'dispatched')") or die(mysqli_error($conn));


 ?>
