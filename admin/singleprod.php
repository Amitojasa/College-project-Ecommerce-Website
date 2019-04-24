<?php include 'header.php'; ?>
<?php include '../conn.inc.php'; ?>
<?php 
    $cat=@$_GET['category'];
    $id=@$_GET['id'];
?>
<?php 
    $qu=mysqli_query($conn,"SELECT count(*) as count,avg(`rating`) as avg FROM reviews where productid=$id") or die(mysqli_error($conn));
    $a=mysqli_fetch_assoc($qu);
    $qun=mysqli_query($conn,"SELECT * from productsale where productid=$id") or die(mysqli_error($conn));
    $ar=mysqli_fetch_assoc($qun);
    $n=$a['count'];
    $ra=round($a['avg'],1);
?>

<link rel="stylesheet" href="../css/single-product.css">
<div class="container-fluid my-3">
<?php 
                 $selectQuery="select * from productdetails where category = '$cat' and id=$id";

                    $qu = mysqli_query($conn,$selectQuery) or die(mysqli_error($conn));
                    $q=mysqli_fetch_assoc($qu);
                ?>
    <div class="row">
        <h4 class="col-6 p-3 text-danger">Total Sale Amount: &#8377;<?php echo ((int)$ar['sold']*(int)$q['newPrice']);?></h4>
        <h4 class="col-6 p-3 text-right text-danger">Total quantity sold: <?php echo ((int)$ar['sold']);?></h4>
    </div>
    
    <div class="row">
        <div class="left col-sm-5">
            <div class="slideshow">
                <div class="card">
                
                
                    <div class="card-body p-3 m-2">
                    <div id="demo" class="demo carousel slide" data-ride="carousel">

                        <!-- The slideshow -->
                        <div class="carousel-inner"> 
                            <?php if(!empty($q['image1'])){ ?>
                                <div class="main-imgs carousel-item active">
                                    <img class="img-fluid align-self-center" src="<?php echo "../images/".$q['category']."/".$q['image1'];?>" alt="Los Angeles" >
                                </div>
                            <?php } ?>
                            <?php if(!empty($q['image2'])){ ?>
                                <div class="main-imgs carousel-item">
                                    <img class="img-fluid align-self-center" src="<?php echo "../images/".$q['category']."/".$q['image2'];?>" alt="Los Angeles">
                                </div>
                            <?php } ?>
                            <?php if(!empty($q['image3'])){ ?>
                                <div class="main-imgs carousel-item">
                                    <img class="img-fluid align-self-center" src="<?php echo "../images/".$q['category']."/".$q['image3'];?>" alt="Los Angeles" >
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
                                    <img src="<?php echo "../images/".$q['category']."/".$q['image1'];?>" alt="Los Angeles" width="100px" height="100px">
                                </li>
                            <?php } ?>
                            <?php if(!empty($q['image2'])){ ?>
                                <li data-target="#demo" data-slide-to="1">
                                    <img src="<?php echo "../images/".$q['category']."/".$q['image2'];?>" alt="Los Angeles" width="100px" height="100px">
                                </li>
                            <?php } ?>
                            <?php if(!empty($q['image3'])){ ?>
                                <li data-target="#demo" data-slide-to="2">
                                    <img src="<?php echo "../images/".$q['category']."/".$q['image3'];?>" alt="Los Angeles" width="100px" height="100px">
                                </li>
                            <?php } ?>
                        </ul>
                        </div>
                    </div>
                </div>
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
                            <h5 class="text-success"> Stock : <?php echo $q['stock']; ?></h5>
                        <?php }else{?>
                            <h5 class="text-danger"> <?php echo "Out Of Stock"; ?></h5>
                        <?php } ?>

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


<section class="details row" id="details">
                            <?php $features=(explode(";",$q['details']));
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
    <tr><td class="bg-light px-2"><?php echo $i;?></td><td class="value px-2"><?php echo $j;?></td></tr>
    <?php } ?>
     </tbody>
     </table>


    <div class="qas">
    <h5 class="mb-3">Questions & Answers</h5>        
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