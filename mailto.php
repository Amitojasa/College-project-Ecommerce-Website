<?php

$from=$_POST['email'];
$name=$_POST['name'];
$msg=$_POST['msg'];

$sub="$name sent this message.. from GadgetsPick";
$headers="From: ".$from;

// mail("gadgetspick@gmail.com",$sub,$msg,$headers) or die("!!! Message not sent !!!");
mail("gadgetspick@gmail.com",$sub,$msg,$headers) or die("!!! Message not sent !!!");
echo "<script>alert('sent')</script>";
echo "<script>window.location='contact.php'";

?>