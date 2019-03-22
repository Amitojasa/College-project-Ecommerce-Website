<?php require '../conn.inc.php'; ?>


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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="custom.css">
    <title>Document</title>
</head>
<body>
<script>
      function remove (id,category) {

          $.ajax({
            url:"singleProductDelete.php?id="+id+"&cat="+category, //the page containing php script
            type: "POST", //request type
            success:function(result){
                $(".results").load("productDelete.php");
           }
         });

     }
     </script>
<div class="container">
<h2>Product Edit:</h2>
    <?php
        if(isset($_POST['sub'])){
            $cat=$_POST['category'];
        }
     ?>
    <form method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-5">
                <div class="row">
                    <div class="col-sm-4">
                        <label for="category">Select Category:</label>
                    </div>
                    <div class="col-sm-8">
                        <select name="category" class="form-control" id="category">
                            <option value="laptop">Laptop</option>
                            <option value="mobile">Mobile</option>
                            <option value="camera">Camera</option>
                            <option value="watches">Smart watches</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class=" offset-1 col-sm-5 text-right">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-search"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Search">
                </div> 
            </div>
            <div class="col-sm-1">
                <button type="submit" class="btn btn-primary" name="sub">Submit</button>
            </div>
        </div> 
    </form>
    
<br><br>
<h3>Choose Product:</h3>
    <section class="results border" id="results">

        <?php
            // if(isset($cat)){
                $cat=@$cat;
                $qu = mysqli_query($conn,"Select * from productdetails where category='$cat'") or die(mysqli_error($conn));
                while($q=mysqli_fetch_assoc($qu)){
                    ?>

                    <div class="row px-3 py-2 disprow">
                        <div class="col-md-3 img text-center">
                            <img src="<?php echo "../images/".$cat."/".$q['image1'];?>" alt="GadgetsPick" class="img-fluid">
                        </div>
                        <div class="col-md-5 text title text-center"><?php echo $q['title'];?></div>
                        <div class="col-md-3 price text-center"><?php echo $q['newPrice'];?></div>
                        <div class="col-md-1  text-center">
                            <button  onclick='<?php echo 'remove('.$q['id'].',"'.$q['category'].'")';?>' class="btn btn-danger">Delete</a>
                        </div>
                    </div>

                    <?php
                }
            // }
        ?>
    </section>
    </div>
</body>
</html>