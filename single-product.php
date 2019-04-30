<?php include 'header.php'; ?>
<?php include 'conn.inc.php'; ?>
<?php 
    $cat=@$_GET['category'];
    $id=@$_GET['id'];
    if(!isset($_GET['category'])){
        $selectQuery="select category from productdetails where id=$id";

        $quca = mysqli_query($conn,$selectQuery) or die(mysqli_error($conn));
        $qca=mysqli_fetch_assoc($quca);
        $cat=$qca['category'];
    }
?>
<?php 
    $qu=mysqli_query($conn,"SELECT count(*) as count,avg(`rating`) as avg FROM reviews where productid=$id") or die(mysqli_error($conn));
    $a=mysqli_fetch_assoc($qu);
    $n=$a['count'];
    $ra=round($a['avg'],1);
    mysqli_query($conn,"update productdetails set rating='$ra',reviewsNo='$n' where id= $id") or die (mysqli_error($conn));
?>

<script>
    function addToCart (id){
        var q=document.getElementById('quant').value;
        a=parseInt(q);
        if(!isNaN(a)){
        $.ajax({
            url:"addToCart.php?id="+id+"&quant="+q, //the page containing php script
            type: "POST", //request type
            success:function(result){
                alert(result);
           }
         });}
         else{
             alert("Product is out of stock");
         }
    }
    function addToCompare (id){
       $.ajax({
            url:"addToCompare.php?id="+id, //the page containing php script
            type: "POST", //request type
            success:function(result){
                alert(result);
           }
         });
    }

function buyNow(id,cat){
    var q=document.getElementById('quant').value;
        a=parseInt(q);
        if(!isNaN(a)){
            window.location.href = "buyNow.php?id="+id+"&quant="+a+"&category="+cat;}
         else{
             alert("Product is out of stock");
         }
}   
</script>

<script>
function favor(id){
        $.ajax({
            url:"favo.php?id="+id, //the page containing php script
            type: "POST", //request type
            success:function(result){

                //alert(result);
                if(document.getElementById('favo').className=="fa fa-heart")
                    document.getElementById('favo').className="fa fa-heart-o";
                else{
                    document.getElementById('favo').className="fa fa-heart";
                }
           }
         });
}
</script>

