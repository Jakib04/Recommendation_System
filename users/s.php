
<?php session_start();
include "head.php";
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
   
    
    <ul class="nav navbar-nav navbar-right">
     <li><a href="/ec/user/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      
    </ul>
  </div>
</nav>
<div class="panel-body">
<form action="f.php" method="post">
<div class="form-group"> <label for="username">Rating </label>
	<div class="col-xs-2">
<input type="number" name="productrating" id="productrating" class="form-control" required>
</div>
 <input type="hidden" name="id" value="<?php echo   $_POST['id']?>" >
 <input type="hidden" name="u_id" value="<?php echo   $_POST['u_id']?>" >
</div>
<div class="form-group">
	<div class="col-xs-2">
 <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Give Rating" required>
 </div>
</div>
</form>
</div>
