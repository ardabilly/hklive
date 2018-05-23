<?php
 include('../config/Class_Tool.php');
 $db = new Class_Tool();

 if (isset($_GET["hapus"])) {
		
		$db->hapus($_GET["id"]);
		echo "<script>window.location.href='tool.php';</script>";
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
		if(isset($_GET["menu"]) && $_GET["menu"] === "upload")
		{
			
		include_once('tool/input_tool.php');  

		}  
		else
		{
			include_once('tool/list_tool.php');
		}

		?>

	</div>
	

<?php include('../includes/footer.php');?>
  
  </body>
</html>
