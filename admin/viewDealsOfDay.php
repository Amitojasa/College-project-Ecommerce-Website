<?php require '../conn.inc.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="custom.css">
    <title>Document</title>
</head>
<body>
<script>
      function remove (id,category) {

          $.ajax({
            url:"addToDeals.php?id="+id, //the page containing php script
            type: "POST", //request type
            success:function(result){
                $('#results').load('viewDealsOfDay.php #results');
           }
         });
        
     }
     </script>
<div class="container">
<h2>Deals Of Day List Edit:</h2>

    <section class="results border" >
        <div id="results">
            <?php
                $q=mysqli_query($conn,"select dealsOfDay from custom");
                $l=json_decode(mysqli_fetch_assoc($q)['dealsOfDay']);
                foreach($l as $i){
                    $qu = mysqli_query($conn,"Select * from productdetails where id='$i'") or die(mysqli_error($conn));
                    $q=mysqli_fetch_assoc($qu);
                    ?>

                    <div class="row px-3 py-2 disprow">
                        <div class="col-md-3 img text-center">
                            <img src="<?php echo "../images/".$q['category']."/".$q['image1'];?>" alt="GadgetsPick" class="img-fluid">
                        </div>
                        <div class="col-md-5 text title text-center"><?php echo $q['title'];?></div>
                        <div class="col-md-2 price text-center"><?php echo $q['newPrice'];?></div>
                        <div class="col-md-2 text-center">
                            <button  onclick='<?php echo 'remove('.$q['id'].',"'.$q['category'].'")';?>' class="btn btn-danger">Remove from List</a>
                        </div>
                    </div>

                    <?php
                }
        ?>

        </div>
    </section>
    </div>
</body>
</html>