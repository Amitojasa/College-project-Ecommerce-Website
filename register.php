
<?php require "conn.inc.php"; ?>
<?php

	if(isset($_POST['submit-register'])){
		$fname=mysqli_real_escape_string($conn,$_POST['fName']);
		$lname=mysqli_real_escape_string($conn,$_POST['lName']);
		$email=mysqli_real_escape_string($conn,$_POST['eMail']);
		$phone=mysqli_real_escape_string($conn,$_POST['phone']);
		$pass=$_POST['pass'];
    $repass=$_POST['repass'];
    $cart=json_encode(array());
    $favourite=json_encode(array());


		if($pass=$repass){
			mysqli_query($conn,"Insert into userdetailstb(firstName,lastName,emailAddress,contactNo1,cart,favourite) values('$fname','$lname','$email','$phone','$cart','$favourite')") or die(mysqli_error($conn));
			
			$last_id=mysqli_query($conn,"select LAST_INSERT_ID()") or die(mysqli_error($conn));
			$last_id=mysqli_fetch_array($last_id);
			$last_id=$last_id[0];
			mysqli_query($conn,"Insert into logintb(emailId,password,linkUserId) values('$email','$pass','$last_id')") or die(mysqli_error($conn));
      header("Location: login.php");
    	exit;
		}else{
			echo "sorry";
		}

	}
  

?>
<?php include "header.php"; ?>

<link rel="stylesheet" href="css/register.css">
<section class="checkout-section ptb-70">
    <div class="clip"></div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="row justify-content-center">
          
            <div class="col-xl-8 col-lg-8 col-md-8 ">
            <div class="card m-5">
          <div class="card-body">
              <form class="main-form full" method="post">
                <div class="row">
                  <div class="col-12 mb-20">
                    <div class="heading-part heading-bg">
                      <h2 class="heading text-center text-primary p-3 mt-3">Create your account</h2>
                    </div>
                    <hr>
                  </div>
                  <div class="col-12">
                    <div class="heading-part line-bottom ">
                      <h2 class="form-title  text-secondary"><small>Your Personal Details</small></h2>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="f-name">First Name</label>
                      <input class="form-control" type="text" name="fName" id="f-name" required="" placeholder="First Name" required>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="l-name">Last Name</label>
                      <input class="form-control" type="text" name="lName" id="l-name" required="" placeholder="Last Name" required>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="login-email">Email address</label>
                      <input class="form-control" id="login-email" name="eMail" type="email" required="" placeholder="Email Address">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="telephone">Phone no.</label>
                      <input class="form-control" id="telephone" name="phone" type="number" required="" placeholder="Phone No." required>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="login-pass">Password</label>
                      <input  class="form-control" id="login-pass" name="pass" type="password" required="" placeholder="Enter your Password" required>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="re-enter-pass">Re-enter Password</label>
                      <input class="form-control" id="re-enter-pass" name="repass" type="password" required="" placeholder="Re-enter your Password" required>
                    </div>
                  </div>
                  <div class="col-7 offset-5">
                    <button name="submit-register" type="submit" class="btn btn-primary text-center">Submit</button>
                  </div>
                  <div class="col-12">
                    <hr>
                    <div class="new-account text-center mb-4"> <span>Already have an account with us</span> <a class="link" title="Register with GadgetsPick" href="login.php">Login Here</a> </div>
                  </div>
                </div>
              </form>
            </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<?php include "footer.php"; ?>