<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php
    require 'conn.inc.php';
?>
<?php
	if (@$_SESSION['login']==true){
        $login=true;
        $uid=$_SESSION['userid'];
	}else{
        $login=false;
    }
?>

<?php 
    if(!$login){
        echo "Please Login";
    }else{
        $id=$_GET['id'];
        $qu=mysqli_query($conn,"select cart from userdetailstb where id='$uid'") or die(mysqli_error($conn));
        $q=mysqli_fetch_assoc($qu)['cart'];
        $cart=json_decode($q,TRUE);

        unset($cart[$id]);
        
        $jsonCart = json_encode($cart);
        mysqli_query($conn,"update userdetailstb set cart='$jsonCart' where id='$uid'") or die(mysqli_error($conn));
        // echo "Product has been added to your cart succesfully";
    }
    
?>