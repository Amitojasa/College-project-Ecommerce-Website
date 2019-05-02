<?php require '../conn.inc.php';?>
<?php
    $id=@$_GET['id'];
?>
<?php

    if(isset($_POST['addSubmit'])){
        $title =  mysqli_real_escape_string($conn,$_POST['title']);
        $category = $_POST['category'];
        $newPrice = $_POST['newPrice'];
        $oldPrice = $_POST['oldPrice'];
        $stockQuant = $_POST['stockQuant'];
        $details =  mysqli_real_escape_string($conn,$_POST['details']);
        $features =  mysqli_real_escape_string($conn,$_POST['features']);
        $desc =  mysqli_real_escape_string($conn,$_POST['desc']);
        $warranty =  mysqli_real_escape_string($conn,$_POST['warranty']);

        $qu = mysqli_query($conn,"update `productdetails` set `title`='$title', `category`='$category', `description`='$desc', `newPrice`=$newPrice, `oldPrice`=$oldPrice, `stock`='$stockQuant', `details`='$details', `warranty`='$warranty', features='$features' where id=$id") or die(mysqli_error($conn));
        if(!empty($_FILES['image1']['name'])){
            $qq=mysqli_query($conn,"select image1 from productdetails");
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
            mysqli_query($conn,"update `productdetails` set `image1`='$f1' where id=$id") or die(mysqli_error($conn));
            
            move_uploaded_file($_FILES['image1']['tmp_name'],$path1);
            rename ($path1, $path11);
        }

        if(!empty($_FILES['image2']['name'])){
            $qq=mysqli_query($conn,"select image2 from productdetails");
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
            mysqli_query($conn,"update `productdetails` set `image2`='$f2' where id=$id") or die(mysqli_error($conn));
            
            move_uploaded_file($_FILES['image2']['tmp_name'],$path2);
            rename ($path2, $path22);
        }
        if(!empty($_FILES['image3']['name'])){
            $qq=mysqli_query($conn,"select image3 from productdetails");
            $qq=mysqli_fetch_assoc($qq);
            $path11="../images/".$category."/".$qq['image3'];
            if(unlink($path11)){
            }
            $filename3 =  mysqli_real_escape_string($conn,$_FILES['image3']['name']);
            $pathinfo = pathinfo($filename3);
            $ex=$pathinfo['extension']; 
            $f3=$id."_3.".$ex;
            $path3="../images/".$category."/".$filename3;            $path33="../images/".$category."/".$f3;
            mysqli_query($conn,"update `productdetails` set `image3`='$f3' where id=$id") or die(mysqli_error($conn));

            move_uploaded_file($_FILES['image3']['tmp_name'],$path3);
            rename ($path3, $path33);

        }
        
    }

?>

<?php include 'header.php';?>
<div class="container my-3">
<h2>Product Edit:</h2>

    <?php
        $q=mysqli_query($conn,"select * from productdetails where id='$id'") or die(mysqli_error($conn));
        $q=mysqli_fetch_assoc($q);
    ?>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Title:</label>
            <textarea rows="1" type="text" name="title" class="form-control" id="title" ><?php echo ($q['title']);?></textarea>
        </div>
        <div class="form-group">
            <label for="image1">Image1:</label>
            <img class="dispimg img img-fluid" src="<?php echo "../images/".$q['category']."/".$q['image1'];?>" alt="">
            <input type="file" name="image1" class="form-control" id="image">
        </div>
        <div class="form-group">
            <label for="image2">Image2:</label>
            <img class="dispimg img img-fluid" src="<?php echo "../images/".$q['category']."/".$q['image2'];?>" alt="">
            <input type="file" name="image2" class="form-control" id="image">
        </div>
        <div class="form-group">
            <label for="image3">Image3:</label>
            <img  class="dispimg img img-fluid" src="<?php echo "../images/".$q['category']."/".$q['image3'];?>" alt="">
            <input type="file" name="image3" class="form-control" id="image" value="<?php echo $q['image3'];?>">
        </div>
        <div class="form-group">
            <label for="category">Select Category:</label>
            <select name="category" class="form-control" id="category" value="<?php echo $q['category'];?>">
            <option value="laptop" <?php
                                                if(($q['category'])==('laptop')){
                                                    echo  "selected";
                                                } ?>>Laptop</option>
                <option value="mobile" <?php
                                                if(($q['category'])==('mobile')){
                                                    echo  "selected";
                                                } ?> >Mobile</option>
                
                <option value="camera" <?php
                                                if(($q['category'])==('camera')){
                                                    echo  "selected";
                                                } ?>>Camera</option>
                <option value="watches" <?php
                                                if(($q['category'])==('watches')){
                                                    echo  "selected";
                                                } ?>>Smart watches</option>
                
            </select>
        </div>
        <div class="form-group">
            <label for="desc">Description:</label>
            <textarea name="desc" id="desc" class="form-control" cols="30" rows="7" placeholder="separate with ;"><?php echo $q['description'];?></textarea>
        </div>
        
        <div class="form-group">
            <label for="features">Features:</label>
            <textarea name="features" id="features" class="form-control" cols="30" rows="7" placeholder="separate with ;" ><?php echo $q['features'];?></textarea>
        </div>

        <div class="form-group">
            <label for="newPrice">New Price:</label>
            <input type="number" class="form-control" name="newPrice" id="newPrice" value="<?php echo $q['newPrice'];?>">
        </div>
        <div class="form-group">
            <label for="oldPrice">Old Price:</label>
            <input type="number" class="form-control" name="oldPrice" id="oldPrice" value="<?php echo $q['oldPrice'];?>">
        </div>
        <div class="form-group">
            <label for="stock">Stock Quantity:</label>
            <input type="number" class="form-control" name="stockQuant" id="stock" value="<?php echo $q['stock'];?>">
        </div>
        
        <div class="form-group">
            <label for="details">Details:</label>
            <textarea name="details" class="form-control" id="details" cols="30" rows="10" placeholder="Enter data in `key:value;` format"><?php echo $q['details'];?></textarea>
        </div>
        <div class="form-group">
            <label for="warranty">Warranty Details:</label>
            <textarea name="warranty" class="form-control" id="warranty" cols="30" rows="5" placeholder="Warranty details" ><?php echo $q['warranty'];?></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="addSubmit">Submit</button>
        
    </form>
    </div>
<?php include 'footer.php';?>