<?php require '../conn.inc.php';?>
<?php
    $id=1;
?>
<?php

    if(isset($_POST['addSubmit'])){
        $category="banner";
        if(!empty($_FILES['image1']['name'])){
            $qq=mysqli_query($conn,"select image1 from banner");
            $qq=mysqli_fetch_assoc($qq);
            $path11="../images/".$category."/".$qq['image1'];
            if(unlink($path11)){
            }
            $filename1 =  mysqli_real_escape_string($conn,$_FILES['image1']['name']);
            $pathinfo = pathinfo($filename1);
            $ex=$pathinfo['extension']; 
            $f1=$id."_1.".$ex;
            $path1="../images/".$category."/".$filename1;
            $path11="../images/".$category."/".$f1;
            mysqli_query($conn,"update `banner` set `image1`='$f1'") or die(mysqli_error($conn));
            
            move_uploaded_file($_FILES['image1']['tmp_name'],$path1);
            rename ($path1, $path11);
        }

        if(!empty($_FILES['image2']['name'])){
            $qq=mysqli_query($conn,"select image2 from banner");
            $qq=mysqli_fetch_assoc($qq);
            $path11="../images/".$category."/".$qq['image2'];
            if(unlink($path11)){
            }
            $filename2 =  mysqli_real_escape_string($conn,$_FILES['image2']['name']);
            $pathinfo = pathinfo($filename2);
            $ex=$pathinfo['extension']; 
            $f2=$id."_2.".$ex;
            $path2="../images/".$category."/".$filename2;
            $path22="../images/".$category."/".$f2;
            mysqli_query($conn,"update `banner` set `image2`='$f2'") or die(mysqli_error($conn));
            move_uploaded_file($_FILES['image2']['tmp_name'],$path2);
            rename ($path2, $path22);
        }
        if(!empty($_FILES['image3']['name'])){
            $qq=mysqli_query($conn,"select image3 from banner");
            $qq=mysqli_fetch_assoc($qq);
            $path11="../images/".$category."/".$qq['image3'];
            if(unlink($path11)){
            }
            $filename3 =  mysqli_real_escape_string($conn,$_FILES['image3']['name']);
            $pathinfo = pathinfo($filename3);
            $ex=$pathinfo['extension']; 
            $f3=$id."_3.".$ex;
            $path3="../images/".$category."/".$filename3;            $path33="../images/".$category."/".$f3;
            mysqli_query($conn,"update `banner` set `image3`='$f3'") or die(mysqli_error($conn));

            move_uploaded_file($_FILES['image3']['tmp_name'],$path3);
            rename ($path3, $path33);

        }
        if(!empty($_FILES['image4']['name'])){
            $qq=mysqli_query($conn,"select image4 from banner");
            $qq=mysqli_fetch_assoc($qq);
            $path11="../images/".$category."/".$qq['image4'];
            if(unlink($path11)){
            }
            $filename4 =  mysqli_real_escape_string($conn,$_FILES['image4']['name']);
            $pathinfo = pathinfo($filename4);
            $ex=$pathinfo['extension']; 
            $f4=$id."_4.".$ex;
            $path3="../images/".$category."/".$filename4;            $path33="../images/".$category."/".$f4;
            mysqli_query($conn,"update `banner` set `image4`='$f4'") or die(mysqli_error($conn));

            move_uploaded_file($_FILES['image4']['tmp_name'],$path3);
            rename ($path3, $path33);

        }
        
    }

?>

<?php include 'header.php';?>
<div class="container my-3">
<h2>Banners:</h2>

    <?php
        $category="banner";
        $q=mysqli_query($conn,"select * from banner") or die(mysqli_error($conn));
        $q=mysqli_fetch_assoc($q);
    ?>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="image1">Image1:</label>
            <img class="dispimg img img-fluid" src="<?php echo "../images/".$category."/".$q['image1'];?>" alt="">
            <input type="file" name="image1" class="form-control" id="image">
        </div>
        <div class="form-group">
            <label for="image2">Image2:</label>
            <img class="dispimg img img-fluid" src="<?php echo "../images/".$category."/".$q['image2'];?>" alt="">
            <input type="file" name="image2" class="form-control" id="image">
        </div>
        <div class="form-group">
            <label for="image3">Image3:</label>
            <img  class="dispimg img img-fluid" src="<?php echo "../images/".$category."/".$q['image3'];?>" alt="">
            <input type="file" name="image3" class="form-control" id="image" value="<?php echo $q['image3'];?>">
        </div>
        <div class="form-group">
            <label for="image4">Image4:</label>
            <img  class="dispimg img img-fluid" src="<?php echo "../images/".$category."/".$q['image4'];?>" alt="">
            <input type="file" name="image4" class="form-control" id="image" value="<?php echo $q['image4'];?>">
        </div>
       
        <button type="submit" class="btn btn-primary" name="addSubmit">Submit</button>
        
    </form>
    </div>
<?php include 'footer.php';?>