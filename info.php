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

    <title>HKLive | Info</title>

    <?php include('includes/header.php');?>
</head>

  <body >
  <!-- container section start -->
  <section id="container" class="">
  
		<?php include('includes/navbar.php');?>
	<div class="col-sm-12 text-center">
		

		<div class="strem">
			<div class='panel panel-default col-sm-8 text-justify' style='padding:20px;'>
				
			<h4 class='text-center'>Loremipsum</h4>
  <p id="typed5"></p>
	`	<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vestibulum pellentesque diam quis posuere. Praesent ultrices ex eget tristique venenatis. Morbi consectetur lacinia porta.<br><br>
		</p>
		<p>
		<ol style='color:#999;'>
			<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><br>
			<li>Sed in diam sed lorem vestibulum congue in rutrum leo.</li><br>
			<li>Quisque in mauris in felis luctus dictum.</li>
			</ol>
		</p>
<a href='index.php' class='btn btn-default'>back</a>
				
		</div>
	</div>

  </section>	
<script src="./assets/typed.min.js"></script>
<script>
   var typed5 = new Typed('#typed5', {
    strings: ['&quot;Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...&quot; <br> &quot;Tidak ada yang menyukai kepedihan, yang mencarinya dan ingin merasakannya, semata karena pedih rasanya...&quot;'],
    typeSpeed: 50,
    backSpeed: 30,
    cursorChar: '',
    // shuffle: true,
    smartBackspace: false,
    loop: false
  });
</script>
	
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