<?php 
include "conn.inc.php";
    $cat=@$_GET['category'];
    $order = @$_GET['order'];
    
                $rs=mysqli_query($conn,"select min(newPrice), max(newPrice) from productdetails where category='$cat' ") or die(mysqli_error($conn));
                $r=mysqli_fetch_assoc($rs);
                $min=$r['min(newPrice)'];
                $max=$r['max(newPrice)'];
                if(isset($_GET['min'])){
                    $min=$_GET['min'];
                }
                if(isset($_GET['max'])){
                    $max=$_GET['max'];
                }
                $sql="select * from productdetails where category = '$cat' and (newPrice between $min and $max))";
                $sqlc="select count(*) from productdetails where category = '$cat' and (newPrice between $min and $max))";
        
    
    //if(isset($_GET['search_text'])){
        $s1 = @$_GET['search_text'];
            $s=explode(" ",$s1);
            $sql="";
            $sqlc="";
            foreach($s as $i){
                  $sql .= "union SELECT * FROM `productdetails` where ((title like '%{$i}%' or details like '%{$i}%') and category='$cat' and (newPrice between $min and $max))";
                  $sqlc .= "+( SELECT count(*) FROM `productdetails` where ((title like '%{$i}%' or details like '%{$i}%') and category='$cat' and (newPrice between $min and $max)))";
                   
            } 
    
        $sql=substr($sql,6);
        $sqlc=substr($sqlc,1);
        $sqlc="select (".$sqlc.") as sumcount";
         //   }    //echo $sqlc;
    $query = $_GET;
    $query1 = $_GET;
    $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
                "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .  
                $_SERVER['REQUEST_URI'];
    //echo $link;
    
    $limit = 5; 
    if (isset($_GET["page"])) {  
        $pn  = $_GET["page"];  
    }  
    else {  
        $pn=1;  
    };   
    $start_from = ($pn-1) * $limit;   
                        

    
    if($order=='relevance'){

    }elseif($order=='plth'){
        $sql=$sql." order by newPrice asc";
    }elseif($order=='phtl'){
        $sql=$sql." order by newPrice desc";
    }elseif($order=='newest'){
        $sql=$sql." order by id desc";
    }
    $sql.=" limit $start_from,$limit";
?>

<?php
                if(isset($_POST['fsub'])){
                $ss="";
                if(isset($_POST['dell'])){
                    $ss.=" dell";
                } if(isset($_POST['lenovo'])){
                    $ss.=" lenovo";
                } if(isset($_POST['acer'])){
                    $ss.=" acer";
                } if(isset($_POST['asus'])){
                    $ss.=" asus";
                } if(isset($_POST['hp'])){
                    $ss.=" hp";
                }
                    if(isset($_POST['vivo'])){
                        $ss.=" vivo";
                    } if(isset($_POST['redmi'])){
                        $ss.=" redmi";
                    }
                    if(isset($_POST['honor'])){
                        $ss.=" honor";
                    } if(isset($_POST['oneplus'])){
                        $ss.=" oneplus";
                    }
                    if(isset($_POST['canon'])){
                        $ss.=" canon";
                    }
                    if(isset($_POST['nikon'])){
                        $ss.=" nikon";
                    }
                    if(isset($_POST['sony'])){
                        $ss.=" sony";
                    }
                   
                    
                    if(isset($_POST['huawei'])){
                        $ss.=" huawei";
                    }
                    if(isset($_POST['samsung'])){
                        $ss.=" samsung";
                    }
                if(isset($_POST['all'])){
                    $ss="";
                    $query['search_text']=$ss;
                }
                if($ss!=""){
                    $ss=substr($ss,1);
                $query['search_text']=$ss;}
                
                $query['min']=$_POST['minPrice'];
                $query['page']=1;
                $query['max']=$_POST['maxPrice'];
                $query_result = http_build_query($query);
                header("Location: ".$_SERVER['PHP_SELF']."?".$query_result);
                exit;
            }
            ?>


