<?php include 'header.php'; ?>
<?php 
    $cat=@$_GET['category'];
    $order = @$_GET['order'];
    $query = $_GET;
    $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
                "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .  
                $_SERVER['REQUEST_URI'];

    
    $limit = 3; 
    if (isset($_GET["page"])) {  
        $pn  = $_GET["page"];  
    }  
    else {  
        $pn=1;  
    };   
    $start_from = ($pn-1) * $limit;   
                        

    $selectQuery="select * from productdetails where category = '$cat'";
    if($order=='relevance'){

    }elseif($order=='plth'){
        $selectQuery=$selectQuery." order by newPrice asc";
    }elseif($order=='phtl'){
        $selectQuery=$selectQuery." order by newPrice desc";
    }elseif($order=='newest'){
        $selectQuery=$selectQuery." order by id desc";
    }
    $selectQuery.=" limit $start_from,$limit";
?>


<link rel="stylesheet" href="css/shop.css">

<script>
function favor(id){
        $.ajax({
            url:"favo.php?id="+id, //the page containing php script
            type: "POST", //request type
            success:function(result){

               // alert(result);
                if(document.getElementById('favo'+id).className=="fa fa-heart text-danger")
                    document.getElementById('favo'+id).className="fa fa-heart";
                else{
                    document.getElementById('favo'+id).className="fa fa-heart text-danger";
                }
           }
         });
}
</script>
<div class="container-fluid m-0 p-0">
    <section class="result-sec row m-0">
        <aside class="aside bg-light col-sm-2">
            <?php include 'aside.php';?>
        </aside>

        <?php 
            $qc = mysqli_query($conn,"select count(*) from productdetails where category = '$cat'  ") or die(mysqli_error($conn));
            $v=mysqli_fetch_array($qc)[0];
            $total_records=$v;
        ?>

        <div class="col-sm-10">
            <p class="result-count text-secondary mt-3"><?php echo $v;?> Results found</p>
        

        <nav class=" sortbar navbar navbar-expand-sm bg-white text-dark">
            <a class="navbar-brand text-muted" href="#">Sort By:</a>
            <ul class="navbar-nav nav-tabs">
            <li class="nav-item">
                <?php
                    $query['order'] = 'relevance';
                    $query_result = http_build_query($query);
                ?>
                <a class="nav-link <?php if($order=='relevance' || $order=='') echo 'active';?>" href="<?php echo $_SERVER['PHP_SELF']; ?>?<?php echo $query_result; ?>">Relevance</a>
            </li>
            <li class="nav-item">
                <?php
                    $query['order'] = 'plth';
                    $query_result = http_build_query($query);
                ?>
                <a class="nav-link <?php if($order=='plth') echo 'active';?>" href="<?php echo $_SERVER['PHP_SELF']; ?>?<?php echo $query_result; ?>"><b><span class="text-secondary">Price:</span></b> Low to High</a>
            </li>
            <li class="nav-item">
                <?php
                    $query['order'] = 'phtl';
                    $query_result = http_build_query($query);
                ?>
                <a class="nav-link <?php if($order=='phtl') echo 'active';?>" href="<?php echo $_SERVER['PHP_SELF']; ?>?<?php echo $query_result; ?>"><b><span class="text-secondary">Price:</span></b> High to Low</a>
            </li>
            <li class="nav-item">
                <?php
                    $query['order'] = 'newest';
                    $query_result = http_build_query($query);
                ?>
                <a class="nav-link <?php if($order=='newest') echo 'active';?>" href="<?php echo $_SERVER['PHP_SELF']; ?>?<?php echo $query_result; ?>">Newest First</a>
            </li>
            </ul>

        </nav>
        <hr>
        <?php
            $qu = mysqli_query($conn,$selectQuery) or die(mysqli_error($conn));
            while($q=mysqli_fetch_assoc($qu)){
        ?>
        <div class="card result-card border-bottom ">
            <div class="card-body py-2">
                <div class="row">

                    <div class="img col-3 d-flex">
                        <img class="img-fluid align-self-center" src="<?php echo "images/".$q['category']."/".$q['image1'];?>" alt="">
                    </div>

                    <div class="col-7">
                        <div class="title">
                            <a href="<?php echo 'single-product.php?category='.$cat.'&id='.$q['id']; ?>"><?php echo $q['title']; ?></a>
                        </div>
                        
                        <div class="rating text-secondary my-2 bold">
                            <span class="badge badge-primary"><?php echo $q['rating'];?></span> <?php echo $q['reviewsNo'];?> Ratings & reviews
                        </div>
                        
                        <div class="features">
                        <?php $features=(explode(";",$q['features'])); ?>
                            <ul>
                            <?php foreach($features as $i){
                                if(trim($i)!="")
                                echo "<li>$i</li>";
                            }
                            ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-2 d-flex flex-column align-items-center justify-content-center">
                        <div class="favorite mb-5">
                            <a onclick="favor(<?php echo $q['id'];?>);"><span id="favo<?php echo $q['id'];?>" class="<?php 
                               
                                $que=mysqli_query($conn,"select favourite from userdetailstb where id=$uid");
                                $ar=json_decode(mysqli_fetch_assoc($que)['favourite']);
                                if(in_array($q['id'],$ar)){
                                    echo "fa fa-heart text-danger";
                                }else{
                                    echo "fa fa-heart";
                                }
                            ?>"></span></a>
                        </div>
                        <div class="price text-center">
                            <h3 class="text-dark"> &#8377; <?php echo $q['oldPrice'];?></h3>
                            <strike class="text-danger"><h3 class="text-secondary"><small> &#8377; <?php echo $q['oldPrice'];?></small></h3></strike>
                        </div>
                    </div>  
                </div>
            </div>  
            
        </div>
        <?php } ?>
        </div>
        <div class="container my-3">
            <div class="row offset-2 d-flex justify-content-center">
                <ul class="pagination">
                    <li class="page-item <?php if($pn==1)echo 'disabled';?>"><a class="page-link" href="shop.php?category=laptop&page=<?php echo $pn-1;?>">Previous</a></li>
                    <?php   
                                                   
                            // Number of pages required. 
                            $total_pages = ceil($total_records / $limit);   
                            $pagLink = "";                         
                            for ($i=1; $i<=$total_pages; $i++) { 
                            if ($i==$pn) { 
                                $pagLink .= '<li class="page-item active"><a class="page-link" href="shop.php?category=laptop&page='.$i.'">'.$i.'</a></li>';
                            }             
                            else  { 
                                $pagLink .= '<li class="page-item"><a class="page-link" href="shop.php?category=laptop&page='.$i.'">'.$i.'</a></li>';  
                            } 
                            };   
                            echo $pagLink;   
                        ?> 
                        <li class="page-item"><a class="page-link" href="shop.php?category=laptop&page=<?php echo $pn+1;?>">Next</a></li>
                </ul>
            </div>
        </div>
        </section>
</div>

<?php include 'footer.php'; ?>