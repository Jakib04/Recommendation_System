<?php
session_start();
if (isset($_GET['id'])){
  $_SESSION['id']=$_GET['id'];
}
include("header.php");


 ?>



<div class="panel-body">
<form action="purchase.php" method="post">

<div class="form-group"> <label for="username">Products Name </label>
<input type="text" name="productname" id="productname" class="form-control" required>
</div>


<div class="form-group">
 <input type="submit" name="submit" id="submit" class="btn btn-primary" required>
   <input type="hidden" name="id" value="<?php echo   $_SESSION['id']?>" >

</div>
</form>
</div>
