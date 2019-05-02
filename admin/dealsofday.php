<?php require '../conn.inc.php'; 
$cate="";
?>

 <?php
        if(isset($_POST['sub'])){
            $cate=$_POST['category'];
            if( !isset($_COOKIE['dealsCategory'])){
                setcookie('dealsCategory', $cate);
            }else{
                $_COOKIE['dealsCategory']=$cate;
            }
            $s1=$_POST['search_text'];
            $s=explode(" ",$s1);
            $sql="";
            foreach($s as $i){
                  $sql .= "union SELECT * FROM `productdetails` where ((title like '%{$i}%' or details like '%{$i}%') and category='$cate')";
                   
            } 
            $sql=substr($sql,6);
        }
     ?> 
<?php include 'header.php';?>
<script>
function addToDeals (id){
        $.ajax({
            url:"addToDeals.php?id="+id, //the page containing php script
            type: "POST", //request type
            success:function(result){
                $('#count').load('dealsofday.php #count');
                $('#results').load('dealsofday.php #results');
           }
         });
    }
</script>
<div class="container my-3">

<h2>Deals of the day:</h2>
   
    <form method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-5">
                <div class="row">
                    <div class="col-sm-4">
                        <label for="category">Select Category:</label>
                    </div>
                    <div class="col-sm-8">
                    <select name="category" class="form-control" id="category" value="<?php echo $q['category'];?>">
                        <option value="" <?php
                                                            if(($cate)==('')){
                                                                echo  "selected";
                                                            } ?>>Select category</option>
                        <option value="laptop" <?php
                                                            if(($cate)==('laptop')){
                                                                echo  "selected";
                                                            } ?>>Laptop</option>
                            <option value="mobile" <?php
                                                            if(($cate)==('mobile')){
                                                                echo  "selected";
                                                            } ?> >Mobile</option>
                            
                            <option value="camera" <?php
                                                            if(($cate)==('camera')){
                                                                echo  "selected";
                                                            } ?>>Camera</option>
                            <option value="watches" <?php
                                                            if(($cate)==('watches')){
                                                                echo  "selected";
                                                            } ?>>Smart watches</option>
                            
                        </select>
                    </div>
                </div>
            </div>
            <div class=" offset-1 col-sm-5 text-right">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-search"></i></span>
                    </div>
                    <input type="text" name="search_text" class="form-control" placeholder="Search">
                </div> 
            </div>
            <div class="col-sm-1">
                <button type="submit" class="btn btn-primary" name="sub">Submit</button>
            </div>
        </div> 
    </form>
    
<br><br>


<a class="btn btn-danger" href="viewDealsOfDay.php">View/Edit List</a>
<h3>Choose Product:</h3>
<div id="count">
<?php
    $q=mysqli_query($conn,"select dealsOfDay from custom");
    $l=json_decode(mysqli_fetch_assoc($q)['dealsOfDay']);
    $quant=count($l);
?>
<h4>You can add <span class="text-danger"><?php echo 10-$quant;?></span> more products.</h4>
</div>
    <div class="results border" id="results">

        <?php
            if(isset($_COOKIE['dealsCategory'])){
                $cat=$_COOKIE['dealsCategory'];
                if(!isset($sql))
                    $qu = mysqli_query($conn,"Select * from productdetails where category='$cat'") or die(mysqli_error($conn));
                else
                    $qu = mysqli_query($conn,@$sql);
                while($q=mysqli_fetch_assoc($qu)){
                    if(in_array($q['id'],$l)){
                        continue;
                    }

                    ?>

                    <div class="row p-2 disprow">
                        <div class="col-md-3 img text-center">
                            <img src="<?php echo "../images/".$cat."/".$q['image1'];?>" alt="GadgetsPick" class="img-fluid">
                        </div>
                        <div class="col-md-5 text title text-center"><?php echo $q['title'];?></div>
                        <div class="col-md-2 price text-center">₹ <?php echo $q['newPrice'];?></div>
                        <div class="col-md-2  text-center">
                            <button class="btn btn-primary" onclick='addToDeals(<?php echo $q['id'];?>)' >Add to Deals</button>
                        </div>
                    </div>

                    <?php
                }
            }
        ?>
    </div>
    </div>
<?php include 'footer.php';?>