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

    <title>HKLive | Profile</title>

    <?php include('includes/header.php');?>
</head>

  <body >
  <!-- container section start -->
  <section id="container" class="">
  
		<?php include('includes/navbar.php');?>
	<div class="col-sm-12 text-center">
		
		<?php 
		if(isset($_GET["hal"]) && $_GET["hal"] === "change")
		{
			
			include_once('change/change.php');  

		}
		elseif(isset($_GET["change"]) && $_GET["change"] === "username")
		{
			
			include_once('change/change_username.php');  

		}
		elseif(isset($_GET["change"]) && $_GET["change"] === "password")
		{
			
			include_once('change/change_password.php');  

		}
		else{
		?>
		<div class="strem">
			<?php
			if($_SESSION['username'] == "administrator"){
			?>
			<a href='index.php' class="adm">
				<span style='font-size:50px; margin-left:-50%;' class='text-uppercase'><?=$_SESSION['username']?></span></a>
			<?php
			}
			else{
			
				foreach($db->datauser($_GET['id']) as $row){
			?>
			<div class='panel panel-default col-sm-6 text-justify' style='padding:20px;'>
				<div class='panel-body'>
					<div class='col-sm-12'>
						<span>Nama : </span><span><?=$row['first_name']?><?=$row['last_name']?></span><br>
						<span>Nama Proyek : </span><span><?=$row['nama_proyek']?></span><br>
						<span>Jabatan : </span><span><?=$row['nama_jabatan']?></span><br><br>
					</div>
					<div class="col-sm-12" style="padding-bottom: 10px; ">
						<a href='streaming.php' class='btn btn-default' style="background-color: #333; color:#fff;margin-left:35%;">Streaming Cctv</a>
					</div>
					<div class='col-sm-12'>
						<a href='profile.php?change=username' class='btn btn-primary' style='margin-left:10%;'>Change Username</a>
						<a href='profile.php?change=password' class='btn btn-danger'>Change Password</a> 	
					</div>
			<?php
				}
			}
				
				?>
			</div>
		  </div>
		</div>
		  <?php
		}
		?>

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
		margin-top: 15%; margin-left:35%;
	}
	.strem span{
		font-size: 20px;
		font-family: montserrat;
	}
	.btn{
		font-size:13px;
	}
	.adm:hover{
		color:#ec1d23;
		transition: 1.3s;
	}
</style>