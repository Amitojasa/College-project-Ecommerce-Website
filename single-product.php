<?php include 'header.php'; ?>
<?php include 'conn.inc.php'; ?>
<?php 
    $cat=@$_GET['category'];
    $id=@$_GET['id'];
?>
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
            <div class="operations m-3 p-3 d-flex justify-content-center row">
                <button class="btn btn-primary text-white p-3 col-sm-5"><b>Buy Now</b></button>
                <button class="btn btn-warning text-white p-3 col-sm-5"><b>Add to Cart</b></button>

            </div>
        </div>
        <div class="right col-sm-7">
            <div class="card border-0">
                <div class="card-body">
                    <div class="title">
                        <h5><?php echo $q['title']; ?></h5>
                    </div>
                    <div class="rating text-secondary my-2 bold">
                            <span class="badge badge-primary">4.4 <li class="fa fa-star"></li></span> 100 Ratings | 107 reviews
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
                            <b><label for="sel1">Quantity:</label></b>
                            <?php $quant=$q['stock']%4;?>
                            <select class="form-control" id="sel1" <?php if($q['stock']==0){echo "disabled";}?> >
                                <?php 
                                if($q['stock']>0){
                                for($i=0;$i<=$quant;$i++){?>
                                <option><?php echo $i+1; ?></option>
                                <?php }} ?>
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
    <div class="card-deck">
    <div class="card">
    
        <img class="card-img-top" src="images/test.jpeg" alt="Card image">
        <div class="card-body pt-2">
            <h5 class="card-title my-1">Lenovo Ideapad </h5>
            <p class="card-text p-0 my-1">Lenovo Ideapad 330 Core</p>
            <h5 class="card-title p-0 m-0 mb-2"> &#8377; 49500 <strike class="text-danger"><small class="text-secondary"> &#8377; 60000</small></strike> </h5>
            <a href="#" class="btn btn-primary px-5">View</a>
        </div>
    </div>
    <div class="card">
    
        <img class="card-img-top" src="images/test.jpeg" alt="Card image">
        <div class="card-body pt-2">
            <h5 class="card-title my-1">Lenovo Ideapad </h5>
            <p class="card-text p-0 my-1">Lenovo Ideapad 330 Core</p>
            <h5 class="card-title p-0 m-0 mb-2"> &#8377; 49500 <strike class="text-danger"><small class="text-secondary"> &#8377; 60000</small></strike> </h5>
            <a href="#" class="btn btn-primary px-5">View</a>
        </div>
    </div>
    <div class="card">
    
        <img class="card-img-top" src="images/test.jpeg" alt="Card image">
        <div class="card-body pt-2">
            <h5 class="card-title my-1">Lenovo Ideapad </h5>
            <p class="card-text p-0 my-1">Lenovo Ideapad 330 Core</p>
            <h5 class="card-title p-0 m-0 mb-2"> &#8377; 49500 <strike class="text-danger"><small class="text-secondary"> &#8377; 60000</small></strike> </h5>
            <a href="#" class="btn btn-primary px-5">View</a>
        </div>
    </div>
    <div class="card">
    
        <img class="card-img-top" src="images/test.jpeg" alt="Card image">
        <div class="card-body pt-2">
            <h5 class="card-title my-1">Lenovo Ideapad </h5>
            <p class="card-text p-0 my-1">Lenovo Ideapad 330 Core</p>
            <h5 class="card-title p-0 m-0 mb-2"> &#8377; 49500 <strike class="text-danger"><small class="text-secondary"> &#8377; 60000</small></strike> </h5>
            <a href="#" class="btn btn-primary px-5">View</a>
        </div>
    </div>
    <div class="card">
    
        <img class="card-img-top" src="images/test.jpeg" alt="Card image">
        <div class="card-body pt-2">
            <h5 class="card-title my-1">Lenovo Ideapad </h5>
            <p class="card-text p-0 my-1">Lenovo Ideapad 330 Core</p>
            <h5 class="card-title p-0 m-0 mb-2"> &#8377; 49500 <strike class="text-danger"><small class="text-secondary"> &#8377; 60000</small></strike> </h5>
            <a href="#" class="btn btn-primary px-5">View</a>
        </div>
    </div>
