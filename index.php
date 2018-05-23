<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>HKLive</title>

    <?php include('includes/header.php');?>
</head>

  <body >
  <!-- container section start -->
  <section id="container" class="">

		<?php include('includes/navbar.php');?>
		
	<div class="col-sm-12 text-center">
		

		<div class="strem animated slideInUp">
			<span style='color:#ec1d23;'>Hutamakarya</span><span style='color:;'>Live</span>
		</div>
		<div class='link col-sm-12 animated slideInUp'>
			<a href="streaming.php" class="linked" style="margin-top:-8px;">
				<img src="img/akap.png" alt="Streaming" class="img img-circle">
				<p class="">streaming</p>
			</a>
			<?php
			 if($_SESSION['username']=='administrator')
			  {
			?>
			
			<a href="manage/index.php" class="linked" style="">
				<!-- <img src="img/akap2.png" alt="Streaming" class="img img-circle"> -->
				<i class="fa fa-pencil ts" style="font-size: 38px; color:#fff;"></i>
				<p class="" style="margin-top: 6px">Manage Data</p>
			</a>
			
			<?php
			  }
			  ?>
			  
			<a href="info.php" class="linked" style="" >
				<!-- <img src="img/akap2.png" alt="Streaming" class="img img-circle"> -->
				<i class="fa fa-info ts2" style="font-size: 38px;  color:#fff;"></i>
				<p class="" style="margin-top: 6px">Info</p>
			</a>
			
			<a href="profile.php?id=<?=$_SESSION['id_user']?>" class="linked" style="margin-left:5%;" >
				<!-- <img src="img/akap2.png" alt="Streaming" class="img img-circle"> -->
				<i class="fa fa-user ts2" style="font-size: 35px;  color:#fff;"></i>
				<p class="" style="margin-top: 6px">Profile</p>
			</a>
			
			<?php 
			if($_SESSION['username'] != "administrator"){
			?>
			<a href="callus.php" class="linked" style="margin-left:5%;" >
				<!-- <img src="img/akap2.png" alt="Streaming" class="img img-circle"> -->
				<i class="fa fa-phone ts2" style="font-size: 38px;  color:#fff;"></i>
				<p class="" style="margin-top: 6px">Call Us</p>
			</a>
			<?php
			}
			?>
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
		margin-top: 15%;
	}
	.strem span{
		font-size: 60px;
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
	.ts2{
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
	.link{
		margin-left:27%;
	}
	.linked{
		float:left;
		margin-left:4%;
	}

	p{
		color: #333;
	}
	.linked:hover
	{	
		border-bottom:1px solid lightblue;
		padding:5px;
		color:red;
	}
	
	.linked p:hover
	{
		color:red;
	}
	
</style>