<?php require '../conn.inc.php';?>
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

        $qu = mysqli_query($conn,"INSERT INTO `productdetails`(`title`, `category`, `description`, `newPrice`, `oldPrice`, `stock`, `details`, `warranty`,`features`) VALUES ('$title','$category','$desc',$newPrice,$oldPrice,'$stockQuant','$details','$warranty','$features')") or die(mysqli_error($conn));
        $last_id=mysqli_query($conn,"select LAST_INSERT_ID()") or die(mysqli_error($conn));
		$last_id=mysqli_fetch_array($last_id);
        $last_id=$last_id[0];


        $filename1 =  mysqli_real_escape_string($conn,$_FILES['image1']['name']);
        $pathinfo = pathinfo($filename1);
        $ex=$pathinfo['extension']; 
        $f1=$last_id."_1.".$ex;
        $path1='../images/'.$category.'/'.$filename1;
        $path11='../images/'.$category.'/'.$f1;
        move_uploaded_file($_FILES['image1']['tmp_name'],$path1);
        rename ($path1, $path11);

        $filename2 =  mysqli_real_escape_string($conn,$_FILES['image2']['name']); 
        if(!empty($filename2)){
            $pathinfo = pathinfo($filename2);
            $ex=$pathinfo['extension'];
            $f2=$last_id."_2.".$ex;
            $path2='../images/'.$category.'/'.$filename2;
            $path22='../images/'.$category.'/'.$f2;
            move_uploaded_file($_FILES['image2']['tmp_name'],$path2);
            rename ($path2, $path22);            

        }else{
            $f2="";
        }
        
        

        $filename3 =  mysqli_real_escape_string($conn,$_FILES['image3']['name']);
        
        if(!empty($filename3)){
            $pathinfo = pathinfo($filename3);
            $ex=$pathinfo['extension'];
            $f3=$last_id."_3.".$ex;
            $path3='../images/'.$category.'/'.$filename3;
            $path33='../images/'.$category.'/'.$f3;
            move_uploaded_file($_FILES['image3']['tmp_name'],$path3);
            rename ($path3, $path33);

        }else{
            $f3="";
        }
       
       
        mysqli_query($conn,"update `productdetails` set `image1`='$f1',`image2`='$f2',`image3`='$f3'   where id=$last_id") or die("table not found2");
       
        mysqli_query($conn,"insert into `productsale` (productid,sold) values($last_id,0)") or die("table not found2");


        
        
        
    }

?>


<?php include 'header.php';?>

<div class="container my-3">
<h2>Product Entry:</h2>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Title:</label>
            <textarea name="title" class="form-control" id="title"></textarea>
        </div>
        <div class="form-group">
            <label for="image1">Image1:</label>
            <input type="file" name="image1" class="form-control" id="image">
        </div>
        <div class="form-group">
            <label for="image2">Image2:</label>
            <input type="file" name="image2" class="form-control" id="image">
        </div>
        <div class="form-group">
            <label for="image3">Image3:</label>
            <input type="file" name="image3" class="form-control" id="image">
        </div>
        <div class="form-group">
            <label for="category">Select Category:</label>
            <select name="category" class="form-control" id="category">
                <option value="laptop">Laptop</option>
                <option value="mobile">Mobile</option>
                <option value="camera">Camera</option>
                <option value="watches">Smart watches</option>
                
            </select>
        </div>
        <div class="form-group">
            <label for="desc">Description:</label>
            <textarea name="desc" id="desc" class="form-control" cols="30" rows="7" placeholder="separate with ;"></textarea>
        </div>
        
        <div class="form-group">
            <label for="features">Features:</label>
            <textarea name="features" id="features" class="form-control" cols="30" rows="7" placeholder="separate with ;"></textarea>
        </div>

        <div class="form-group">
            <label for="newPrice">New Price:</label>
            <input type="number" class="form-control" name="newPrice" id="newPrice">
        </div>
        <div class="form-group">
            <label for="oldPrice">Old Price:</label>
            <input type="number" class="form-control" name="oldPrice" id="oldPrice">
        </div>
        <div class="form-group">
            <label for="stock">Stock Quantity:</label>
            <input type="number" class="form-control" name="stockQuant" id="stock" placeholder="(If adding more stock please enter the total stock ie previous present + new )">
        </div>
        
        <div class="form-group">
            <label for="details">Details:</label>
            <textarea name="details" class="form-control" id="details" cols="30" rows="10" placeholder="Enter data in `key:value;` format"></textarea>
        </div>
        <div class="form-group">
            <label for="warranty">Warranty Details:</label>
            <textarea name="warranty" class="form-control" id="warranty" cols="30" rows="5" placeholder="Warranty details"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="addSubmit">Submit</button>
        
    </form>
    </div>
<?php include 'footer.php';?>