<?php require '../conn.inc.php';?>
<?php

    if(isset($_POST['addSubmit'])){
        $title =  mysqli_real_escape_string($conn,$_POST['title']);
        $category = $_POST['category'];
        $newPrice = $_POST['newPrice'];
        $oldPrice = $_POST['oldPrice'];
        $stockQuant = $_POST['stockQuant'];
        $details =  mysqli_real_escape_string($conn,$_POST['details']);
        $desc =  mysqli_real_escape_string($conn,$_POST['desc']);
        $warranty =  mysqli_real_escape_string($conn,$_POST['warranty']);

        $qu = mysqli_query($conn,"INSERT INTO `productdetails`(`title`, `category`, `description`, `newPrice`, `oldPrice`, `stock`, `details`, `warranty`) VALUES ('$title','$category','$desc',$newPrice,$oldPrice,'$stockQuant','$details','$warranty')") or die(mysqli_error($conn));
        $last_id=mysqli_query($conn,"select LAST_INSERT_ID()") or die(mysqli_error($conn));
		$last_id=mysqli_fetch_array($last_id);
        $last_id=$last_id[0];

        $filename1 =  mysqli_real_escape_string($conn,$_FILES['image1']['name']);
        $pathinfo = pathinfo($filename1);
        $ex=$pathinfo['extension']; 
        $f1=$last_id."_1.".$ex;
        $path1='../images/laptops/'.$filename1;
        $path11='../images/laptops/'.$f1;

        $filename2 =  mysqli_real_escape_string($conn,$_FILES['image2']['name']);
        $pathinfo = pathinfo($filename2);
        $ex=$pathinfo['extension']; 
        $f2=$last_id."_2.".$ex;
        $path2='../images/laptops/'.$filename2;
        $path22='../images/laptops/'.$f2;

        $filename3 =  mysqli_real_escape_string($conn,$_FILES['image2']['name']);
        $pathinfo = pathinfo($filename3);
        $ex=$pathinfo['extension']; 
        $f3=$last_id."_3.".$ex;
        $path3='../images/laptops/'.$filename3;
        $path33='../images/laptops/'.$f3;
       
        mysqli_query($conn,"update `productdetails` set `image1`='$f1',`image2`='$f2',`image3`='$f3'   where id=$last_id") or die("table not found2");

        move_uploaded_file($_FILES['image1']['tmp_name'],$path1);
        rename ($path1, $path11);
        move_uploaded_file($_FILES['image2']['tmp_name'],$path2);
        rename ($path2, $path22);
        move_uploaded_file($_FILES['image3']['tmp_name'],$path3);
        rename ($path3, $path33);

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
    
    <title>Document</title>
</head>
<body>
<div class="container">
<h2>Product Entry:</h2>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control" id="title">
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
                <option value="other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="desc">Description:</label>
            <textarea name="desc" id="desc" class="form-control" cols="30" rows="7" placeholder="separate with ;"></textarea>
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
            <input type="number" class="form-control" name="stockQuant" id="stock">
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
</body>
</html>