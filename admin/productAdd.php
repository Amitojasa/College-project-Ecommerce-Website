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
  
    
    <title>Document</title>
</head>
<body>
<div class="container">
<h2>Product Entry:</h2>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control" id="title">
        </div>
        <div class="form-group">
            <label for="image1">Image1:</label>
            <input type="file" name="image1" class="form-control" id="image">
        </div>
        <div class="form-group">
            <label for="image2">Image2:</label>
            <input type="file" name="image2" class="form-control" id="image">
        </div>
        <div class="form-group">
            <label for="image3">Image3:</label>
            <input type="file" name="image3" class="form-control" id="image">
        </div>
        <div class="form-group">
            <label for="category">Select Category:</label>
            <select name="category" class="form-control" id="category">
                <option value="laptop">Laptop</option>
                <option value="mobile">Mobile</option>
                <option value="camera">Camera</option>
                <option value="watches">Smart watches</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="desc">Description:</label>
            <textarea name="desc" id="desc" class="form-control" cols="30" rows="7" placeholder="separate with ;"></textarea>
        </div>
        
        <div class="form-group">
            <label for="newPrice">New Price:</label>
            <input type="number" class="form-control" name="newPrice" id="newPrice">
        </div>
        <div class="form-group">
            <label for="oldPrice">Old Price:</label>
            <input type="number" class="form-control" name="oldPrice" id="oldPrice">
        </div>
        <div class="form-group">
            <label for="stock">Stock Quantity:</label>
            <input type="number" class="form-control" name="stockQuant" id="stock">
        </div>
        
        <div class="form-group">
            <label for="details">Details:</label>
            <textarea name="details" class="form-control" id="details" cols="30" rows="10" placeholder="Enter data in `key:value;` format"></textarea>
        </div>
        <div class="form-group">
            <label for="warranty">Warranty Details:</label>
            <textarea name="warranty" class="form-control" id="warranty" cols="30" rows="5" placeholder="Warranty details"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        
    </form>
    </div>
</body>
</html>