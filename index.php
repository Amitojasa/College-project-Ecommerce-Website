<?php 
include 'header.php';
?>
<link rel="stylesheet" href="css/home.css">
<section>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" alt="New York">
    </div>
    <div class="carousel-item">
      <img src="images/4.jpg" alt="New York">
  </div>
  
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
                for($c=0;$c<count($l)%5;$c++){
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
                            <a href="#" class="btn btn-primary px-5">View</a>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
            <?php if(count($l)>5){?>
            <div class="carousel-item">
                <div class="card-deck">
                <?php
                for($c=5;$c<count($l);$c++){
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
                            <a href="#" class="btn btn-primary px-5">View</a>
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
    <div id="demo1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card-deck">
                <?php
                $qu=mysqli_query($conn,"select * from productdetails where category='laptop'  order by id desc  limit 1,5");

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
                            <a href="#" class="btn btn-primary px-5">View</a>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
            <?php 
                $qu=mysqli_query($conn,"select * from productdetails where category='laptop'  order by id desc  limit 6,5");

                while($q=mysqli_fetch_assoc($qu)){
            ?>
            <div class="carousel-item">
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo "images/".$q['category']."/".$q['image1'];?>" alt="Card image">
                        <div class="card-body pt-2">
                            <h6 class="card-title my-1"><?php echo $q['title'];?></h6>
                            <p class="card-text p-0 my-1"><?php echo $q['category'];?></p>
                            <h5 class="card-title p-0 m-0 mb-2"> &#8377; <?php echo $q['newPrice'];?> <strike class="text-danger"><small class="text-secondary"> &#8377; <?php echo $q['oldPrice'];?></small></strike> </h5>
                            <a href="#" class="btn btn-primary px-5">View</a>
                        </div>
                    </div>
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
    <h4 class="mb-2">Latest Mobiles</h4>
    <div id="demo1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card-deck">
                <?php
                $qu=mysqli_query($conn,"select * from productdetails where category='mobile'  order by id desc  limit 1,5");

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
                            <a href="#" class="btn btn-primary px-5">View</a>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
            <?php 
                $qu=mysqli_query($conn,"select * from productdetails where category='mobile'  order by id desc  limit 6,5");

                while($q=mysqli_fetch_assoc($qu)){
            ?>
            <div class="carousel-item">
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo "images/".$q['category']."/".$q['image1'];?>" alt="Card image">
                        <div class="card-body pt-2">
                            <h6 class="card-title my-1"><?php echo $q['title'];?></h6>
                            <p class="card-text p-0 my-1"><?php echo $q['category'];?></p>
                            <h5 class="card-title p-0 m-0 mb-2"> &#8377; <?php echo $q['newPrice'];?> <strike class="text-danger"><small class="text-secondary"> &#8377; <?php echo $q['oldPrice'];?></small></strike> </h5>
                            <a href="#" class="btn btn-primary px-5">View</a>
                        </div>
                    </div>
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
    <h4 class="mb-2">Latest Camera</h4>
    <div id="demo1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card-deck">
                <?php
                $qu=mysqli_query($conn,"select * from productdetails where category='camera'  order by id desc  limit 1,5");

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
                            <a href="#" class="btn btn-primary px-5">View</a>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
            <?php 
                $qu=mysqli_query($conn,"select * from productdetails where category='camera'  order by id desc  limit 6,5");

                while($q=mysqli_fetch_assoc($qu)){
            ?>
            <div class="carousel-item">
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo "images/".$q['category']."/".$q['image1'];?>" alt="Card image">
                        <div class="card-body pt-2">
                            <h6 class="card-title my-1"><?php echo $q['title'];?></h6>
                            <p class="card-text p-0 my-1"><?php echo $q['category'];?></p>
                            <h5 class="card-title p-0 m-0 mb-2"> &#8377; <?php echo $q['newPrice'];?> <strike class="text-danger"><small class="text-secondary"> &#8377; <?php echo $q['oldPrice'];?></small></strike> </h5>
                            <a href="#" class="btn btn-primary px-5">View</a>
                        </div>
                    </div>
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
    <h4 class="mb-2">Latest Smart Watches</h4>
    <div id="demo1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card-deck">
                <?php
                $qu=mysqli_query($conn,"select * from productdetails where category='watches'  order by id desc  limit 1,5");

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
                            <a href="#" class="btn btn-primary px-5">View</a>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
            <?php 
                $qu=mysqli_query($conn,"select * from productdetails where category='watches'  order by id desc  limit 6,5");

                while($q=mysqli_fetch_assoc($qu)){
            ?>
            <div class="carousel-item">
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo "images/".$q['category']."/".$q['image1'];?>" alt="Card image">
                        <div class="card-body pt-2">
                            <h6 class="card-title my-1"><?php echo $q['title'];?></h6>
                            <p class="card-text p-0 my-1"><?php echo $q['category'];?></p>
                            <h5 class="card-title p-0 m-0 mb-2"> &#8377; <?php echo $q['newPrice'];?> <strike class="text-danger"><small class="text-secondary"> &#8377; <?php echo $q['oldPrice'];?></small></strike> </h5>
                            <a href="#" class="btn btn-primary px-5">View</a>
                        </div>
                    </div>
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
    <h4 class="mb-2">Latest Other</h4>
    <div id="demo1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card-deck">
                <?php
                $qu=mysqli_query($conn,"select * from productdetails where category='other'  order by id desc  limit 1,5");

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
                            <a href="#" class="btn btn-primary px-5">View</a>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
            <?php 
                $qu=mysqli_query($conn,"select * from productdetails where category='other'  order by id desc  limit 6,5");

                while($q=mysqli_fetch_assoc($qu)){
            ?>
            <div class="carousel-item">
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo "images/".$q['category']."/".$q['image1'];?>" alt="Card image">
                        <div class="card-body pt-2">
                            <h6 class="card-title my-1"><?php echo $q['title'];?></h6>
                            <p class="card-text p-0 my-1"><?php echo $q['category'];?></p>
                            <h5 class="card-title p-0 m-0 mb-2"> &#8377; <?php echo $q['newPrice'];?> <strike class="text-danger"><small class="text-secondary"> &#8377; <?php echo $q['oldPrice'];?></small></strike> </h5>
                            <a href="#" class="btn btn-primary px-5">View</a>
                        </div>
                    </div>
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

<?php
    include 'footer.php';
?>