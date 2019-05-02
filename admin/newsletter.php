<?php require '../conn.inc.php'; ?>

<?php include 'header.php';?>

<div class="container my-3" style="height:70vh;">
<h3>Newsletter Emails</h3>
          <?php
            $qu=mysqli_query($conn,"select * from newsletter");
            $ss="";
            while($q=mysqli_fetch_assoc($qu)){
                $ss.=" ,".$q['email'];
            }
            $ss=substr($ss,2)
          ?>      
    
    <div class="m-5">
            <p>
                <?php echo $ss;?>
            </p>
    </div>
    </div>
    <?php include 'footer.php';?>
