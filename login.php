<?php include 'header.php';?>
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
                        <input class="form-control" id="login-email" name="email" type="email" required="" placeholder="Email Address" value="">
                    </div>
                  </div>
                  <div class="col-12">
                         <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text fa fa-key"></span>
                            </div>
                            <input class="form-control" id="login-pass" name="password" type="password" required="" placeholder="Password" value="">
                        </div>
                  </div>
                  <div class="col-5">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value=""> Remember Me
                            </label>
                        </div>
                    </div>
                 <div class="col-7">
                    <button name="submit" type="submit" class="btn btn-primary pull-right">Log In</button>
                  </div>
                  <div class="col-12"> <a title="Forgot Password" class="f  orgot-password mtb-20" href="forgotpass.php">Forgot your password?</a>
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