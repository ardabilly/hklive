<?php

include('../config/Class_User.php');
$db = new Class_User();

if (isset($_GET["hapus"])) {
	
	$db->hapus_user($_GET["id"]);
	echo "<script>window.location.href='user.php';</script>";
}
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
	
    <title>HKLive | User </title>


	<?php include('includes/header.php');?>

  </head>
 
  <!-- container section start -->
  <section id="container" class="">

<?php include('includes/navbar.php'); ?>		 

<?php 
 
if(isset($_GET["aksi"]) && $_GET["aksi"] === "edit")
{
    
    include_once('user/edit_user.php');  

}
elseif(isset($_GET["hal"]) && $_GET["hal"] === "input")
{
    
    include_once('user/input_user.php');  

}  
else
{
    include_once('user/list_user.php');
}

?>              

    </section> <!-- page end-->
 	
<?php include('../includes/footer.php');?>
  
  </body>
</html>
