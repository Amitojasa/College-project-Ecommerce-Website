<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php
    require 'conn.inc.php';
    $cate="";
?>
<?php
	if (@$_SESSION['login']==true){
        $login=true;
        $uid=$_SESSION['userid'];
        $r=mysqli_query($conn,"select firstName from userdetailstb where id='$uid'") or die(mysqli_error($conn));
        $userName=mysqli_fetch_assoc($r)['firstName'];
	}else{
        $login=false;
        $userName="My Account";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/head.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
    
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
                    <li class="nav-item active">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav collapsenav">
                    <li class="nav-item">

                    <?php if(@$login){?>
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
        <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <div class="container">
                <div class="col-sm-10 searchbar">    
                    <form method="GET" action="shop.php">
                        
                    <div class="input-group">
                    <div class="input-group-prepend">
                    <select name="category" class="form-control bg-secondary text-white" id="category">
                        <option value="" <?php
                                                            if(($cate)==('')){
                                                                echo  "selected";
                                                            } ?>>Select category</option>
                        <option value="laptop" <?php
                                                            if(($cate)==('laptop')){
                                                                echo  "selected";
                                                            } ?>>Laptop</option>
                            <option value="mobile" <?php
                                                            if(($cate)==('mobile')){
                                                                echo  "selected";
                                                            } ?> >Mobile</option>
                            
                            <option value="camera" <?php
                                                            if(($cate)==('camera')){
                                                                echo  "selected";
                                                            } ?>>Camera</option>
                            <option value="watches" <?php
                                                            if(($cate)==('watches')){
                                                                echo  "selected";
                                                            } ?>>Smart watches</option>
                            
                        </select>
                    </div>
                        <input type="text" name="search_text" class="form-control" placeholder="Search">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" name="sub" type="submit" onclick="window.location.href='shop.php'">Search</button> 
                        </div>
                    </div>
                        
                    </form>
                </div>
             
                <ul class="navbar-nav cols-sm-1 offset-1 ">
                    <li class="nav-item">
                        <a href="myaccount.php#favourite" class="nav-link" title="Favourites"><span class="fa fa-heart nav2-icons" ></span></a>
                    </li>
                    <li class="nav-item ml-sm-3">
                        <a href="myaccount.php#cart" class="nav-link" title="Shopping Cart" ><span class="fa fa-shopping-cart nav2-icons"></span></a>
                    </li>
                    <li class="nav-item">
                        <a href="compare.php" title="compare" class="nav-link"><img src="images/compare-grey.png"></a>
                    </li>
                </ul>
            </div>
        </nav>
        <nav class="navbar bg-danger navbar-inverse navbar-expand-sm p-0 m-0 categories">
            <ul class="navbar-nav justify-content-around w-100">
                <li class="nav-item"><a href="<?php echo 'shop.php?category=laptop';?>" class="nav-link">Laptop</a></li>
                <li class="nav-item"><a href="<?php echo 'shop.php?category=mobile';?>" class="nav-link">Mobile</a></li>
                <li class="nav-item"><a href="<?php echo 'shop.php?category=camera';?>" class="nav-link">Camera</a></li>
                <li class="nav-item"><a href="<?php echo 'shop.php?category=watches';?>" class="nav-link">Smart Watches</a></li>
               
            </ul>

        </nav>
        
    </header>


