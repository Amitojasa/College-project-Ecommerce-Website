<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php
    require 'conn.inc.php';
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

<?php

    if(isset($_POST['subship'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $phone=$_POST['phno'];
        $phone2=$_POST['phno2'];
        $shipadd=$_POST['shipadd'];
        $shipadd2=$_POST['shipadd2'];
        $shipland=$_POST['shipland'];
        $shipstate=$_POST['shippingstateId'];
        $q=mysqli_query($conn,"select statename from statekeys  where abbr='$shipstate'");
        $q=mysqli_fetch_array($q);
        $shipstate=$q[0];
        $city=$_POST['city'];
        $zip=$_POST['zip'];
        mysqli_query($conn,"update userdetailstb set firstName='$fname',lastName='$lname',emailAddress='$email',contactNo1='$phone',contactNo2='$phone2',shipaddr1='$shipadd',shipaddr2='$shipadd2',shiplandmark='$shipland',state='$shipstate',city='$city',postalcode='$zip' where id='$uid'") or die("no");
    }

?>
<?php 
    if(isset($_POST['submitpass'])){
        $oldpass = $_POST['oldpass'];
        $newpass = $_POST['newpass'];
        $newrepass = $_POST['newrepass'];
    

        if($newpass==$newrepass){
            $r=mysqli_query($conn,"select password from logintb where linkUserId='$uid'") or die(mysqli_error($conn));
            $r = mysqli_fetch_assoc($r);
            if($r['password'] == $oldpass){
                $q=mysqli_query($conn,"update logintb set password = '$newpass' where linkUserId='$uid'");
                if($q){
                    echo "<script>alert('Password Changed Successfully')</script>";        
                    // echo "<script>
                    //     var x = document.getElementById('changedpass'); 
                    //     x.style.diplay = block;
                    // </script>";
                }
            }else{
                echo "<script>alert('Old Password entered is wrong!!')</script>";
                // $msg="Wrong Old Password";
                // echo "<script>
                //     var x = document.getElementById('wrong'); 
                //     x.style.diplay = block;
                // </script>"; 
            }
        }else{
            echo "<script>alert('New Password does not match with Re-type Password!!')</script>"  ; 
            // $msg = "New password and Re-enter password doesnt match";
            // echo "<script>
            //     var x = document.getElementById('wrong'); 
            //     x.style.diplay = block;
            // </script>"; 
        }
    }
?>

<?php include 'header.php'?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>

function dispatched (id){
       $.ajax({
            url:"orderStatus.php?id="+id, //the page containing php script
            type: "POST", //request type
            success:function(result){
                alert("Order has been "+result);
           }
         });
    }

function favor(id){
    $.ajax({
            url:"favo.php?id="+id, //the page containing php script
            type: "POST", //request type
            success:function(result){
                $('#favourite').load('myaccount.php #tabfav');
               
           }
         });
}

function removeFromCart(id){
        
        $.ajax({
            url:"removeFromCart.php?id="+id, //the page containing php script
            type: "POST", //request type
            success:function(result){
                $('#cart').load('myaccount.php #tabcart');
           }
         });
}
        
</script>


<link rel="stylesheet" href="css/myaccount.css">
<div class="container m-5">
    <div class="row">
        <div class="col-sm-3">
            <nav class="navbar bg-white">
                <ul class="navbar-nav nav nav-pills" id="menu" role="tablist">
                    <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#dashboard">My Dashboard</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#account-details">Account Details</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#cart">My Cart</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#favourite">Favourites</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#change-pass">Change Password</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#my-orders">My Orders</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col-sm-9 tab-content">

            <section  id="dashboard" class="row tab-pane active">
                <div class="col-12">
                    <div class="heading">
                        <h2 class="bg-light p-3">Dashboard</h2>
                    </div>
                    <div class="body px-5 py-2">
                        <div class="welcome-words">
                            <div class="hello h5">Hello, <?php echo $userName;?> </div>
                            <p>Thanks, for being the part of GadgetsPick. We welcome you to GadgetsPick and will reach out to you for any problem.</p>
                        </div>
                        <div class="heading">
                        <h4 class="bg-white">Account Information</h4>
                        <hr>
                        </div>
                            <div class="card">
                                <div class="card-header ">Shipping Address</div>
                                <div class="card-body text-center font-weight-bold" id="shipadd">
                                <?php
                                        $q=mysqli_query($conn,"select * from userdetailstb where id='$uid'") or die(mysqli_error($conn));
                                        $qud=mysqli_fetch_assoc($q);
                                ?>
                                    
                                    <?php if($qud['shipaddr1']!='') echo $qud['shipaddr1']."<br>";?>
                                    <?php if($qud['shipaddr2']!='') echo $qud['shipaddr2']."<br>";?>
                                    <?php if($qud['shiplandmark']!='') echo $qud['shiplandmark']."<br>";?>
                                    <?php if($qud['city']!='') echo $qud['city'].",";?><?php if($qud['state']!='') echo $qud['state'];?>
                                    
                                </div>
                                <script>
                                    if(document.getElementById('shipadd').innerHTML.trim()==""){
                                        document.getElementById('shipadd').innerHTML="Please fill out the account details !!!";
                                    }
                                </script>
                        </div>
                    </div>
                </div>
            </section>
            
            <section id="account-details" class="row tab-pane fade">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading">
                                    <h2 class="bg-light p-3">Account Details</h2>
                                </div>
                            </div>
                        </div>
                        <div class="m-0 px-5 py-2">
                        <form class="main-form full" method="post">
                            <div class="mb-20 body2">
                            <div class="row">
                                <div class="col-12 mb-20">
                                <div class="heading-part">
                                    <h4 class="sub-heading">Shipping &amp; Billing Address</h4>
                                </div>
                                <hr>
                                </div>
                                <?php
                                    $q=mysqli_query($conn,"select * from userdetailstb where id='$uid'") or die(mysqli_error($conn));
                                    $q=mysqli_fetch_assoc($q);
                                ?>
                                <div class="col-md-6">
                                    <input type="text" required placeholder="First Name" value="<?php echo $q['firstName'];?>" name="fname" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Last Name" value="<?php echo $q['lastName'];?>" name="lname" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" required placeholder="Email Address" name="email" value="<?php echo $q['emailAddress'];?>" class="form-control">    
                                </div>
                                
                                <div class="col-md-6">
                                    <input type="text" required placeholder="Contact Number 1" name="phno" value="<?php echo $q['contactNo1'];?>" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Contact Number 2" name="phno2" value="<?php echo $q['contactNo2'];?>" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <input type="text" required="" placeholder="Shipping Address 1" name="shipadd" value="<?php echo $q['shipaddr1'];?>" class="form-control">
                                    <span  class="text-muted">Please provide the number and street.</span> 
                                </div>
                                <div class="col-md-12">
                                    <input type="text" required="" placeholder="Shipping Address 2" name="shipadd2" value="<?php echo $q['shipaddr2'];?>" class="form-control">
                                    <span  class="text-muted">Please provide the Area.</span> 
                                </div>
                                <div class="col-md-12">
                                    <input type="text" required placeholder="Shipping Landmark" name="shipland" value="<?php echo $q['shiplandmark'];?>" class="form-control">
                                    <span class="text-muted">Please include landmark (e.g : Opposite Bank) as the carrier service may find it easier to locate your address.</span> 
                                </div>
                                <div class="col-md-6">
                                    <input name="shippingCountryId" value="India" id="shippingcountryid" disabled class="form-control">
                                </div>
                                <div class="col-md-6">
                                <select name="shippingstateId" class="form-control" id="shippingstateid" placeholder="Select a State">
                                    <?php 
                                        $sn=$q['state'];
                                        $v=mysqli_query($conn,"select abbr from statekeys where statename='$sn'") or die(mysqli_error($conn));
                                        $v=mysqli_fetch_assoc($v);
                                        echo $v['abbr'];
                                        $p=mysqli_query($conn,"select * from statekeys") or die(mysqli_error($conn));
                                        while($r=mysqli_fetch_assoc($p)){
                                    ?>
                                    
                                        <option value="<?php echo $r['abbr'];?>" <?php
                                                if(($v['abbr'])==($r['abbr'])){
                                                    echo  "selected";
                                                }   
                                        ?>><?php echo $r['statename']?></option>
                                    
                                    <?php } ?>
                                </select>
                                                
                                </div>
                                <div class="col-md-6">
                                <div class="input-box">
                                    <input type="text" required placeholder="City" name="city" value="<?php echo $q['city'];?>" class="form-control">
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="input-box">
                                    <input type="text" required placeholder="Postcode/zip" name="zip" value="<?php echo $q['postalcode'];?>" class="form-control">
                                </div>
                                </div>
                                <div class="col-md-3" style="margin:0 auto;">
                                <br>
                                    <button type="submit" name="subship" class="form-control btn btn-primary">Save</button>
                                
                                </div>
                            </div>
                            </div>
                            
                        </form>

                       
                        </div>
            </section>

            <section id="cart" class="row tab-pane fade">
                <div id="tabcart">
                <div class="row">
                    <div class="col-12">
                        <div class="heading">
                            <h2 class="bg-light p-3">My Cart</h2>
                        </div>
                    </div>
                </div>
                <div class="row py-2" id="tab">
                    <div class="col-12 mb-xs-30">
                    <div class="cart-item-table commun-table">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="2">
                                            <h4>My Products</h4>
                                        </th>
                                        <?php 
                                            $t=0;
                                            $cart=(json_decode($q['cart']));
                                            foreach($cart as $i => $value){       
                                                $selectQuery="select * from productdetails where id=$i";

                                                $qu = mysqli_query($conn,$selectQuery) or die(mysqli_error($conn));
                                                $qpc=mysqli_fetch_assoc($qu);  
                                                $t=$t+($qpc['newPrice']*$value);
                                            }
                                        ?>
                                        <th colspan="2"> 
                                            <ul class="pull-right">
                                                <li class="price-box"><span class="mx-2">Total</span> <span class="price text-danger">₹</span><span  id="price" class="price text-danger"><?php echo @$t;?></span></li>
                                            </ul>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                            $t=0;
                                            $cart=(json_decode($q['cart']));
                                            foreach($cart as $i => $value){       
                                                $selectQuery="select * from productdetails where id=$i";

                                                $qu = mysqli_query($conn,$selectQuery) or die(mysqli_error($conn));
                                                $qpc=mysqli_fetch_assoc($qu);  
                                                $t=$t+($qpc['newPrice']*$value);
                                        ?>
                                    <tr>
                                        <td>
                                            <a href="">
                                                <div class="product-image">
                                                    <img alt="GadgetsPick" class="img img-fluid" src="images/<?php echo $qpc['category']."/".$qpc['image1'];?>">
                                                </div>
                                            </a>
                                        </td>
                                        <td style="width:300px;">
                                            <div class="product-title"> 
                                                <a href="single-product.php?category=<?php echo $qpc['category']."&id=".$qpc['id'];?>"><?php echo $qpc['title']; ?></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="base-price price-box"> 
                                                <span class="price">₹<?php echo $qpc['newPrice'];?> X <?php echo $value;?> = ₹<?php echo ($qpc['newPrice']*$value);?></span> 
                                            </div>
                                        </td>
                                        <td>
                                            <i title="Remove Item From Cart" data-id="100" class="fa fa-trash cart-remove-item" onclick='removeFromCart(<?php echo $i;?>);'></i>
                                        </td>
                                    </tr>
                                <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
                
                </div>
                <div class="text-center">
                <a href="buyNowCart.php" class="btn btn-primary">Checkout</a>
                </div>
            </section>
            <section id="favourite" class="row tab-pane fade">
                <div id="tabfav">
                <div class="row">
                    <div class="col-12">
                        <div class="heading">
                            <h2 class="bg-light p-3">Favourites</h2>
                        </div>
                    </div>
                </div>
                <div class="row py-2" id="tab">
                    <div class="col-12 mb-xs-30">
                    <div class="cart-item-table commun-table">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="2">
                                            <h4>My Favourites</h4>
                                        </th>
                                        <th colspan="3"> 
                                            <ul class="pull-right">
                                                <li class="price-box"><span class="mx-2">Total Items : </span> <span class="total text-danger"><?php echo count(json_decode($q['favourite']));?></span></li>
                                            </ul>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    
                                    $fav=(json_decode($q['favourite']));
                                    foreach($fav as $i){       
                                        $selectQuery="select * from productdetails where id=$i";

                                        $qu = mysqli_query($conn,$selectQuery) or die(mysqli_error($conn));
                                        $qp=mysqli_fetch_assoc($qu);                         
                                ?>
                                    <tr>
                                        <td>
                                            <div class="product-image">
                                                    <img alt="GadgetsPick" class="img img-fluid" src="images/<?php echo $qp['category']."/".$qp['image1'];?>">
                                                </div>
                                        </td>
                                        <td style="width:300px;">
                                            <div class="product-title"> 
                                                <a href="single-product.php?category=<?php echo $qp['category']."&id=".$qp['id'];?>"><?php echo $qp['title']; ?></a> 
                                            </div>
                                        </td>
                                        <td>
                                            <div class="base-price price-box"> 
                                                <span class="category"><?php echo $qp['category'];?></span> 
                                            </div>
                                        </td>
                                        <td>
                                            <div class="base-price price-box"> 
                                                <span class="price">₹<?php echo $qp['newPrice'];?></span> 
                                            </div>
                                        </td>
                                        <td class="lastbtns">
                                            <a class="btn btn-primary" href="single-product.php?category=<?php echo $qp['category']."&id=".$qp['id'];?>">View</a>
                                            <i title="Remove Item From Favourites" data-id="100" class="fa fa-trash cart-remove-item" onclick='favor(<?php echo $i;?>);' ></i>
                                        
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
                           
                </div>
            </section>
            <section id="my-orders" class="row tab-pane fade">
                <div id="tabfav">
                <div class="row">
                    <div class="col-12">
                        <div class="heading">
                            <h2 class="bg-light p-3">My Orders</h2>
                        </div>
                    </div>
                </div>
                <div class="row py-2" id="tab">
                    <div class="col-12 mb-xs-30">
                    <table class="table">
                    <thead>
                    <tr>
                        <th>Order Id</th>
                        <th>Order Date</th>
                        <th>Txn Id</th>
                        <th>Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  
                        $qu=mysqli_query($conn,"select distinct * from transactions where uid=$uid") or die(mysqli_error($conn));
                        while($qe=mysqli_fetch_assoc($qu)){ 
                    ?>
                    <tr>
                        <td><?php echo $qe['id'];?></td>
                        <td><?php echo $qe['date'];?></td>
                        <td><?php echo $qe['txnId'];?></td>
                        <td><?php echo $qe['amount'];?></td>
                        <td><a target="_blank" href="viewOrder.php?id=<?php echo $qe['id'];?>" class="btn btn-primary btn-sm">View Order</a></td>
                        <td> <button class=" btn btn-sm btn-danger" onclick='dispatched(<?php echo $qe['id'];?>)'> Status </button></td>
                        
                    </tr>
                        <?php } ?>
                    </tbody>
                </table>
                    </div>
                </div>
                           
                </div>
            </section>

            <section id="change-pass" class="row tab-pane fade">

                <!-- <div class="alert alert-success" id="changedpass">
                    <strong>Success!</strong> Password changed.
                </div>
                <div class="alert alert-danger" id="wrong">
                    <?php //echo $msg;?>
                </div> -->
                <div class="row">
                    <div class="col-12">
                        <div class="heading">
                            <h2 class="bg-light p-3">Change Password</h2>
                        </div>
                    </div>
                </div>
                <div class="row px-5 py-2"></div>
                    <form class="main-form full" method="post">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="old-pass">Old-Password</label>
                                    <input type="password" placeholder="Old Password" required id="old-pass" name="oldpass" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="login-pass">Password</label>
                                    <input type="password" placeholder="Enter your Password" required id="login-pass" name="newpass" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="re-enter-pass">Re-enter Password</label>
                                    <input type="password" placeholder="Re-enter your Password" required id="re-enter-pass" name="newrepass" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 text-center mt-3">
                                <button class="btn btn-primary" type="submit" name="submitpass">Change Password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>

        
        </div>
    </div>
</div>

<script>
    var type = window.location.hash.substr(1);
    if(type=="") type="dashboard";
    // document.getElementById('#'+type).classList.add("active");
    $("a[href$='#"+type+"']").tab('show');
</script>
<?php include 'footer.php'?>

