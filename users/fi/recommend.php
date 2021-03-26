
<!doctype html>
<html lang="en">
 <head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn. bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> <head>
</head>
<div class="container"> <h2><div class="well text-center"> PRODUCT RECOMENDATION SYSTEM </div></h2>

<?php
include("db.php");
include("r.php");
$ps=mysqli_query($con, "select * from product");
$matrix=array();
$f=array();
while ($p = mysqli_fetch_array($ps)){
  $ui=$p ['user_id'];
$users= mysqli_query($con, "select username from user where id = $ui");
$username = mysqli_fetch_array($users);
 $matrix [$username['username']] [$p ['product_name']]=$p ['rating'];
 $f[$username['username']]=1;


}
$users= mysqli_query($con, "select username from user where id = $_GET[id]");
$username = mysqli_fetch_array($users);
/*if (!array_key_exists($username['username'], $f)){
  echo "Purchase Something";
}
else
var_dump(getRecommendation($matrix,$username['username']));=*/
?>
<div class="panel panel-default">
<div class="panel-heading">
<h2> <a class="btn btn-success" href="adduser.php"> Add Users</a>
<a class="btn btn-info pull-right" href="index.php"> Back </a>
</h2></div></div>

<div class="panel-body">
<table class="table table-striped">
<th> Prtoduct Name </th>
<th> Prtoduct Rating</th>


<?php
$recommend=array();
$recommend=getRecommendation($matrix,$username['username']);
foreach ($recommend as $product => $rating) {
?>
<tr>
<td><?php echo $product; ?> </td>
<td><?php echo $rating; ?> </td>

</tr>
<?php } ?>
</table>
</div>
