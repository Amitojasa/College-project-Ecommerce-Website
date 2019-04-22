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
                        $qu=mysqli_query($conn,"select * from qatb where answerStatus=0") or die(mysqli_error($conn));
                        while($qe=mysqli_fetch_assoc($qu)){
                            $pid=$qe['productId'];
                            $qpc=mysqli_query($conn,"select category from productdetails where id=$pid") or die(mysqli_error($conn));
                            $cat=mysqli_fetch_assoc($qpc)['category'];
                    ?>
                    <div class="card">
                        <div class="card-header py-1 font-weight-bold">Q. <?php echo $qe['question'];?> <button class="btn btn-warning pull-right" onclick='show(<?php echo $qe['id'];?>);'>Answer</button><a href="../single-product.php?category=<?php echo $cat;?>&id=<?php echo $qe['productId'];?>" class="btn btn-info pull-right mx-1" target="_blank">View Product</a></div>
                        <div class="card-body py-1 " id="<?php echo $qe['id'];?>"> 
                            <form method="POST">
                            <div class="form-group">
                            <label for="review">Answer:</label>
                            <textarea class="form-control bg-light" rows="2" id="comment" name="text" placeholder="Answer"></textarea>
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
