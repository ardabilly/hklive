<?php
 include('../config/Class_Jabatan.php');
 $db = new Class_Jabatan();

 if (isset($_GET["hapus"])) {
		
		$db->hapus_jabatan($_GET["id"]);
		echo "<script>window.location.href='jabatan.php';</script>";
	}
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <title>HKLive | Jabatan</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
  
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
    
    include_once('jabatan/input_jabatan.php');  

}  
elseif(isset($_GET["aksi"]) && $_GET["aksi"] === "edit")
{
    
    include_once('jabatan/edit_jabatan.php');  

}
else
{
    include_once('jabatan/list_jabatan.php');
}

?>  
              <!-- page end-->
  </section>

  <?php include('../includes/footer.php');?>
  

  </body>
</html>
