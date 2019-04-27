<?php require '../conn.inc.php'; ?>

<?php include 'header.php';?>
<script>
function dispatched (id){
       $.ajax({
            url:"dispatched.php?id="+id, //the page containing php script
            type: "POST", //request type
            success:function(result){
                alert("Product has been dispatched");
                window.location="newOrders.php";
           }
         });
    }
</script>
<div class="container my-3">
                <h3>New Orders</h3>
                <div class="qas">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Order Id</th>
                        <th>Order Date</th>
                        <th>Txn Id</th>
                        <th>Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  
                        $qu=mysqli_query($conn,"select distinct * from transactions where status=0") or die(mysqli_error($conn));
                        while($qe=mysqli_fetch_assoc($qu)){ 
                    ?>
                    <tr>
                        <td><?php echo $qe['id'];?></td>
                        <td><?php echo $qe['date'];?></td>
                        <td><?php echo $qe['txnId'];?></td>
                        <td><?php echo $qe['amount'];?></td>
                        <td><a href="viewOrder.php?id=<?php echo $qe['id'];?>" class="btn btn-primary btn-sm">View Order</a></td>
                        <td><button class=" btn btn-sm btn-danger" onclick='dispatched(<?php echo $qe['id'];?>)'> Dispatched </button></td>
                    </tr>
                        <?php } ?>
                    </tbody>
                </table>
                  
            </div>
    </div>
    <?php include 'footer.php';?>
