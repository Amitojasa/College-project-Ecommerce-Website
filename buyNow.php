
<?php include 'conn.inc.php'; ?>
<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php
	if (@$_SESSION['login']==true){
        $login=true;
        $uid=$_SESSION['userid'];
        $r=mysqli_query($conn,"select firstName from userdetailstb where id='$uid'") or die(mysqli_error($conn));
        $userName=mysqli_fetch_assoc($r)['firstName'];
	}else{
        header("Location: login.php");
        exit;
    }
?>
<?php include 'header.php'; ?>
<?php 
    $quant=@$_GET['quant'];
    $cat=@$_GET['category'];
    $id=@$_GET['id'];
    $type=@$_GET['type'];
    $im=0;
    $user=mysqli_query($conn,"select * from userdetailstb where id='$uid'") or die(mysqli_error($conn));
    $user=mysqli_fetch_assoc($user);
?>

<link rel="stylesheet" href="css/buyNow.css">
<div class="container-fluid my-3">
    <div class="row">
        <div class="left col-sm-4">
            <div class="slideshow">
                <div class="card border-0">
                
                <?php 
                 $selectQuery="select * from productdetails where category = '$cat' and id=$id";

                    $qu = mysqli_query($conn,$selectQuery) or die(mysqli_error($conn));
                    $q=mysqli_fetch_assoc($qu);
                ?>
                    <div class="card-body p-3 m-2">
                    <div id="demo" class="demo carousel slide" data-ride="carousel">
                            <?php if(!empty($q['image1'])){
                                $im=1;
                                ?>
                                <div class="main-imgs active">
                                    <img class="img-fluid align-self-center" src="<?php echo "images/".$q['category']."/".$q['image1'];?>" alt="Los Angeles" >
                                </div>
                            <?php } ?>
                            <?php if(!empty($q['image2']) && $im!=1){ ?>
                                <div class="main-imgs carousel-item">
                                    <img class="img-fluid align-self-center" src="<?php echo "images/".$q['category']."/".$q['image2'];?>" alt="Los Angeles">
                                </div>
                            <?php } ?>
                            <?php if(!empty($q['image3']) && $im!=1){ ?>
                                <div class="main-imgs carousel-item">
                                    <img class="img-fluid align-self-center" src="<?php echo "images/".$q['category']."/".$q['image3'];?>" alt="Los Angeles" >
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
                            <h6 class="text-dark"><span class="text-secondary">Quantity: </span><?php echo $quant; ?></h6>                           
                    </div>
                    <br>
                    <div class="total-price">
                            <h6 class="text-dark"><span class="text-secondary">Total: </span>&#8377; <?php $total= $q['newPrice']*$quant; echo $total; ?></h6>                           
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                <script>
                                    if(document.getElementById('shipadd').innerHTML.trim()==""){
                                        document.getElementById('shipadd').innerHTML="Please fill out the Shipping details !!! before proceeding further..";
                                    }
                                </script>
                                <a class="btn btn-danger" target="_blank" href="myaccount.php#account-details">Enter/Edit shipping address</a>
</div>

<?php
    $_SESSION['prods']=json_encode(array($id=>$quant));
    $posted = array();
    $posted['surl']='http://localhost/project/payu/success.php';
    $posted['furl']='http://localhost/project/payu/failure.php';
    $posted['amount']=$total;
    $posted['firstname']=$user['firstName'];
    $posted['lastname']=$user['lastName']   ;
    $posted['email']=$user['emailAddress'];
    $posted['phone']=$user['contactNo1'];
    $posted['productinfo']=$q['title'];
    $posted['address1']=$user['shipaddr1'];
    $posted['address2']=$user['shipaddr2'];
    $posted['city']=$user['city'];
    $posted['state']=$user['state'];
    $posted['country']=$user['country'];
    $posted['zipcode']=$user['postalcode'];
    
    $post=json_encode($posted);
    mysqli_query($conn,"update posted set post='$post'");
?>
    <a href="payu/PayUMoney_form.php" class="btn btn-primary">Continue</a>
</div>

<?php include 'footer.php'; ?>
