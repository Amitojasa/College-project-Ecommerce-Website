<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
<h2>Product Details:</h2>

    <form method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-5">
                <div class="row">
                    <div class="col-sm-4">
                        <label for="category">Select Category:</label>
                    </div>
                    <div class="col-sm-8">
                        <select name="category" class="form-control" id="category">
                            <option value="laptop">Laptop</option>
                            <option value="mobile">Mobile</option>
                            <option value="camera">Camera</option>
                            <option value="watches">Smart watches</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class=" offset-1 col-sm-5 text-right">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-search"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Search">
                </div> 
            </div>
            <div class="col-sm-1">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
       
        </div>
        
    </form>
    
<br><br>
<h3>Choose Product:</h3>
    <div class="results border">
    
        <div class="row p-2">
            <div class="col-md-3 img">
                <img src="laptop.jpg" alt="GadgetsPick">
            </div>
            <div class="col-md-4 text title">Title</div>
            <div class="col-md-3 price">price</div>
            <div class="col-md-2">
                <button class="btn btn-primary">View</button>
            </div>
        </div>
    </div>
    </div>
</body>
</html>