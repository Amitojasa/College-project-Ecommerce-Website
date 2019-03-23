<?php
    require "../conn.inc.php";

    $id=$_GET['id'];
    $category=$_GET['cat'];

    $x=mysqli_query($conn,"SELECT * FROM productdetails where id=$id") or die(mysqli_error($conn));

    $r=mysqli_fetch_assoc($x);
    $src=$r['image1'];
    $path='../images/'.$category.'/'.$src;
    if(unlink($path)){}
    $src=$r['image2'];
    $path='../images/'.$category.'/'.$src;
    if(unlink($path)){}
    $src=$r['image3'];
    $path='../images/'.$category.'/'.$src;
    if(unlink($path)){}
    

    mysqli_query($conn,"delete FROM productdetails where id=$id") or die(mysqli_error($conn));


 ?>
