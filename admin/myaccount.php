<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php
    require '../conn.inc.php';
    require 'header.php';
?>


<?php 
    if(isset($_POST['submitpass'])){
        $oldpass = $_POST['oldpass'];
        $newpass = $_POST['newpass'];
        $newrepass = $_POST['newrepass'];
    

        if($newpass==$newrepass){
            $r=mysqli_query($conn,"select password from adminlogintb where emailid='$uid'") or die(mysqli_error($conn));
            $r = mysqli_fetch_assoc($r);
            if($r['password'] == $oldpass){
                $q=mysqli_query($conn,"update adminlogintb set password = '$newpass' where emailid='$uid'");
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


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




<link rel="stylesheet" href="../css/myaccount.css">
<div class="container m-5">
    <div class="row">
        <div class="col-sm-3">
            <nav class="navbar bg-white">
                <ul class="navbar-nav nav nav-pills" id="menu" role="tablist">
                   <li class="nav-item">
                    <a class="nav-link active show" href="#change-pass">Change Password</a></li>
                </ul>
            </nav>
        </div>
        <div class="col-sm-9 tab-content">

            <section id="change-pass" class="row ">

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

