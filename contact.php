<?php include 'header.php'; ?>
<link rel="stylesheet" href="css/contact.css">


    <section class="map">
        <div class="card text-center m-5 shadow">
            <div class="card-body">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3447.7086125245874!2d75.69654474014075!3d30.21686297537334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3910f8bddb2f8cf9%3A0x9b102949195de359!2sSLIET+Computer+Block!5e0!3m2!1sen!2sin!4v1549301694792" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </iframe>
            </div>
        </div>
    </section>
    <hr>
    <section class=" card-deck mx-0 mb-5 mt-4 justify-content-between">
        <div class="card shadow email">
            <div class="card-head text-center"><i class="fa fa-envelope icon"></i></div><hr>    
            <div class="card-body">gadgetspick@gmail.com</div>
        </div>
        <div class="card shadow phone text-center">
            <div class="card-head"><i class="fa fa-phone icon"></i></div>  <hr>
            <div class="card-body">+91 94171-71800</div>
        </div>
        <div class="card shadow address">
            <div class="card-head text-center"><i class="fa fa-home icon"></i></div>  <hr>
            <div class="card-body">SLIET Computer Block
Sangrur, Punjab 148106</div>
        </div>
    
    </section>
    <hr>

    <section class="my-4">
        
        <div class="container justify-content-center">
        <div class="row mx-5">
        <div class="col-md-12">
        <h2 class="text-secondary bg-light text-center py-2 mb-3">Message Us!</h2>
        <form action="mailto.php"  method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="email">E-mail Id</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="E-mail Id">
            </div>
            <div class="form-group">
                <label for="msg">Message</label>
                <textarea name="msg" id="msg" class="form-control" rows="5" placeholder="Message"></textarea>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary w-50">Submit</button>
            </div>

        </form>
        </div>
        </div></div>
    </section>


<?php include 'footer.php'; ?>