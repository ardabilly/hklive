<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>HKLive | Dashboard</title>

    <?php include('includes/header.php');?>
</head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
	<?php include('includes/navbar.php');?>
	<div class='col-sm-12'>
		<div class="strem text-center animated slideInUp">
				<span style='color:#ec1d23;'>Managing&nbsp;</span><span>Data</span><hr>
		</div>
	</div>
  </section>	

<script>

// document.oncontextmenu=new Function("return false;")
// $(document).mousedown(function(e){
// if(e.which === 2 ){
//    alert("Middle click is disable")    
//    return false;
// }
// if(e.shiftKey && e.which === 1 ){
//    alert("Combination Shift+Left click is disable")    
//    return false;
// }
// if(e.ctrlKey && e.which === 1 ){
//    alert("Combination Ctrl+Left click is disable")    
//    return false;
// }

// });

</script>


<?php include('../includes/footer.php');?>
  
  </body>
</html>

<style>
	 body{
	 	margin:0; padding: 0;
	 }
	.strem
	{
		margin-top: 15%;
	}
	.strem span{
		font-size: 50px;
		font-weight: bold;
		font-family: montserrat;
	}
	.ts{
		padding:8px; 
		height: 55px;
		width: 55px;
		border-radius: 30px;
		background-color: #58595b;
	}
	.img
	{
		width: 80px;
	}

	p{
		color: #333;
	}
	.linked p:hover
	{
		color:red;
	}
</style>