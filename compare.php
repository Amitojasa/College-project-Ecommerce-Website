<?php include 'header.php'; ?>
<link rel="stylesheet" href="css/compare.css">
<?php
    $cat='%';
?>

<script>

    function categoryselect(){
        document.cookie = "cat="+document.getElementById('cat').value;
        location.reload();

    }
    function prod1select(){
        
        document.cookie = "prod1="+document.getElementById('prod1').value; 
        location.reload();
    }


    function prod2select(){
        
        document.cookie = "prod2="+document.getElementById('prod2').value; 
        location.reload();
    }

</script>
<section class="comparision container-fluid my-3">

    <p><strong>Note:</strong> You must be logged in and select the add some products to your compare list by clicking on compare button on the product's respective page.</p>
    <form method="post">

        <select name="category" id="cat" class="form-control" placeholder="select a category" onchange="categoryselect()">
            <?php $cat=$_COOKIE['cat'];?>
            <option value="%" <?php if($cat=='%')echo "selected";?>>Select category</option>
            <option value="laptop" <?php if($cat=='laptop')echo "selected";?>>laptop</option>
            <option value="mobile" <?php if($cat=='mobile')echo "selected";?>>mobile</option>
            <option value="camera" <?php if($cat=='camera')echo "selected";?>>camera</option>
            <option value="watches" <?php if($cat=='watches')echo "selected";?>>Smart Watches</option>
            
        </select>
        <br>
       
        <div class="row">
            <div class="col-6"> 
                <select name="prod1" id="prod1" class="form-control" placeholder="select a product" onchange="prod1select()">
                <option value=""><?php echo "Select a Product";?></option>
                    <?php 
                        $cat=$_COOKIE['cat'];
                        $qp1=mysqli_query($conn,"select compare from userdetailstb where id=$uid");
                        $qp1=mysqli_fetch_assoc($qp1)['compare'];
                        $ar=json_decode($qp1);
                        foreach($ar as $p){
                            $qp1=mysqli_query($conn,"select * from productdetails where id=$p and category='$cat'");
                            $qp1=mysqli_fetch_assoc($qp1);
                            if($qp1['category']!=$cat){
                                continue;
                            }
                    ?>
                    <option value="<?php echo $p;?>"><?php echo $qp1['title'];?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-6">
                <select name="prod2" id="prod2" class="form-control" placeholder="select a category" onchange="prod2select()">
                <option value=""><?php echo "Select a Product";?></option>
                    <?php 
                        $cat=$_COOKIE['cat'];
                        $qp2=mysqli_query($conn,"select compare from userdetailstb where id=$uid");
                        $qp2=mysqli_fetch_assoc($qp2)['compare'];
                        $ar=json_decode($qp2);
                        foreach($ar as $p){
                            $qp2=mysqli_query($conn,"select * from productdetails where id=$p and category='$cat'");
                            $qp2=mysqli_fetch_assoc($qp2);
                            if($qp2['category']!=$cat){
                                continue;
                            }
                    ?>
                    <option value="<?php echo $p;?>"><?php echo $qp2['title'];?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
    </form>

    <div class="comparison-results">
        <div class="row">
            <div class="col-6" id="prod1result">
                

                <?php 
                if(isset($_COOKIE['prod1']) && ($_COOKIE['prod1']!="")){
                    $id=$_COOKIE['prod1'];
                
                    $selectQuery="select * from productdetails where category = '$cat' and id=$id";

                        $qu = mysqli_query($conn,$selectQuery);
                        $q=mysqli_fetch_assoc($qu);
                ?>
                <div class="image">
                <img class="img-fluid align-self-center" src="<?php echo "images/".$q['category']."/".$q['image1'];?>" alt="Los Angeles" ></div>
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
                            
                    </div><br>
                    <section class="details row" id="details">
                            <?php $features=(explode(";",$q['details']));
                                $detailsArray = array();
                                foreach($features as $i){

                                    $f=(explode(":",$i));
                                                        
                                    $detailsArray[$f[0]] = @$f[1];
                                    }
                            ?>
                                <div class="secHeader mb-3">
                                    <h5>Product Details</h5>
                                </div>
                        <table class="table col-11" cellspacing="0" cellpadding="0" border="0">
                            <tbody>
                                <?php foreach($detailsArray as $i=>$j){?>
                                <tr><td class="bg-light px-2"><?php echo $i;?></td><td class="value px-2"><?php echo $j;?></td></tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </section>
                    <?php }
                        else{
                            echo "Please select the product.";
                    }?>                       
            </div>
            <div class="col-6" id="prod2result">
                <?php 
                    if(isset($_COOKIE['prod2']) && ($_COOKIE['prod2']!="")){
                        $id=$_COOKIE['prod2'];
                        $selectQuery="select * from productdetails where category = '$cat' and id=$id";

                        $qu = mysqli_query($conn,$selectQuery) or die(mysqli_error($conn));
                        $q=mysqli_fetch_assoc($qu);
                ?>
                <div class="image">
                <img class="img-fluid align-self-center" src="<?php echo "images/".$q['category']."/".$q['image1'];?>" alt="Los Angeles" >
                </div>
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
                                
                        </div><br>
                        <section class="details row" id="details">
                                <?php $features=(explode(";",$q['details']));
                                    $detailsArray = array();
                                    foreach($features as $i){

                                        $f=(explode(":",$i));
                                                            
                                        $detailsArray[$f[0]] = @$f[1];
                                        }
                                ?>
                                    <div class="secHeader mb-3">
                                        <h5>Product Details</h5>
                                    </div>
                            <table class="table col-11" cellspacing="0" cellpadding="0" border="0">
                                <tbody>
                                    <?php foreach($detailsArray as $i=>$j){?>
                                    <tr><td class="bg-light px-2"><?php echo $i;?></td><td class="value px-2"><?php echo $j;?></td></tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </section>
                    <?php }
                        else{
                            echo "Please select the product.";
                        }
                    ?>
                    
            </div>
        </div>
    </div>

</section>





<?php include 'footer.php'; ?>