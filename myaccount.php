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
        
    }

?>
<?php include 'header.php'?>
<link rel="stylesheet" href="css/myaccount.css">
<div class="container m-5">
    <div class="row">
        <div class="col-sm-3">
            <nav class="navbar bg-white">
                <ul class="navbar-nav nav nav-pills" id="menu" role="tablist">
                    <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#dashboard">My Dashboard</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#account-details">Account Details</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#cart">My Cart</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#change-pass">Change Password</a>
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
                            <div class="card-body text-center font-weight-bold">
                                #21500 Street No. 6/4-A<br>
                                Power House Road,<br>
                                Bathinda,Punjab
                            </div>
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
                                    $r=mysqli_query($conn,"select * from userdetailstb where id='$uid'") or die(mysqli_error($conn));
                                    $r=mysqli_fetch_assoc($r);
                                ?>
                                <div class="col-md-6">
                                    <input type="text" required placeholder="First Name" value="<?php echo $r['firstName'];?>" name="fname" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Last Name" value="<?php echo $r['lastName'];?>" name="lname" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" required placeholder="Email Address" name="email" value="<?php echo $r['emailAddress'];?>" class="form-control">
                                </div>
                                
                                <div class="col-md-6">
                                    <input type="text" required placeholder="Contact Number 1" name="phno" value="<?php echo $r['contactNo1'];?>" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Contact Number 2" name="phno2" value="<?php echo $r['contactNo2'];?>" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <input type="text" required="" placeholder="Shipping Address 1" name="shipadd" value="<?php echo $r['shipaddr1'];?>" class="form-control">
                                    <span  class="text-muted">Please provide the number and street.</span> 
                                </div>
                                <div class="col-md-12">
                                    <input type="text" required="" placeholder="Shipping Address 2" name="shipadd2" value="<?php echo $r['shipaddr2'];?>" class="form-control">
                                    <span  class="text-muted">Please provide the Area.</span> 
                                </div>
                                <div class="col-md-12">
                                    <input type="text" required placeholder="Shipping Landmark" name="shipland" value="<?php echo $r['shiplandmark'];?>" class="form-control">
                                    <span class="text-muted">Please include landmark (e.g : Opposite Bank) as the carrier service may find it easier to locate your address.</span> 
                                </div>
                                <div class="col-md-6">
                                    <input name="shippingCountryId" value="India" id="shippingcountryid" disabled class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <select name="shippingstateId" id="shippingstateid"  class="form-control" value="<?php echo $r['state'];?>">
                                        <option value="AP">Andhra Pradesh</option>
                                        <option value="AR">Arunachal Pradesh</option>
                                        <option value="AS">Assam</option>
                                        <option value="BR">Bihar</option>
                                        <option value="CT">Chhattisgarh</option>
                                        <option value="GA">Goa</option>
                                        <option value="GJ">Gujarat</option>
                                        <option value="HR">Haryana</option>
                                        <option value="HP">Himachal Pradesh</option>
                                        <option value="JK">Jammu and Kashmir</option>
                                        <option value="JH">Jharkhand</option>
                                        <option value="KA">Karnataka</option>
                                        <option value="KL">Kerala</option>
                                        <option value="MP">Madhya Pradesh</option>
                                        <option value="MH">Maharashtra</option>
                                        <option value="MN">Manipur</option>
                                        <option value="ML">Meghalaya</option>
                                        <option value="MZ">Mizoram</option>
                                        <option value="NL">Nagaland</option>
                                        <option value="OR">Orissa</option>
                                        <option value="PB">Punjab</option>
                                        <option value="RJ">Rajasthan</option>
                                        <option value="SK">Sikkim</option>
                                        <option value="TN">Tamil Nadu</option>
                                        <option value="TS">Telangana</option>
                                        <option value="TR">Tripura</option>
                                        <option value="UK">Uttarakhand</option>
                                        <option value="UP">Uttar Pradesh</option>
                                        <option value="WB">West Bengal</option>
                                        <option value="AN">Andaman and Nicobar Islands</option>
                                        <option value="CH">Chandigarh</option>
                                        <option value="DN">Dadar and Nagar Haveli</option>
                                        <option value="DD">Daman and Diu</option>
                                        <option value="DL">Delhi</option>
                                        <option value="LD">Lakshadeep</option>
                                        <option value="PY">Pondicherry (Puducherry)</option>
                                        <option class="text-muted" selected>Select a State</option>
                                    </select>
                                    
                                </div>
                                <div class="col-md-6">
                                <div class="input-box">
                                    <input type="text" required placeholder="City" name="city" value="<?php echo $r['city'];?>" class="form-control">
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="input-box">
                                    <input type="text" required placeholder="Postcode/zip" name="zip" value="<?php echo $r['postalcode'];?>" class="form-control">
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
                <div class="row">
                    <div class="col-12">
                        <div class="heading">
                            <h2 class="bg-light p-3">My Cart</h2>
                        </div>
                    </div>
                </div>
                <div class="row px-4 py-2" id="tab">
                    <div class="col-12 mb-xs-30">
                    <div class="cart-item-table commun-table">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="2">
                                            <h4>My Orders</h4>
                                        </th>
                                        <th colspan="2"> 
                                            <ul class="pull-right">
                                                <li class="price-box"><span class="mx-2">Total</span> <span class="price text-danger">₹135000</span></li>
                                            </ul>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="product-page.php?p=m-tech&amp;id=3">
                                                <div class="product-image">
                                                    <img alt="GadgetsPick" class="img img-fluid" src="images/test.jpeg">
                                                </div>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="product-title"> 
                                                <a href="product-page.html">ertyuioijhgf</a> 
                                            </div>
                                        </td>
                                        <td>
                                            <div class="base-price price-box"> 
                                                <span class="price">₹45000 X 2 = ₹90000</span> 
                                            </div>
                                        </td>
                                        <td>
                                            <i title="Remove Item From Cart" data-id="100" class="fa fa-trash cart-remove-item" onclick=""></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="product-page.php?p=m-tech&amp;id=3">
                                                <div class="product-image">
                                                    <img alt="GadgetsPick" class="img img-fluid" src="images/test.jpeg">
                                                </div>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="product-title"> 
                                                <a href="product-page.html">ertyuioijhgf</a> 
                                            </div>
                                        </td>
                                        <td>
                                            <div class="base-price price-box"> 
                                                <span class="price">₹45000 X 1 = ₹45000</span> 
                                            </div>
                                        </td>
                                        <td>
                                            <i title="Remove Item From Cart" data-id="100" class="fa fa-trash cart-remove-item" onclick=""></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <div class="print-btn text-center mt-3">
                        <button onclick="printDiv('form-print')" class="btn btn-primary" type="button">Print</button>
                        </div>
                    </div>
                </div>
            </section>

            <section id="change-pass" class="row tab-pane fade">
                <div class="row">
                    <div class="col-12">
                        <div class="heading">
                            <h2 class="bg-light p-3">My Cart</h2>
                        </div>
                    </div>
                </div>
                <div class="row px-5 py-2"></div>
                    <form class="main-form full" method="post">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="old-pass">Old-Password</label>
                                    <input type="password" placeholder="Old Password" required="" id="old-pass" name="oldpass" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="login-pass">Password</label>
                                    <input type="password" placeholder="Enter your Password" required="" id="login-pass" name="newpass" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="re-enter-pass">Re-enter Password</label>
                                    <input type="password" placeholder="Re-enter your Password" required="" id="re-enter-pass" name="newrepass" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 text-center mt-3">
                                <button class="btn btn-primary" type="submit" name="submit">Change Password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        
        </div>

    </div>
</div>

<?php include 'footer.php'?>