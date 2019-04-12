<?php
    require '../conn.inc.php';
?>

<?php 
        $id=$_GET['id'];
        $qu=mysqli_query($conn,"select dealsOfDay from custom") or die(mysqli_error($conn));
        $q=mysqli_fetch_assoc($qu)['dealsOfDay'];
        $cmp=json_decode($q);
        if(in_array($id,$cmp)){
            $key = array_search($id,$cmp);
            array_splice($cmp,$key,1);  
            $jsonCart = json_encode($cmp);
            mysqli_query($conn,"update custom set dealsOfDay='$jsonCart'") or die(mysqli_error($conn));     
        }else{
            array_push($cmp,$id);
            $jsonCart = json_encode($cmp);
            mysqli_query($conn,"update custom set dealsOfDay='$jsonCart'") or die(mysqli_error($conn));
        }
    
?>