</section>

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
    <div class="qa mb-4 bg-dark  text-light p-3 rounded">
                <form action="/action_page.php">
                    <div class="form-group">
                    <label for="review">Ask a Question:</label>
                    <textarea class="form-control bg-light" rows="2" id="comment" maxlength="200" name="text" placeholder="Ask a question"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-warning p-2">Submit Question</button>
                    
                </form>
                </div>
    <div class="card">
            <div class="card-header py-1 font-weight-bold">Q. Can you please explain me it's graphic card fesility?</div>
            <div class="card-body py-1">Very good </div>
            <div class="card-footer bg-white p-1 text-secondary border-0 text-right">-By seller on 5th Feb 2019</div>
        </div>
        <div class="card">
            <div class="card-header py-1 font-weight-bold">Q. Can you please explain me it's graphic card fesility?</div>
            <div class="card-body py-1">Very good </div>
            <div class="card-footer bg-white p-1 text-secondary border-0 text-right">-By seller on 5th Feb 2019</div>
        </div>
        <div class="card">
            <div class="card-header py-1 font-weight-bold">Q. Can you please explain me it's graphic card fesility?</div>
            <div class="card-body py-1"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit aperiam architecto voluptas recusandae alias doloremque ipsam ea blanditiis provident maxime.  </div>
            <div class="card-footer bg-white p-1 text-secondary border-0 text-right">-By seller on 5th Feb 2019</div>
        </div>

        <a href="">See more answered questions</a>
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
                <div class="review mb-4 bg-dark  text-light p-3 rounded">
                <form action="/action_page.php">
                    <div class="form-group">
                    <label for="review">Write a Review:</label>
                    <textarea class="form-control bg-light" rows="5" id="comment" maxlength="200" name="text" placeholder="Write a review (max length 200 characters.)"></textarea>
                    </div>
                    <div class="down d-flex justify-content-between align-items-center">
                    <div class="form-group">
                            <label for="star-rating">Rate the product:</label>

                            <div id="stars-existing" class="starrr text-warning" data-rating='4'></div>  
                    </div>
                    <script src="js/star-rating.js"></script>
                        <button type="submit" class="btn btn-warning p-2">Submit Review</button>
                    </div>
                </form>
                </div>
                <h5>Reviews <small class="text-secondary">20 Reviews</small></h5>
                <div class="review mb-2">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between"><b>UserName</b>
                            <span class="stars"><li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star-o"></li>
                            </span>
                            <small class="text-muted">5th Feb 2019</small>
                        </div>
                        <div class="card-body">As per the description its mentioend windown pre install but when i try to open the Microsoft excel its asking for product key, how we can get</div>
                    </div>
                </div>
                <div class="review mb-2">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between"><b>UserName</b>
                            <span class="stars"><li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star-o"></li>
                            </span>
                            <small class="text-muted">5th Feb 2019</small>
                        </div>
                        <div class="card-body">As per the description its mentioend windown pre install but when i try to open the Microsoft excel its asking for product key, how we can get</div>
                    </div>
                </div>  
                <div class="review mb-2">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between"><b>UserName</b>
                            <span class="stars"><li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star-o"></li>
                            </span>
                            <small class="text-muted">5th Feb 2019</small>
                        </div>
                        <div class="card-body">As per the description its mentioend windown pre install but when i try to open the Microsoft excel its asking for product key, how we can get</div>
                    </div>
                </div>  
                <div class="review mb-2">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between"><b>UserName</b>
                            <span class="stars"><li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star-o"></li>
                            </span>
                            <small class="text-muted">5th Feb 2019</small>
                        </div>
                        <div class="card-body">As per the description its mentioend windown pre install but when i try to open the Microsoft excel its asking for product key, how we can get</div>
                    </div>
                </div>  
                <div class="review mb-2">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between"><b>UserName</b>
                            <span class="stars"><li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star-o"></li>
                            </span>
                            <small class="text-muted">5th Feb 2019</small>
                        </div>
                        <div class="card-body">As per the description its mentioend windown pre install but when i try to open the Microsoft excel its asking for product key, how we can get</div>
                    </div>
                </div>  
                <br>
                <a href="#"> More Reviews</a>


        </div>
        <div class="overall-rating mt-4">
            <h5>Overall Rating of Product</h5>
            <div class="card bg-dark">
                <div class="card-body text-center">
                    <span class="stars text-warning"><li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star-o"></li>
                    </span>
                </div>
            </div>
        </div>
    </div>
     </div>
</section>
</div>
<?php include 'footer.php'; ?>