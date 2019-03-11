<?php require 'conn.inc.php'; ?>

<?php

    if(isset($_POST['newsletterSubmit'])){
        $email = $_POST['email'];

        mysqli_query($conn,"Insert into newsletter(email) values ('$email')") or die(mysqli_error($conn));
    }

?>

<footer>
    <section class="newsletter text-white bg-warning">
        
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6">
                    <i class="fa fa-paper-plane icon-plane mr-4" aria-hidden="true"></i>
                    <span>Subscribe to our NewsLetter</span>
                </div>
                <div class="col-sm-6">
                    <form method="POST">  
                                <div class="input-group">
                                    <input type="text" name="email" class="form-control" placeholder="Email" required>
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" type="submit" name="newsletterSubmit">Subscribe</button> 
                                    </div>
                                </div>   
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-dark text-white-50">
        <p class="mx-auto my-0 text-center p-4">&copy; Website designed and developed by <span class="text-white"> Amitoj Singh Ahuja</span>.</p>
    </div>
</footer>
</body>
</html>