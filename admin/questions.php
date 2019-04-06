<?php require '../conn.inc.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="custom.css">
    <title>questions</title>
</head>
<script>
    function show(id){
        if(document.getElementById(id).style.display=='block'){
            document.getElementById(id).style.display='none';
        }else{
            document.getElementById(id).style.display='block'
        }
    }

</script>
<body class="container">
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
                    ?>
                    <div class="card">
                        <div class="card-header py-1 font-weight-bold">Q. <?php echo $qe['question'];?> <button class="btn btn-warning pull-right" onclick='show(<?php echo $qe['id'];?>);'>Answer</button></div>
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
</body>
</html>
