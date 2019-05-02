<?php 
include 'header.php';
?>
<link rel="stylesheet" href="css/home.css">
<section>
<div id="demo" class="carousel slide" data-ride="carousel">
    <?php
        $category="banner";
        $q=mysqli_query($conn,"select * from banner") or die(mysqli_error($conn));
        $q=mysqli_fetch_assoc($q);
    ?>
  <!-- Indicators -->
    <ul class="carousel-indicators">
    <?php if(!empty($q['image1'])){?>
            <li data-target="#demo" data-slide-to="0" class="active"></li>
        <?php } ?>
        <?php if(!empty($q['image2'])){?>
            <li data-target="#demo" data-slide-to="1"></li>
        <?php } ?>
        <?php if(!empty($q['image3'])){?>
            <li data-target="#demo" data-slide-to="2"></li>
        <?php } ?>
        <?php if(!empty($q['image4'])){?>
            <li data-target="#demo" data-slide-to="3"></li>
        <?php } ?>
    </ul>
  
  <!-- The slideshow -->
   
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo "images/".$category."/".$q['image1'];?>" alt="Los Angeles">
    </div>
    <?php if(!empty($q['image2'])){?>
    <div class="carousel-item">
      <img src="<?php echo "images/".$category."/".$q['image2'];?>" alt="Chicago">
    </div>
    <?php } ?>
    <?php if(!empty($q['image3'])){?>
    <div class="carousel-item">
      <img src="<?php echo "images/".$category."/".$q['image3'];?>" alt="Chicago">
    </div>
    <?php } ?>
    <?php if(!empty($q['image4'])){?>
    <div class="carousel-item">
      <img src="<?php echo "images/".$category."/".$q['image4'];?>" alt="Chicago">
    </div>
    <?php } ?>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</section>
