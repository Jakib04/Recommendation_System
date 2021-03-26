<?php session_start();?>
<?php
include "header.php";
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"youtube_project");

if (isset($_POST['submit'])){

$result =
mysqli_query($link,
 "insert into products (user_id,p_id,rating) values('$_SESSION[u_id]','$_POST[id]','$_POST[productrating]')");


 }
 ?>
 <script type="text/javascript">
 window.location="shop.php";
 </script>
