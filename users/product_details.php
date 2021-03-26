<nav class="navbar navbar-inverse">
  <div class="container-fluid">
   
    
    <ul class="nav navbar-nav navbar-right">
     <li><a href="/ec/users/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      
    </ul>
  </div>
</nav>
<?php
session_start();
include("head.php");
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"youtube_project");

$id=$_GET['id'];
$res = mysqli_query($link, "select * from product where id=$id");
            while ($row = mysqli_fetch_array($res)){
            ?>




            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img src="../admin/<?php echo $row["product_image"]; ?>" alt=""/>

                        </div>


                    </div>


                    <form name="form1" action="" method="post">
                        <div class="col-sm-7">
                            <div class="product-information"><!--/product-information-->
                                <img src="images/product-details/new.jpg" class="newarrival" alt=""/>

                                <h2><?php echo $row["product_name"]; ?></h2>

                                <p>Web ID: <?php echo $row["id"]; ?></p>

								<span>
									<span>US $<?php echo $row["product_price"]; ?></span>

								</span>



                            </div>
                            <!--/product-information-->
                        </div>
                </div>
                <!--/product-details-->
                </form>
                <!-- end here-->
                <div class="panel-body">
                <form action="s.php" method="post">

                <div class="form-group">
                 <input type="submit" name="submit" id="submit" value="Purchase" class="btn btn-primary" required>

                 <input type="hidden" name="id" value="<?php echo   $row["id"];?>" >
                  <input type="hidden" name="u_id" value="<?php echo   $_SESSION['u_id'];?>" >
                </div>
                </form>
                </div>

                <?php

                }
                ?>





<script src="js/jquery.js"></script>
<script src="js/price-range.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
</body>
</html>
