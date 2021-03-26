
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
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
   
    
    <ul class="nav navbar-nav navbar-right">
     <li><a href="/ec/users/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      
    </ul>
  </div>
</nav>
<div class="container"> <h2><div class="well text-center">Recommended Products </div></h2>


<?php

session_start();
include("recommend.php");
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"youtube_project");

$ps=mysqli_query($link, "select * from products");
$matrix=array();
$f=array();
while ($p = mysqli_fetch_array($ps)){
  $ui=$p ['user_id'];
$users= mysqli_query($link, "select username from user where user_id  = $ui");
$username = mysqli_fetch_array($users);
$up=$p ['p_id'];
$u= mysqli_query($link, "select product_name from product where id  = $up");
$q = mysqli_fetch_array($u);
 $matrix [$username['username']] [$q[ 'product_name']]=$p ['rating'];
 $f[$username['username']]=1;


}
$user= mysqli_query($link, "select username from user where user_id = $_SESSION[u_id]");
$usernam = mysqli_fetch_array($user);
/*if (!array_key_exists($username['username'], $f)){
  echo "Purchase Something";
}
else
var_dump(getRecommendation($matrix,$username['username']));=*/
?>



<?php
//session_start();
include "header.php";
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"youtube_project");

?>
<link href="pagination/css/pagination.css" rel="stylesheet" type="text/css" />
<link href="pagination/css/A_green.css" rel="stylesheet" type="text/css" />
<div class="col-sm-9 padding-right">
<div class="features_items"><!--features_items--> <?php

//include("pagination/function.php");
  $statement = "product"; //you have to pass your query over here
        ?>
<div class="panel-body">


<?php
$recommend=array();
$recommend=getRecommendation($matrix,$usernam['username']);
$lop=0;
$lops=2;
if(!is_null($recommend) ){
  $lops=3;
foreach ($recommend as $product => $rating) {

$res=mysqli_query($link,"select * from {$statement} where product_name='$product'");
$lop++;
if($lop<4){
while($row=mysqli_fetch_array($res))
{

?>


 <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="../admin/<?php echo $row["product_image"]; ?>" alt="" width="180" height="381" />
                                    <h2>$<?php echo $row["product_price"]; ?></h2>
                                    <p><?php echo $row["product_name"]; ?></p>
                                    <a href="product_details.php?id=<?php echo $row["id"]; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View Description</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$<?php echo $row["product_price"]; ?></h2>
                                        <p><?php echo $row["product_name"]; ?></p>
                                        <a href="product_details.php?id=<?php echo $row["id"]; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View Description</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


<?php

}

} }
}
if($lops==2){
 
$res=mysqli_query($link,"select * from {$statement} ");
while($row=mysqli_fetch_array($res))
{

?>


 <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="../admin/<?php echo $row["product_image"]; ?>" alt="" width="180" height="381" />
                                    <h2>$<?php echo $row["product_price"]; ?></h2>
                                    <p><?php echo $row["product_name"]; ?></p>
                                    <a href="product_details.php?id=<?php echo $row["id"]; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View Description</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$<?php echo $row["product_price"]; ?></h2>
                                        <p><?php echo $row["product_name"]; ?></p>
                                        <a href="product_details.php?id=<?php echo $row["id"]; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View Description</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


<?php

}

} 





                    ?>




                  </div>

                
                </div><!--features_items-->
            </div>
        </div>
    </div>
</section>


