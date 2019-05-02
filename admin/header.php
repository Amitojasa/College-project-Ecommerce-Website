<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php
    require '../conn.inc.php';
?>
<?php
	if (@$_SESSION['loginadmin']==true){
        $loginadmin=true;
        $uid=$_SESSION['email'];
        $r=mysqli_query($conn,"select * from adminlogintb where emailid='$uid'") or die(mysqli_error($conn));
        $userName=mysqli_fetch_assoc($r)['emailid'];
	}else{
        $loginadmin=false;
        $userName="My Account";
        header("Location: logout.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/head.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="custom.css">
    
    <title>GadgetsPick</title>
</head>
<body>
    <header class="head">
        <nav class="navbar navbar-dark navbar-expand-md bg-primary justify-content-between">
            <a class="navbar-brand" href="index.php">
                GadgetsPick
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav collapsenav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Orders
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="newOrders.php">New Orders</a>
                            <a class="dropdown-item" href="ontheway.php">On the Way</a>
                            <a class="dropdown-item" href="Delivered.php">Delivered</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Products
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="productAdd.php">Product Add</a>
                            <a class="dropdown-item" href="productEdit.php">Product Edit</a>
                            <a class="dropdown-item" href="productDelete.php">Product Delete</a>
                            <a class="dropdown-item" href="productDetails.php">Product Details</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop2" data-toggle="dropdown">
                            Question & Answers
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="questions.php">Answer Questions</a>
                            <a class="dropdown-item" href="questionsEdit.php">Edit Answers</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="banners.php" class="nav-link">Banners</a>
                    </li>
                    <li class="nav-item">
                        <a href="dealsofday.php" class="nav-link">Delas of Day</a>
                    </li>
                    <li class="nav-item">
                        <a href="newsletter.php" class="nav-link">NewsLetter</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav collapsenav">
                    <li class="nav-item">

                    <?php if(@$loginadmin){?>
                            <a href="logout.php" class="nav-link"><span class="fa fa-lock"></span> Logout
                        <?php }else{ ?>
                            <a href="login.php" class="nav-link"><span class="fa fa-lock"></span> Login
                        <?php } ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="myaccount.php" class="nav-link"><span class="fa fa-user"></span> <?php echo $userName; ?></a>
                    </li>
                    
                </ul>
            </div>  
        </nav>
    </header>


