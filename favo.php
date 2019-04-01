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
        $fav=json_decode($q);
        if(in_array($id,$fav)){
            $key = array_search($id,$fav);
            array_splice($fav,$key,1);  
            $jsonCart = json_encode($fav);
            mysqli_query($conn,"update userdetailstb set favourite='$jsonCart' where id='$uid'") or die(mysqli_error($conn));
            echo "Product has been removed from your favourites succesfully";          
        }else{
            array_push($fav,$id);
            $jsonCart = json_encode($fav);
            mysqli_query($conn,"update userdetailstb set favourite='$jsonCart' where id='$uid'") or die(mysqli_error($conn));
            echo "Product has been added to your favourites succesfully";
        }
    }
    
?>