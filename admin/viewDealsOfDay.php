<?php require '../conn.inc.php'; ?>

<?php include 'header.php';?>
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
<div class="container my-3">
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
    <?php include 'footer.php';?>