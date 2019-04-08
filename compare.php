<?php include 'header.php'; ?>

<?php
    $cat='%';
?>
<section class="comparision">
    <form method="post">
        <select name="category" id="cat" class="form-control" placeholder="select a category">
            <option value="%" <?php if($cat=='%')echo "selected";?>>all</option>
            <option value="laptop" <?php if($cat=='laptop')echo "selected";?>>laptop</option>
            <option value="mobile" <?php if($cat=='mobile')echo "selected";?>>mobile</option>
            <option value="camera" <?php if($cat=='camera')echo "selected";?>>camera</option>
            <option value="watches" <?php if($cat=='watches')echo "selected";?>>Smart Watches</option>
            <option value="other" <?php if($cat=='other')echo "selected";?>>Other</option>
        </select>

        <select name="category" id="cat" class="form-control" placeholder="select a category">
            <option value="%" <?php if($cat=='%')echo "selected";?>>all</option>
        </select>
        <select name="category" id="cat" class="form-control" placeholder="select a category">
            <option value="%" <?php if($cat=='%')echo "selected";?>>all</option>
        </select>


        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>

</section>



<?php include 'footer.php'; ?>