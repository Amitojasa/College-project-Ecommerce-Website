
<?php include '../conn.inc.php'; ?>
<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<?php include 'header.php'; ?>
<script>
function dispatched (id){
       $.ajax({
            url:"dispatched.php?id="+id, //the page containing php script
            type: "POST", //request type
            success:function(result){
                alert("Product has been dispatched");
                window.location="newOrders.php";
           }
         });
    }
</script>
<?php 
    $ido=@$_GET['id'];
    $ord=mysqli_query($conn,"select * from transactions where id='$ido'") or die(mysqli_error($conn));
    $ordi=mysqli_fetch_assoc($ord);
    $uid=$ordi['uid'];
    $user=mysqli_query($conn,"select * from userdetailstb where id='$uid'") or die(mysqli_error($conn));
    $user=mysqli_fetch_assoc($user);
?>

<link rel="stylesheet" href="../css/buyNowCart.css">
    <div class="container-fluid my-3">
                <?php 
                    $t=0;
                    $cart=(json_decode($ordi['products'],TRUE));
                    foreach($cart as $i => $value){       
                    $selectQuery="select * from productdetails where id=$i";

                    $qu = mysqli_query($conn,$selectQuery) or die(mysqli_error($conn));
                    $q=mysqli_fetch_assoc($qu);  
                    $t=$t+($q['newPrice']*$value);
                ?>
    <div class="row">
        <div class="left col-sm-4">
            <div class="slideshow">
                <div class="card border-0">
                
                

                    <div class="card-body p-3 m-2">
                    <div id="demo" class="demo carousel slide" data-ride="carousel">
                            <?php if(!empty($q['image1'])){
                                $im=1;
                                ?>
                                <div class="main-imgs active text-center">
                                    <img class="img-fluid" src="<?php echo "../images/".$q['category']."/".$q['image1'];?>" alt="Los Angeles" >
                                </div>
                            <?php } ?>
                            <?php if(!empty($q['image2']) && $im!=1){ ?>
                                <div class="main-imgs  text-center">
                                    <img class="img-fluid align-self-center" src="<?php echo "../images/".$q['category']."/".$q['image2'];?>" alt="Los Angeles">
                                </div>
                            <?php } ?>
                            <?php if(!empty($q['image3']) && $im!=1){ ?>
                                <div class="main-imgs text-center">
                                    <img class="img-fluid align-self-center" src="<?php echo "../images/".$q['category']."/".$q['image3'];?>" alt="Los Angeles" >
                                </div>
                            <?php } ?>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="right col-sm-7">
            <div class="card border-0">
                <div class="card-body">
                    <div class="title">
                        <h5><?php echo $q['title']; ?></h5>
                    </div>
                    <div class="price">
                            <h6 class="text-dark"><span class="text-secondary">Our-Price: </span>&#8377; <?php echo $q['newPrice']; ?></h6>                           
                    </div>
                    <div class="quantity">
                            <h6 class="text-dark"><span class="text-secondary">Quantity: </span><?php echo $value; ?></h6>                           
                    </div>
                    <br>
                    <div class="total-price">
                            <h6 class="text-dark"><span class="text-secondary">Total: </span>&#8377; <?php echo $q['newPrice']*$value; ?></h6>                           
                    </div>
                </div>
            </div>
        </div>
        </div>
    <?php } ?>
    </div>
  
    <h4 class="text-dark mx-4"><span class="text-secondary">Total: </span>&#8377; <?php echo $t; ?></h4>  
    </div>
    <div class="row">
    <div class="col-12">
    <div class="card">
                                <div class="card-header ">Shipping Address</div>
                                <div class="card-body text-center font-weight-bold" id="shipadd">
                                <?php
                                        $qc=mysqli_query($conn,"select * from userdetailstb where id='$uid'") or die(mysqli_error($conn));
                                        $qud=mysqli_fetch_assoc($qc);
                                ?>
                                    
                                    <?php if($qud['shipaddr1']!='') echo $qud['shipaddr1']."<br>";?>
                                    <?php if($qud['shipaddr2']!='') echo $qud['shipaddr2']."<br>";?>
                                    <?php if($qud['shiplandmark']!='') echo $qud['shiplandmark']."<br>";?>
                                    <?php if($qud['city']!='') echo $qud['city'].",";?><?php if($qud['state']!='') echo $qud['state'];?>
                                    
                                </div>
    </div>
    </div>
    
    <button class=" m-3  btn btn-danger" onclick='dispatched(<?php echo $ido;?>)'> Dispatched </button>
</div>


</div>

<?php include 'footer.php'; ?>
