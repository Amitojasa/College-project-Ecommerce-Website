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
        $qu=mysqli_query($conn,"select favourite from userdetailstb where id='$uid'") or die(mysqli_error($conn));
        $q=mysqli_fetch_assoc($qu)['favourite'];
        $fav=json_decode($q,true);
        if($key = array_search(24,$fav)){
            echo "hello";
            unset($a[$key]);            
        }else{
            array_push($fav,$id);
        }
        $jsonCart = json_encode($fav);
        mysqli_query($conn,"update userdetailstb set favourite='$jsonCart' where id='$uid'") or die(mysqli_error($conn));
        echo "Product has been added to your favourites succesfully";
    }
    
?>