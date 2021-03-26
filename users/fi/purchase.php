

<div class="panel-body">
<form action="d.php" method="post">
<div class="form-group"> <label for="username">Rating </label>
<input type="number" name="productrating" id="productrating" class="form-control" required>
 <input type="hidden" name="productname" value="<?php echo $_POST['productname'] ?>" >
 <input type="hidden" name="id" value="<?php echo   $_POST['id']?>" >
</div>
<div class="form-group">
 <input type="submit" name="submit" id="submit" class="btn btn-primary" required>
</div>
</form>
</div>
