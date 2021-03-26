<?php
include("header.php");
include("db.php");
 ?>

 <div class="panel panel-default">
 <div class="panel-heading">
 <h2> <a class="btn btn-success" href="adduser.php"> Add Users</a>
 <a class="btn btn-info pull-right" href="index.php"> Back </a>
 </h2></div></div>

<div class="panel-body">
<table class="table table-striped">
<th> User Name </th>
<th> Add Prtoduct </th>
<th> Show Prtoduct </th>
<th> Show Recommendation </th>
<?php $result = mysqli_query($con,"select * from user");
while ($row = mysqli_fetch_array($result)){
?>
<tr>
<td><?php echo $row['username']; ?> </td>
 <td><form action="add_product.php">
 <input type="submit" name="add_product" class="btn btn-primary" value="Add Product">
  <input type="hidden" name="id" value="<?php echo $row['id'] ?>" >
  </form>
</td>
 <td><form action="show_product.php">
 <input type="submit" name="show_product" class="btn btn-primary" value="Show Product">
  <input type="hidden" name="id" value="<?php echo $row['id'] ?>" >
  </form>
</td>
<td><form action="recommend.php">
<input type="submit" name="show_recommendation" class="btn btn-primary" value="Show Recommendation">
 <input type="hidden" name="id" value="<?php echo $row['id'] ?>" >
 </form>
</td>
</tr>
<?php } ?>
</table>
</div>