<section class="m-3">
    <h4 class="mb-2">Deals Of The Day</h4>
    <div id="demo1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card-deck">
                <?php
                $q=mysqli_query($conn,"select dealsOfDay from custom");
                $l=json_decode(mysqli_fetch_assoc($q)['dealsOfDay'],true);
                if(count($l)>4){
                    $count=5;
                }else{
                    $count=$count%5;
                }
                for($c=0;$c<$count;$c++){
                    $i=$l[$c];
                    $qu = mysqli_query($conn,"Select * from productdetails where id='$i'") or die(mysqli_error($conn));
                    $q=mysqli_fetch_assoc($qu);
                ?>
                    <div class="card">
                        <div class="card-img">
                            <img class="card-img-top" src="<?php echo "images/".$q['category']."/".$q['image1'];?>" alt="Card image">
                        </div>
                        <div class="card-body pt-2">
                            <div class="card-title-outer">
                                <p class="card-title my-1" title="<?php echo $q['title'];?>"><?php echo $q['title'];?>
                                </p>
                                <span style="background-color:white;color:#49b0c1;position:absolute;bottom:0;right:0;padding-left:10px;">...</span>
                                
                            </div>
                            <h6 class="card-text p-0 my-1"><?php echo $q['category'];?></h6>
                            <h5 class="card-price p-0 m-0 mb-2"> &#8377; <?php echo $q['newPrice'];?> <strike class="text-danger"><small class="text-secondary"> &#8377; <?php echo $q['oldPrice'];?></small></strike> </h5>
                            <a href="<?php echo 'single-product.php?id='.$q['id']; ?>" class="btn btn-primary px-5">View</a>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
            <?php if($count>5){?>
            <div class="carousel-item">
                <div class="card-deck">
                <?php
                for($c=5;$c<$count;$c++){
                    $i=$l[$c];
                    $qu = mysqli_query($conn,"Select * from productdetails where id='$i'") or die(mysqli_error($conn));
                    $q=mysqli_fetch_assoc($qu);
                ?>
                    <div class="card">
                        <img class="card-img-top" src="<?php echo "images/".$q['category']."/".$q['image1'];?>" alt="Card image">
                        <div class="card-body pt-2">
                            <h6 class="card-title my-1"><?php echo $q['title'];?></h6>
                            <p class="card-text p-0 my-1"><?php echo $q['category'];?></p>
                            <h5 class="card-title p-0 m-0 mb-2"> &#8377; <?php echo $q['newPrice'];?> <strike class="text-danger"><small class="text-secondary"> &#8377; <?php echo $q['oldPrice'];?></small></strike> </h5>
                            <a href="<?php echo 'single-product.php?id='.$q['id']; ?>" class="btn btn-primary px-5">View</a>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
                <?php }?>
        </div>
        <a class="carousel-control-prev" href="#demo1" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo1" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>
</section>


<hr>
<section class="m-3">
    <h4 class="mb-2">Latest Laptops</h4>
    <div id="demo1l" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card-deck">
                <?php
                $qu=mysqli_query($conn,"select * from productdetails where category='laptop'  order by id desc  limit 0,5");

                while($q=mysqli_fetch_assoc($qu)){
                ?>
                    <div class="card">
                        <div class="card-img">
                            <img class="card-img-top" src="<?php echo "images/".$q['category']."/".$q['image1'];?>" alt="Card image">
                        </div>
                        <div class="card-body pt-2">
                            <div class="card-title-outer">
                                <p class="card-title my-1" title="<?php echo $q['title'];?>"><?php echo $q['title'];?>
                                </p>
                                <span style="background-color:white;color:#49b0c1;position:absolute;bottom:0;right:0;padding-left:10px;">...</span>
                                
                            </div>
                            <h6 class="card-text p-0 my-1"><?php echo $q['category'];?></h6>
                            <h5 class="card-price p-0 m-0 mb-2"> &#8377; <?php echo $q['newPrice'];?> <strike class="text-danger"><small class="text-secondary"> &#8377; <?php echo $q['oldPrice'];?></small></strike> </h5>
                            <a href="<?php echo 'single-product.php?id='.$q['id']; ?>" class="btn btn-primary px-5">View</a>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
            
            <div class="carousel-item">
                <div class="card-deck">
                <?php 
                    $qu=mysqli_query($conn,"select * from productdetails where category='laptop'  order by id desc  limit 5,5");

                    while($q=mysqli_fetch_assoc($qu)){
                 ?>
                    <div class="card">
                        <div class="card-img">
                            <img class="card-img-top" src="<?php echo "images/".$q['category']."/".$q['image1'];?>" alt="Card image">
                        </div>
                        <div class="card-body pt-2">
                            <div class="card-title-outer">
                                <p class="card-title my-1" title="<?php echo $q['title'];?>"><?php echo $q['title'];?>
                                </p>
                                <span style="background-color:white;color:#49b0c1;position:absolute;bottom:0;right:0;padding-left:10px;">...</span>
                                
                            </div>
                            <h6 class="card-text p-0 my-1"><?php echo $q['category'];?></h6>
                            <h5 class="card-price p-0 m-0 mb-2"> &#8377; <?php echo $q['newPrice'];?> <strike class="text-danger"><small class="text-secondary"> &#8377; <?php echo $q['oldPrice'];?></small></strike> </h5>
                            <a href="<?php echo 'single-product.php?id='.$q['id']; ?>" class="btn btn-primary px-5">View</a>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
           
        </div>
        <a class="carousel-control-prev" href="#demo1l" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo1l" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>
</section>
<hr>
<section class="m-3">
    <h4 class="mb-2">Latest Mobiles</h4>
    <div id="demo1m" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card-deck">
                <?php
                $qu=mysqli_query($conn,"select * from productdetails where category='mobile'  order by id desc  limit 0,5");

                while($q=mysqli_fetch_assoc($qu)){
                ?>
                    <div class="card">
                        <div class="card-img">
                            <img class="card-img-top" src="<?php echo "images/".$q['category']."/".$q['image1'];?>" alt="Card image">
                        </div>
                        <div class="card-body pt-2">
                            <div class="card-title-outer">
                                <p class="card-title my-1" title="<?php echo $q['title'];?>"><?php echo $q['title'];?>
                                </p>
                                <span style="background-color:white;color:#49b0c1;position:absolute;bottom:0;right:0;padding-left:10px;">...</span>
                                
                            </div>
                            <h6 class="card-text p-0 my-1"><?php echo $q['category'];?></h6>
                            <h5 class="card-price p-0 m-0 mb-2"> &#8377; <?php echo $q['newPrice'];?> <strike class="text-danger"><small class="text-secondary"> &#8377; <?php echo $q['oldPrice'];?></small></strike> </h5>
                            <a href="<?php echo 'single-product.php?id='.$q['id']; ?>" class="btn btn-primary px-5">View</a>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
           
            <div class="carousel-item">
                <div class="card-deck">
                <?php 
                $qu=mysqli_query($conn,"select * from productdetails where category='mobile'  order by id desc  limit 5,5");

                while($q=mysqli_fetch_assoc($qu)){
            ?>
                    <div class="card">
                        <div class="card-img">
                            <img class="card-img-top" src="<?php echo "images/".$q['category']."/".$q['image1'];?>" alt="Card image">
                        </div>
                        <div class="card-body pt-2">
                            <div class="card-title-outer">
                                <p class="card-title my-1" title="<?php echo $q['title'];?>"><?php echo $q['title'];?>
                                </p>
                                <span style="background-color:white;color:#49b0c1;position:absolute;bottom:0;right:0;padding-left:10px;">...</span>
                                
                            </div>
                            <h6 class="card-text p-0 my-1"><?php echo $q['category'];?></h6>
                            <h5 class="card-price p-0 m-0 mb-2"> &#8377; <?php echo $q['newPrice'];?> <strike class="text-danger"><small class="text-secondary"> &#8377; <?php echo $q['oldPrice'];?></small></strike> </h5>
                            <a href="<?php echo 'single-product.php?id='.$q['id']; ?>" class="btn btn-primary px-5">View</a>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
           
        </div>
        <a class="carousel-control-prev" href="#demo1m" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo1m" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>
</section>
<hr>
<section class="m-3">
    <h4 class="mb-2">Latest Camera</h4>
    <div id="demo1c" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card-deck">
                <?php
                $qu=mysqli_query($conn,"select * from productdetails where category='camera'  order by id desc  limit 0,5");

                while($q=mysqli_fetch_assoc($qu)){
                ?>
                    <div class="card">
                        <div class="card-img">
                            <img class="card-img-top" src="<?php echo "images/".$q['category']."/".$q['image1'];?>" alt="Card image">
                        </div>
                        <div class="card-body pt-2">
                            <div class="card-title-outer">
                                <p class="card-title my-1" title="<?php echo $q['title'];?>"><?php echo $q['title'];?>
                                </p>
                                <span style="background-color:white;color:#49b0c1;position:absolute;bottom:0;right:0;padding-left:10px;">...</span>
                                
                            </div>
                            <h6 class="card-text p-0 my-1"><?php echo $q['category'];?></h6>
                            <h5 class="card-price p-0 m-0 mb-2"> &#8377; <?php echo $q['newPrice'];?> <strike class="text-danger"><small class="text-secondary"> &#8377; <?php echo $q['oldPrice'];?></small></strike> </h5>
                            
                            <a href="<?php echo 'single-product.php?category=camera&id='.$q['id']; ?>" class="btn btn-primary px-5">View</a>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
            
            <div class="carousel-item">
                <div class="card-deck">
                <?php 
                $cu=mysqli_query($conn,"select count(*) as count from productdetails where category='camera'");
                $count=mysqli_fetch_assoc($cu)['count'];
                
                $qu=mysqli_query($conn,"select * from productdetails where category='camera'  order by id desc  limit 5,5");

                while($q=mysqli_fetch_assoc($qu)){
            ?>
                    <div class="card">
                        <div class="card-img">
                            <img class="card-img-top" src="<?php echo "images/".$q['category']."/".$q['image1'];?>" alt="Card image">
                        </div>
                        <div class="card-body pt-2">
                            <h6 class="card-title my-1"><?php echo $q['title'];?></h6>
                            <p class="card-text p-0 my-1"><?php echo $q['category'];?></p>
                            <h5 class="card-title p-0 m-0 mb-2"> &#8377; <?php echo $q['newPrice'];?> <strike class="text-danger"><small class="text-secondary"> &#8377; <?php echo $q['oldPrice'];?></small></strike> </h5>
                            <a href="<?php echo 'single-product.php?category=camera&id='.$q['id']; ?>" class="btn btn-primary px-5">View</a>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
            
        </div>
        <a class="carousel-control-prev" href="#demo1c" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo1c" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>
</section>
<hr>
<section class="m-3">
    <h4 class="mb-2">Latest Smart Watches</h4>
    <div id="demo1w" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card-deck">
                <?php
                $qu=mysqli_query($conn,"select * from productdetails where category='watches'  order by id desc  limit 0,5");

                while($q=mysqli_fetch_assoc($qu)){
                ?>
                    <div class="card">
                        <div class="card-img">
                            <img class="card-img-top" src="<?php echo "images/".$q['category']."/".$q['image1'];?>" alt="Card image">
                        </div>
                        <div class="card-body pt-2">
                            <div class="card-title-outer">
                                <p class="card-title my-1" title="<?php echo $q['title'];?>"><?php echo $q['title'];?>
                                </p>
                                <span style="background-color:white;color:#49b0c1;position:absolute;bottom:0;right:0;padding-left:10px;">...</span>
                                
                            </div>
                            <h6 class="card-text p-0 my-1"><?php echo $q['category'];?></h6>
                            <h5 class="card-price p-0 m-0 mb-2"> &#8377; <?php echo $q['newPrice'];?> <strike class="text-danger"><small class="text-secondary"> &#8377; <?php echo $q['oldPrice'];?></small></strike> </h5>
                            <a href="<?php echo 'single-product.php?id='.$q['id']; ?>" class="btn btn-primary px-5">View</a>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
            <?php
            $cu=mysqli_query($conn,"select count(*) as count from productdetails where category='watches'");
                        $count=mysqli_fetch_assoc($cu)['count'];
                    
                 if($count>5){
                 ?>
            <div class="carousel-item">
                <div class="card-deck">
                    <?php 
                        $qu=mysqli_query($conn,"select * from productdetails where category='watches' order by id desc limit 5,5");

                        while($q=mysqli_fetch_assoc($qu)){
                           
                    ?>
                    <div class="card">
                        <div class="card-img">
                            <img class="card-img-top" src="<?php echo "images/".$q['category']."/".$q['image1'];?>" alt="Card image">
                        </div>
                        <div class="card-body pt-2">
                            <div class="card-title-outer">
                                <p class="card-title my-1" title="<?php echo $q['title'];?>"><?php echo $q['title'];?>
                                </p>
                                <span style="background-color:white;color:#49b0c1;position:absolute;bottom:0;right:0;padding-left:10px;">...</span>
                                
                            </div>
                            <h6 class="card-text p-0 my-1"><?php echo $q['category'];?></h6>
                            <h5 class="card-price p-0 m-0 mb-2"> &#8377; <?php echo $q['newPrice'];?> <strike class="text-danger"><small class="text-secondary"> &#8377; <?php echo $q['oldPrice'];?></small></strike> </h5>
                            <a href="<?php echo 'single-product.php?id='.$q['id']; ?>" class="btn btn-primary px-5">View</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
        <?php } ?>

    </div>
    <a class="carousel-control-prev" href="#demo1w" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo1w" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
</section>
<hr>



<?php
    include 'footer.php';
?>