<?php
 include('../config/Class_Cctv.php');
 $db = new Class_Cctv();

 if (isset($_GET["hapus"])) {
		
		$db->hapus_cctv($_GET["id"]);
		echo "<script>window.location.href='cctv.php';</script>";
	}
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <title>HKLive | Cctv</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
	<?php include('includes/header.php');?>

  </head>
  <body>
  <!-- container section start -->
	<div id="container" class="">
		<?php include('includes/navbar.php');?>
	  
		<?php 
		if(isset($_GET["hal"]) && $_GET["hal"] === "input")
		{
			
		include_once('url/input_url.php');  

		}
		elseif(isset($_GET["aksi"]) && $_GET["aksi"] === "edit")
		{
			
		include_once('url/edit_url.php');  

		}  
		else
		{
			include_once('url/list_cctv.php');
		}

		?>

	</div>

<?php include('../includes/footer.php');?>

  </body>
</html>
