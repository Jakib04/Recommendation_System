<?php

include("header.php");
include("db.php");
$flag=0;
if (isset($_POST['submit'])){

$result =
mysqli_query($con,
 "insert into product (user_id,product_name,rating) values('$_POST[id]','$_POST[productname]','$_POST[productrating]')");

 if ($result) $flag=1;
 }
 ?>

<div class="panel panel-default">
<div class="panel-heading">
<h2> <a class="btn btn-success" href="add_product.php"> Add Products</a>
<a class="btn btn-info pull-right" href="index.php"> Back </a>
</h2></div></div>

<?php if ($flag) { ?>
<div class="alert alert-success">Product Successfully Inserted in the database </div>
<?php } ?>
