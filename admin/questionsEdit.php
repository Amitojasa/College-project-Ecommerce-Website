<?php require '../conn.inc.php'; ?>

<?php include 'header.php';?>
<script>
    function show(id){
        if(document.getElementById(id).style.display=='block'){
            document.getElementById(id).style.display='none';
        }else{
            document.getElementById(id).style.display='block'
        }
    }

</script>
<?php 
    $cat="%";
    $search="%";
?>
<div class="container my-3">
                <?php   
                    if(isset($_POST['quesSubmit'])){
                        $ans=mysql_real_escape_string($_POST['text']);
                        $date= date("Y-m-d");
                        $id=$_POST['id'];
                        mysqli_query($conn,"update qatb set `answer`='$ans',`date`='$date',`answerStatus`=1 where id=$id") or die(mysqli_error($conn));
                    }
                ?>
                <div class="qas">
                    <?php 
                        if(isset($_POST['submit'])){
                            $cat=$_POST['category'];
                            $search=mysqli_real_escape_string($conn,$_POST['search']);
                        }
                    ?>
                   
                    <form method="post">
                    <div class="row">
                        <div class="col-sm-5">
                            <select name="category" id="cat" class="form-control" placeholder="select a category">
                                <option value="%" <?php if($cat=='%')echo "selected";?>>all</option>
                                <option value="laptop" <?php if($cat=='laptop')echo "selected";?>>laptop</option>
                                <option value="mobile" <?php if($cat=='mobile')echo "selected";?>>mobile</option>
                                <option value="camera" <?php if($cat=='camera')echo "selected";?>>camera</option>
                                <option value="watches" <?php if($cat=='watches')echo "selected";?>>Smart Watches</option>
                                
                            </select>
                        </div>
                    
                        <div class="input-group mb-3 input-group col-6">
                            <input type="text" placeholder="search" class="form-control" name="search">
                            <div class="input-group-append">
                            <span class="input-group-text fa fa-search"></span>
                            </div>
                        </div>
                        <div class="col-1">
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button></div>
                    </form>
                    </div>
                    <?php

                        $qu=mysqli_query($conn,"SELECT b.*, a.category FROM qatb AS b INNER JOIN productdetails as A ON (b.productid=a.id) where a.category like '$cat' and b.answerStatus=1 and b.question like '%$search%'") or die(mysqli_error($conn));
                        while($qe=mysqli_fetch_assoc($qu)){
                            $pid=$qe['productId'];
                            $qpc=mysqli_query($conn,"select category from productdetails where id=$pid") or die(mysqli_error($conn));
                            $cat=mysqli_fetch_assoc($qpc)['category'];
                    ?>
                    <div class="card">
                        <div class="card-header py-1 font-weight-bold">Q. <?php echo $qe['question'];?> <button class="btn btn-warning pull-right" onclick='show(<?php echo $qe['id'];?>);'>Edit</button><a href="../single-product.php?category=<?php echo $cat;?>&id=<?php echo $qe['productId'];?>" class="btn btn-info pull-right mx-1" target="_blank">View Product</a></div>
                        <div class="card-body py-1 " id="<?php echo $qe['id'];?>"> 
                            <form method="POST">
                            <div class="form-group">
                            <label for="review">Answer:</label>
                            <textarea class="form-control bg-light" rows="2" id="comment" name="text" placeholder="Answer"><?php echo $qe['answer'];?></textarea>
                            </div>
                            <input type="text" name="id" value="<?php echo $qe['id'];?>" style="display:none;">
                            <button type="submit" class="btn btn-warning p-2" name="quesSubmit">Submit answer</button>
                            
                        </form>
                        </div>
                        <!-- <button class="btn btn-warning">Answer</button> -->
                    </div>
                    <?php } ?>
            </div>
    </div>
<?php include 'footer.php';?>