<?php include 'header.php'; ?>

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
            <h3 class="my-3">Filters</h3>
            <hr>
            <?php
                if(isset($_GET['min'])){
                    $min=$_GET['min'];
                }
                if(isset($_GET['max'])){
                    $max=$_GET['max'];
                }
                
            ?>
            <form method="POST">
            <div class="my-3">
                <h4>Price</h4>
                    <input type="number" class="form-control form-control-sm" name="minPrice" placeholder="min price" value="<?php echo $min;?>">
                    <input type="number" class="form-control form-control-sm my-1" name="maxPrice" placeholder="max price" value="<?php echo $max;?>">

            </div>
            <div class="my-3">
            <h4>Company</h4>
                <?php if($cat=='laptop'){?>
                    <div class="form-check">
                        <label class="form-check-label" for="check1">
                            <input type="checkbox" class="form-check-input" id="all" name="all" value="all" checked>All
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="check1">
                            <input type="checkbox" class="form-check-input" id="dell" name="dell" value="dell" <?php if(in_array("dell",$s)) echo "checked"; ?>>Dell
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="check2">
                            <input type="checkbox" class="form-check-input" id="lenovo" name="lenovo" value="lenovo" <?php if(in_array("lenovo",$s)) echo "checked"; ?>>Lenovo
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="check1">
                            <input type="checkbox" class="form-check-input" id="asus" name="asus" value="asus" <?php if(in_array("asus",$s)) echo "checked"; ?>>Asus
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="check2">
                            <input type="checkbox" class="form-check-input" id="acer" name="acer" value="acer" <?php if(in_array("acer",$s)) echo "checked"; ?>>Acer
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="check1">
                            <input type="checkbox" class="form-check-input" id="hp" name="hp" value="hp" <?php if(in_array("hp",$s)) echo "checked"; ?>>HP
                        </label>
                    </div>
                <?php } else if($cat=='mobile'){?>
                    <div class="form-check">
                        <label class="form-check-label" for="check1">
                            <input type="checkbox" class="form-check-input" id="all" name="all" value="all" checked>All
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="check1">
                            <input type="checkbox" class="form-check-input" id="vivo" name="vivo" value="vivo" <?php if(in_array("vivo",$s)) echo "checked"; ?>>Vivo
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="check2">
                            <input type="checkbox" class="form-check-input" id="redmi" name="redmi" value="redmi" <?php if(in_array("redmi",$s)) echo "checked"; ?>>Redmi
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="check1">
                            <input type="checkbox" class="form-check-input" id="samsung" name="samsung" value="samsung" <?php if(in_array("samsung",$s)) echo "checked"; ?>>Samsung
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="check2">
                            <input type="checkbox" class="form-check-input" id="honor" name="honor" value="honor" <?php if(in_array("honor",$s)) echo "checked"; ?>>Honor
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="check1">
                            <input type="checkbox" class="form-check-input" id="oneplus" name="oneplus" value="oneplus" <?php if(in_array("oneplus",$s)) echo "checked"; ?>>OnePlus
                        </label>
                    </div>
                <?php } elseif($cat=='camera'){?>
                    <div class="form-check">
                        <label class="form-check-label" for="check1">
                            <input type="checkbox" class="form-check-input" id="all" name="all" value="all" checked>All
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="check1">
                            <input type="checkbox" class="form-check-input" id="canon" name="canon" value="canon" <?php if(in_array("canon",$s)) echo "checked"; ?>>Canon
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="check2">
                            <input type="checkbox" class="form-check-input" id="sony" name="sony" value="sony" <?php if(in_array("sony",$s)) echo "checked"; ?>>Sony
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="check1">
                            <input type="checkbox" class="form-check-input" id="nikon" name="nikon" value="nikon" <?php if(in_array("nikon",$s)) echo "checked"; ?>>Nikon
                        </label>
                    </div>
                <?php } elseif($cat=='watches'){?>
                    <div class="form-check">
                        <label class="form-check-label" for="check1">
                            <input type="checkbox" class="form-check-input" id="all" name="all" value="all" checked>All
                        </label>
                    </div>
                    
                    <div class="form-check">
                        <label class="form-check-label" for="check2">
                            <input type="checkbox" class="form-check-input" id="samsung" name="samsung" value="samsung" <?php if(in_array("samsung",$s)) echo "checked"; ?>>Samsung
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="check1">
                            <input type="checkbox" class="form-check-input" id="honnor" name="honor" value="honor" <?php if(in_array("honor",$s)) echo "checked"; ?>>Honor
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="check1">
                            <input type="checkbox" class="form-check-input" id="huawei" name="huawei" value="huawei" <?php if(in_array("huawei",$s)) echo "checked"; ?>>Huawei
                        </label>
                    </div>
                <?php }?>
                   <input type="submit" value="submit" name="fsub" class="btn btn-primary my-3"> 
            </div>
            </form>
        </aside>

        <?php 
            $qc = mysqli_query($conn,@$sqlc);
            // $qc = mysqli_query($conn,"select count(*) from productdetails where category = '$cat' ") or die(mysqli_error($conn));
            $v=mysqli_fetch_assoc($qc)['sumcount'];
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
            // $qu = mysqli_query($conn,$sql) or die(mysqli_error($conn));
            
            $qu = mysqli_query($conn,@$sql);
            while($q=mysqli_fetch_assoc($qu)){
        ?>
        <div class="card result-card border-bottom ">
            <div class="card-body py-2">
                <div class="row">

                    <div class="img proimg col-3 d-flex">
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
                            <h3 class="text-dark"> &#8377; <?php echo $q['newPrice'];?></h3>
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
                                $query1['page'] = $i ;
                                $query_result1 = http_build_query($query1);
                            if ($i==$pn) { 
                                $pagLink .= '<li class="page-item active"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?'.$query_result1.'">'.$i.'</a></li>';
                            }             
                            else  { 
                                $pagLink .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?'.$query_result1.'">'.$i.'</a></li>';
                            } 
                            };   
                            echo $pagLink;   
                        ?> 
                        <li class="page-item"><a class="page-link" href="<?php $link;?>&page=<?php echo $pn+1;?>">Next</a></li>
                </ul>
            </div>
        </div>
        </section>
</div>

<?php include 'footer.php'; ?>