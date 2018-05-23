<?php
 include('../config/Class_Divisi.php');
 $db = new Class_Divisi();

 if (isset($_GET["hapus"])) {
		
		$db->hapus_divisi($_GET["id"]);
		echo "<script>window.location.href='divisi.php';</script>";
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

    <title>HKLive | Divisi</title>

	<?php include('includes/header.php');?>

  
  </head>

  <body>
 
	
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
     
<?php include('includes/navbar.php');?>

<?php 
if(isset($_GET["hal"]) && $_GET["hal"] === "input")
{
    
    include_once('divisi/input_divisi.php');  

}  
elseif(isset($_GET["aksi"]) && $_GET["aksi"] === "edit")
{
    
    include_once('divisi/edit_divisi.php');  

}
else
{
    include_once('divisi/list_divisi.php');
}

?>
  
  </section>          <!-- page end-->
        
<?php include('../includes/footer.php');?>
  

  </body>
</html>
