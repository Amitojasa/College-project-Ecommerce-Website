<?php include 'header.php'; ?>

<?php
    $cat='%';
?>
<section class="comparision container-fluid  my-2">
    <form method="post">

        <select name="category" id="cat" class="form-control" placeholder="select a category">
            <option value="laptop" <?php if($cat=='laptop')echo "selected";?>>laptop</option>
            <option value="mobile" <?php if($cat=='mobile')echo "selected";?>>mobile</option>
            <option value="camera" <?php if($cat=='camera')echo "selected";?>>camera</option>
            <option value="watches" <?php if($cat=='watches')echo "selected";?>>Smart Watches</option>
            <option value="other" <?php if($cat=='other')echo "selected";?>>Other</option>
        </select>
        <br>

        <div class="row">
            <div class="col-6">
                <select name="prod1" id="prod1" class="form-control" placeholder="select a product">
                    <?php 
                        $cat=echo "<script>document.getElementById('cat').value</script>";
                        $qp1=mysqli_query($conn,"select compare from userdetailstb where id=$uid");
                        $qp1=mysqli_fetch_assoc($qp1)['compare'];
                        $ar=json_decode($qp1);
                        foreach($ar as $p){
                            $qp1=mysqli_query($conn,"select * from productdetails where id=$p");
                    ?>
                    <option value="<?php echo $p;?>">all</option>
                </select>
            </div>
            <div class="col-6">
                <select name="category" id="cat" class="form-control" placeholder="select a category">
                    <option value="%" <?php if($cat=='%')echo "selected";?>>all</option>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>

    <div class="comparison-results">
        <div class="row">
            <div class="col-6">
                <?php 
                    $selectQuery="select * from productdetails where category = '$cat' and id=$id";

                        $qu = mysqli_query($conn,$selectQuery) or die(mysqli_error($conn));
                        $q=mysqli_fetch_assoc($qu);
                ?>
                <img class="img-fluid align-self-center" src="<?php echo "images/".$q['category']."/".$q['image1'];?>" alt="Los Angeles" >
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
                        <table class="table" cellspacing="0" cellpadding="0" border="0">
                            <tbody>
                                <?php foreach($detailsArray as $i=>$j){?>
                                <tr><td class="bg-light px-2"><?php echo $i;?></td><td class="value px-2"><?php echo $j;?></td></tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </section>

            </div>
            <div class="col-6">
                <?php 
                
                    $selectQuery="select * from productdetails where category = '$cat' and id=$id";

                    $qu = mysqli_query($conn,$selectQuery) or die(mysqli_error($conn));
                    $q=mysqli_fetch_assoc($qu);
                ?>
                <img class="img-fluid align-self-center" src="<?php echo "images/".$q['category']."/".$q['image1'];?>" alt="Los Angeles" >
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
                            <table class="table" cellspacing="0" cellpadding="0" border="0">
                                <tbody>
                                    <?php foreach($detailsArray as $i=>$j){?>
                                    <tr><td class="bg-light px-2"><?php echo $i;?></td><td class="value px-2"><?php echo $j;?></td></tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </section>
            </div>
        </div>
    </div>

</section>





<?php include 'footer.php'; ?>