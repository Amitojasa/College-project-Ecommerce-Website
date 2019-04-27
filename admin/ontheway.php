<?php require '../conn.inc.php'; ?>

<?php include 'header.php';?>
<script>
function delivered (id){
       $.ajax({
            url:"deliveredstat.php?id="+id, //the page containing php script
            type: "POST", //request type
            success:function(result){
                alert("Product has been delivered");
                window.location="ontheway.php";
           }
         });
    }
</script>
<div class="container my-3">
<h3>Dispatched Orders</h3>
                <div class="qas">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Order Id</th>
                        <th>Dispatch Date</th>
                        <th>Txn Id</th>
                        <th>Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  
                        $qup=mysqli_query($conn,"select * from orderstatus where status='dispatched' ") or die(mysqli_error($conn));
                        while($pp=mysqli_fetch_assoc($qup)){
                        $oid=$pp['orderId'];
                        $qu=mysqli_query($conn,"select * from transactions where id=$oid") or die(mysqli_error($conn));
                        
                        while($qe=mysqli_fetch_assoc($qu)){ 
                    ?>
                    <tr>
                        <td><?php echo $qe['id'];?></td>
                        <td><?php echo $pp['dispatchdate'];?></td>
                        <td><?php echo $qe['txnId'];?></td>
                        <td><?php echo $qe['amount'];?></td>
                        <td><a href="viewOrderal.php?id=<?php echo $qe['id'];?>" class="btn btn-primary btn-sm">View Order</a></td>
                        <td><button class=" btn btn-sm btn-danger" onclick='delivered(<?php echo $qe['id'];?>)'> Delivered </button></td>
                    </tr>
                        <?php }} ?>
                    </tbody>
                </table>
                  
            </div>
    </div>
    <?php include 'footer.php';?>
