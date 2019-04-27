<?php require '../conn.inc.php'; ?>

<?php include 'header.php';?>
<div class="container my-3">
<h3>Delivered Orders</h3>
                <div class="qas">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Order Id</th>
                        <th>Delivery Date</th>
                        <th>Txn Id</th>
                        <th>Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  
                        $qup=mysqli_query($conn,"select * from orderstatus where status='delivered'") or die(mysqli_error($conn));
                        while($pp=mysqli_fetch_assoc($qup)){
                        $oid=$pp['orderId'];
                        $qu=mysqli_query($conn,"select * from transactions where id=$oid") or die(mysqli_error($conn));
                        
                        while($qe=mysqli_fetch_assoc($qu)){ 
                    ?>
                    <tr>
                        <td><?php echo $qe['id'];?></td>
                        <td><?php echo $pp['deliverydate'];?></td>
                        <td><?php echo $qe['txnId'];?></td>
                        <td><?php echo $qe['amount'];?></td>
                        <td><a href="viewOrderal.php?id=<?php echo $qe['id'];?>" class="btn btn-primary btn-sm">View Order</a></td>
                    </tr>
                        <?php }} ?>
                    </tbody>
                </table>
                  
            </div>
    </div>
    <?php include 'footer.php';?>
