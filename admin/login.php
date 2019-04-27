<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	if (@$_SESSION['loginadmin']==true){
		header("Location: index.php");
		exit;
	}
?>

<?php require '../conn.inc.php';?>
<?php

	if(isset($_POST['submit'])){
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$pass = mysqli_real_escape_string($conn,$_POST['password']);

	  	$r=mysqli_query($conn,"Select password from adminlogintb where emailId='$email'") or die(mysqli_error($conn));

		$r=mysqli_fetch_assoc($r);
		
		if($pass==$r['password']){
			$_SESSION['loginadmin']=true;
			$_SESSION['email']=$email;
			if(isset($_POST['remember'])){
				if(!isset($_COOKIE['gadgets_pick_email'])) {
					setcookie("gadgets_pick_email", $email, time()+ 86400*365,'/');
				}
				if(!isset($_POST['gadgets_pick_password'])){
					setcookie("gadgets_pick_password", $pass, time()+ 86400*365,'/');
				}
			}else{
				if(isset($_COOKIE['gadgets_pick_email'])) {
					setcookie("gadgets_pick_email", "", time()- 86400,'/');
				}
				if(isset($_COOKIE['gadgets_pick_password'])){
					setcookie("gadgets_pick_password", "", time()- 86400,'/');
				}
      }
      header("Location: index.php");
    	exit;
		}else{
			echo "<script>alert('Incorrect Password')</script>"  ; 
		}
	

  }

?>
<?php include 'header2.php';?>

<link rel="stylesheet" href="css/login.css">
<section class="checkout-section ptb-70">
   <div class="bcg"></div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-8 col-md-8  card m-5 shadow">
            <div class="card-body">
              <form class="main-form full" method="post">
                <div class="row">
                  <div class="col-12 mb-20">
                    <div class="heading-part heading-bg mb-4">
                      <h2 class="heading">Customer Login</h2>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input class="form-control" id="login-email" name="email" type="email" placeholder="Email Address" value=" 
							<?php
								if(isset($_COOKIE['gadgets_pick_email'])){
									echo $_COOKIE['gadgets_pick_email'];
								}else{
									echo "";
								}
							?>
							" required>
                    </div>
                  </div>
                  <div class="col-12">
                         <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text fa fa-key"></span>
                            </div>
							<input class="form-control" id="login-pass" name="password" type="password" placeholder="Password"
							<?php
								if(isset($_COOKIE['gadgets_pick_password'])){
									echo 'value="'.$_COOKIE['gadgets_pick_password'].'"';
								}else{
									echo 'value=""';
								}
							?>
							 required>
                        </div>
                  </div>
                  <div class="col-5">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" name="remember" class="form-check-input"  
								<?php
									if(isset($_COOKIE['gadgets_pick_email']) && $_COOKIE['gadgets_pick_email']!=''){
										echo "checked";
									}
								?>
							> Remember Me
                            </label>
                        </div>
                    </div>
                 <div class="col-7">
                    <button name="submit" type="submit" class="btn btn-primary pull-right">Log In</button>
                  </div>
                  <div class="col-12"> <a title="Forgot Password" class="forgot-password mtb-20" href="forgotpass.php">Forgot your password?</a>
                    <hr>
                  </div>
                  <div class="col-12">
                    <div class="new-account text-center mt-20"> <span>New to GadgetsPick ?</span> <a class="link" title="Register with Everypick" href="register.php">Create New Account</a> </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <?php include 'footer.php';?>