<link rel="stylesheet" href="css/single-product.css">
<div class="container-fluid my-3">
    <div class="row">
        <div class="left col-sm-5">
            <div class="slideshow">
                <div class="card">
                
                <?php 
                 $selectQuery="select * from productdetails where category = '$cat' and id=$id";

                    $qu = mysqli_query($conn,$selectQuery) or die(mysqli_error($conn));
                    $q=mysqli_fetch_assoc($qu);
                ?>
                    <div class="card-body p-3 m-2">
                    <div id="demo" class="demo carousel slide" data-ride="carousel">

                        <!-- The slideshow -->
                        <div class="carousel-inner"> 
                            <?php if(!empty($q['image1'])){ ?>
                                <div class="main-imgs carousel-item active">
                                    <img class="img-fluid align-self-center" src="<?php echo "images/".$q['category']."/".$q['image1'];?>" alt="Los Angeles" >
                                </div>
                            <?php } ?>
                            <?php if(!empty($q['image2'])){ ?>
                                <div class="main-imgs carousel-item">
                                    <img class="img-fluid align-self-center" src="<?php echo "images/".$q['category']."/".$q['image2'];?>" alt="Los Angeles">
                                </div>
                            <?php } ?>
                            <?php if(!empty($q['image3'])){ ?>
                                <div class="main-imgs carousel-item">
                                    <img class="img-fluid align-self-center" src="<?php echo "images/".$q['category']."/".$q['image3'];?>" alt="Los Angeles" >
                                </div>
                            <?php } ?>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                         <!-- Indicators -->
                         <ul class="carousel-indicators">
                            <?php if(!empty($q['image1'])){ ?>
                                <li data-target="#demo" data-slide-to="0" class="active">
                                    <img src="<?php echo "images/".$q['category']."/".$q['image1'];?>" alt="Los Angeles" width="100px" height="100px">
                                </li>
                            <?php } ?>
                            <?php if(!empty($q['image2'])){ ?>
                                <li data-target="#demo" data-slide-to="1">
                                    <img src="<?php echo "images/".$q['category']."/".$q['image2'];?>" alt="Los Angeles" width="100px" height="100px">
                                </li>
                            <?php } ?>
                            <?php if(!empty($q['image3'])){ ?>
                                <li data-target="#demo" data-slide-to="2">
                                    <img src="<?php echo "images/".$q['category']."/".$q['image3'];?>" alt="Los Angeles" width="100px" height="100px">
                                </li>
                            <?php } ?>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="operations my-3 p-3 d-flex justify-content-center row">
                <button class="btn btn-danger text-white p-3 col-sm-2" onclick='favor(<?php echo $id;?>);' ><i class="<?php 
                    $que=mysqli_query($conn,"select favourite from userdetailstb where id=$uid");
                    $ar=json_decode(mysqli_fetch_assoc($que)['favourite']);
                    if(in_array($id,$ar)){
                        echo "fa fa-heart";
                    }else{
                        echo "fa fa-heart-o";
                    }
                ?>" id="favo"  title="favourite"></i></button>
                <button class="btn btn-primary text-white p-3 col-sm-3" onclick="buyNow(<?php echo $id;?>,'<?php echo $cat;?>')"><b>Buy Now</b></button>
                <button class="btn btn-warning text-white p-3 col-sm-3" onclick='addToCart(<?php echo $id;?>);'><b>Add to Cart</b></button>
                <button class="btn btn-secondary text-white p-3 col-sm-2" onclick="addToCompare(<?php echo $id;?>);" ><i title="compare"><img src="images/compare.png"></i></button>

            </div>
        </div>
        <div class="right col-sm-7">
            <div class="card border-0">
                <div class="card-body">
                    <div class="title">
                        <h5><?php echo $q['title']; ?></h5>
                    </div>
                    <div class="rating text-secondary my-2 bold">
                            <span class="badge badge-primary"><?php echo $q['rating'];?> <li class="fa fa-star"></li></span> <?php echo $q['reviewsNo'];?> Ratings & reviews
                    </div>
                    <div class="price">
                            <h6 class="text-dark"><span class="text-secondary">Our-Price: </span>&#8377; <?php echo $q['newPrice']; ?></h6>
                            <h6  class="text-secondary">MRP: <strike class="text-danger"><span  class="text-dark"> &#8377; <?php echo $q['oldPrice']; ?></span></strike></h6>
                            <h6 class="text-dark"><span class="text-secondary">You Save: </span>&#8377; <?php echo $q['oldPrice']-$q['newPrice']; ?></h6>
                            
                    </div>
                    <div class="stock">
                        <?php if($q['stock']>0){?>
                            <h5 class="text-success"> <?php echo "In Stock"; ?></h5>
                        <?php }else{?>
                            <h5 class="text-danger"> <?php echo "Out Of Stock"; ?></h5>
                        <?php } ?>

                        <form>
                            <div class="input-group-inline">
                            <b><label for="quant">Quantity:</label></b>
                            <select class="form-control" id="quant" <?php if($q['stock']==0){echo "disabled";}?> >
                                <?php 
                                if($q['stock']>4){
                                    $v=4;
                                }else{
                                    $v=$q['stock'];
                                }
                                for($i=0;$i<$v;$i++){?>
                                <option><?php echo $i+1; ?></option>
                                <?php } ?>
                            </select>
                        </form>
                    </div>
                    <br>
                    <div class="product-details">
                        <h5>Product Details</h5>
                        <?php $features=(explode(";",$q['description'])); ?>
                            <ul>
                            <?php foreach($features as $i){
                                if($i!="")
                                echo "<li>$i</li>";
                            }
                            ?>
                            <a href="#details">See more product details</a>			
                        </ul>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<section class="m-3 related">
    <h4 class="mb-2">Related Products</h4>
    <div id="demo2" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card-deck">
                <?php
                $qurp=mysqli_query($conn,"select * from productdetails where category='$cat'  order by id desc  limit 1,5");

                while($qrp=mysqli_fetch_assoc($qurp)){
                ?>
                    <div class="card">
                        <div class="card-img">
                            <img class="card-img-top" src="<?php echo "images/".$qrp['category']."/".$qrp['image1'];?>" alt="Card image">
                        </div>
                        <div class="card-body pt-2">
                            <div class="card-title-outer">
                                <p class="card-title my-1" title="<?php echo $qrp['title'];?>"><?php echo $qrp['title'];?>
                                </p>
                                <span style="background-color:white;color:#49b0c1;position:absolute;bottom:0;right:0;padding-left:10px;">...</span>
                                
                            </div>
                            <h6 class="card-text p-0 my-1"><?php echo $qrp['category'];?></h6>
                            <h5 class="card-price p-0 m-0 mb-2"> &#8377; <?php echo $qrp['newPrice'];?> <strike class="text-danger"><small class="text-secondary"> &#8377; <?php echo $qrp['oldPrice'];?></small></strike> </h5>
                            <a href="<?php echo 'single-product.php?id='.$qrp['id']; ?>" class="btn btn-primary px-5">View</a>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
            
            <div class="carousel-item">
                <div class="card-deck">
                    <?php 
                        $qurp=mysqli_query($conn,"select * from productdetails where category='$cat'  order by id desc  limit 6,5");

                        while($qrp=mysqli_fetch_assoc($qurp)){
                    ?>
                    <div class="card">
                        <div class="card-img">
                            <img class="card-img-top" src="<?php echo "images/".$qrp['category']."/".$qrp['image1'];?>" alt="Card image">
                        </div>
                        <div class="card-body pt-2">
                            <div class="card-title-outer">
                                <p class="card-title my-1" title="<?php echo $qrp['title'];?>"><?php echo $qrp['title'];?>
                                </p>
                                <span style="background-color:white;color:#49b0c1;position:absolute;bottom:0;right:0;padding-left:10px;">...</span>
                                
                            </div>
                            <h6 class="card-text p-0 my-1"><?php echo $qrp['category'];?></h6>
                            <h5 class="card-price p-0 m-0 mb-2"> &#8377; <?php echo $qrp['newPrice'];?> <strike class="text-danger"><small class="text-secondary"> &#8377; <?php echo $qrp['oldPrice'];?></small></strike> </h5>
                            <a href="<?php echo 'single-product.php?id='.$qrp['id']; ?>" class="btn btn-primary px-5">View</a>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
            
        </div>
        <a class="carousel-control-prev" href="#demo2" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo2" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>
</section>

<section class="details row" id="details">
                            <?php 
                                 
                                $features=(explode(";",$q['details']));
                                $detailsArray = array();
                                foreach($features as $i){

                                    $f=(explode(":",$i));
                                    
                                    $detailsArray[$f[0]] = @$f[1];
                                }
                            ?>
    <div class="col-md-6">
    <div class="secHeader mb-3">
           <h5>Product Details</h5>
    </div>
<table class="table" cellspacing="0" cellpadding="0" border="0">
<tbody>
    <?php foreach($detailsArray as $i=>$j){?>
    <tr><td class="bg-light px-2" width=40%><?php echo $i;?></td><td class="value px-2" width=60%><?php echo $j;?></td></tr>
    <?php } ?>
     </tbody>
     </table>


    <div class="qas">
    <h5 class="mb-3">Questions & Answers</h5>
    <div class="qa mb-4 bg-dark  text-light p-3 rounded">
                <?php 
                    if(isset($_POST['quesSubmit'])){
                        $ques=mysql_real_escape_string($_POST['text']);
                        //$date= date("Y-m-d");
                        mysqli_query($conn,"insert into qatb(`question`,`productId`) values('$ques',$id)") or die(mysqli_error($conn));
                    }
                ?>
                <form method="POST">
                    <div class="form-group">
                    <label for="review">Ask a Question:</label>
                    <textarea class="form-control bg-light" rows="2" id="comment" maxlength="200" name="text" placeholder="Ask a question"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-warning p-2" name="quesSubmit">Submit Question</button>
                    
                </form>
                </div>
        
        <?php
            $qu=mysqli_query($conn,"select * from qatb where productId=$id and answerStatus=1") or die(mysqli_error($conn));
            while($qe=mysqli_fetch_assoc($qu)){
        ?>
        <div class="card">
            <div class="card-header py-1 font-weight-bold">Q. <?php echo $qe['question'];?></div>
            <div class="card-body py-1"> <?php echo $qe['answer'];?> </div>
            <div class="card-footer bg-white p-1 text-secondary border-0 text-right">-By seller on <?php echo $qe['date'];?> </div>
        </div>
            <?php } ?>
        <a href="qas.php?category=<?php echo $cat;?>&id=<?php echo $id;?>">See more answered questions</a>
    </div>

     </div>
    <div class="col-md-5 offset-1">
        <div class="section techD mb-4">
            <div class="secHeader">
            <h5>Warranty &amp; Support</h5>
            </div>
            <div class="text-justify">
                <strong>Warranty Details:</strong> <?php echo $q['warranty'];?>
            </div>
        </div>
        <div class="Reviews">
        
            <h5>Customer Reviews</h5>
                <div class="review mb-4 bg-dark text-light p-3 rounded">
                <?php
                    if(isset($_POST['submitRev'])){
                        if($login==true){
                            $star=$_POST['rating'];
                            $review=mysql_real_escape_string($_POST['reviewText']);
                            $date= date("Y-m-d");
                            mysqli_query($conn,"insert into reviews(`userid`,`rating`,`reviewDetails`,`date`,`productid`) values($uid,$star,'$review','$date',$id)") or die(mysqli_error($conn));
                            echo "<script>window.open(window.location.href,'_self')</script>";
                        }else{
                            echo "<script>alert('Please login to Review');</script>";
                        }
                    }
                ?>
                <form method="POST">
                    <div class="form-group">
                        <label for="review">Write a Review:</label>
                        <textarea class="form-control bg-light" rows="5" id="comment" maxlength="200" name="reviewText" placeholder="Write a review (max length 200 characters.)" required></textarea>
                    </div>
                    <div class="down d-flex justify-content-between align-items-center">
                    <div class="form-group">
                            <label for="star-rating">Rate the product:</label>

                            <div id="stars-existing" class="starrr text-warning" data-rating='4'></div>  
                            <script src="js/star-rating.js"></script>
                            <input type="number" value="4" id="rating" name="rating" style="display:none;">
                            
                    </div>
                    <button type="submit" name="submitRev" class="btn btn-warning p-2">Submit Review</button>
                    </div>
                    
                </form>
                
                </div>

                
                <h5>Reviews <small class="text-secondary"><?php echo $q['reviewsNo'];?> Reviews</small></h5>
                <?php
                    $qu=mysqli_query($conn,"SELECT b.*, a.firstName FROM reviews AS b INNER JOIN userdetailstb as A ON (b.userid=a.id) where b.productid=$id order by id desc limit 5") or die(mysqli_error($conn));
                    while($qp=mysqli_fetch_assoc($qu)){

                ?>
                <div class="review mb-2">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between"><b><?php echo $qp['firstName'];?></b>
                            <span class="stars">
                            <?php 
                                for($i=1;$i<=5;$i++){
                            ?>
                                <li class="fa fa-star<?php if($i>$qp['rating']) echo '-o';?>"></li>
                                <?php } ?>
                            </span>
                            <small class="text-muted"><?php echo $qp['date'];?></small>
                        </div>
                        <div class="card-body"><?php echo $qp['reviewDetails'];?></div>
                    </div>
                </div>
                    <?php } ?>
                
                <br>
                <a href="moreReviews.php"> More Reviews</a>


        </div>
        <div class="overall-rating mt-4">
            <h5>Overall Rating of Product</h5>
            <div class="card bg-dark">
                <div class="card-body text-center">
                    <span class="stars text-warning">
                            <?php 
                                for($i=1;$i<=5;$i++){
                            ?>
                                <li class="fa fa-star<?php if($i>(round($q['rating']))) echo '-o';?>"></li>
                                <?php } ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
     </div>
</section>
</div>
<?php include 'footer.php'; ?>