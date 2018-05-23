<?php

include_once('config/database.php');
$db = new Class_Data();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>HKLive | Call US</title>

    <?php include('includes/header.php');?>
</head>

  <body >
  <!-- container section start -->
  <section id="container" class="">
  
		<?php include('includes/navbar.php');?>
	<div class="col-sm-12 text-center">
		

		<div class="strem">
			<div class='panel panel-default col-sm-8 text-justify' style='padding:20px;'>
				<h3 class='text-center'>Lorem Ipsum</h3><p>
"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</p>
<p>
"Tidak ada yang menyukai kepedihan, yang mencarinya dan ingin merasakannya, semata karena pedih rasanya..."</p>
				<p>
				<i class='fa fa-phone'></i> +623819937855 &nbsp; <i class='fa fa-envelope'></i> info@hklive.com 
				</p>
<a href='index.php' class='btn btn-default'>back</a>
				
		</div>
	</div>

  </section>	
	
<?php include('includes/footer.php');?>
  
  </body>
</html>

<style>
	 body{
	 	margin:0; padding: 0;
		background-color:#fff;
	 }
	.strem
	{
		margin-top: 7%; margin-left:25%;
	}
	.btn{
		font-size:13px;
	}
	
</style>