<?php
 include('../config/Class_Proyek.php');
 $db = new Class_Proyek();

 if (isset($_GET["hapus"])) {
		
		$db->hapus_proyek($_GET["id_proyek"]);
		echo "<script>window.location.href='proyek.php';</script>";
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

    <title>HKLive | Proyek </title>

	<?php include('includes/header.php');?>

  </head>

  <body>
	
  <!-- container section start -->
  <section id="container" class="">
  
			<?php include('includes/navbar.php');?>


<?php 
if(isset($_GET["aksi"]) && $_GET["aksi"] === "edit")
{
    
    include_once('proyek/edit_proyek.php');  

}  
elseif(isset($_GET["hal"]) && $_GET["hal"] === "input")
{
    
    include_once('proyek/input_proyek.php');  

}
else
{
    include_once('proyek/list_proyek.php');
}

?>
              <!-- page end-->

  </section>
	
<?php include('../includes/footer.php');?>
  
  </body>
</html>


