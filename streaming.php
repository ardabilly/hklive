<?php 
include('config/database.php');
$db = new Class_Data();

include('config/Class_Cctv.php');
$cv = new Class_Cctv();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>HKLive | Streaming</title>

    <?php include('includes/header.php');?>
  </head>

  <body>
      
      <?php 
	  include('includes/navbar.php');?>


	<div class='container'>
		

    <?php include('sidebar.php');?>
		<div class="col-sm-12 text-center">
		
				<?php 
				if(isset($_GET["menu"]) && $_GET["menu"] === "stream")
				{
		
					foreach($cv->tampil_urlcctv($_GET['id']) as $row){
				?>
					<div class='col-sm-3 '  style='margin-left:-10%; margin-top:5%;'>

				
						<h3>Info CCTV</h3><hr>
				<?php
					foreach($cv->tampil_proyekcctv($_GET['id']) as $rw){
				?>
				
				<div class='container text-justify'>
						<span>Nama Proyek : <?=$rw['nama_proyek']?></span><br>
						<span>Lokasi Proyek : <?=$rw['lokasi_proyek']?></span><br>
						<span>Nama Divisi : <?=$rw['nama_divisi']?></span><br>
						<span>No Proyek : <?=$rw['no_proyek']?></span><br>
						<span>Pemilik Proyek : <?=$rw['pemilik_proyek']?></span>
						
				</div>
					</div>
					<div class="col-sm-12 embed-responsive embed-responsive-16by9" style='heigth:50%; margin-left:15%; margin-top:-20%;'>
					  <iframe class="embed-responsive-item" src="http://<?=$row['url_cctv']?>"></iframe>
					</div>
			
				<?php
					}
					}
				}
				else{
				?>
				<div class="strem thumbnail animated slideInUp">
					<span>Strea</span><span style='color:#ec1d23;'>ming&nbsp;</span><span style='color:#ec1d23;'>CC</span><span>TV</span>
				</div>
				<?php
				}
				?>
		</div>
	</div>
		
<?php include('includes/footer.php');?>
<script type='text/javascript'>
//<![CDATA[
//Script Redirect CTRL + U
function redirectCU(e) {
  if (e.ctrlKey && e.which == 85) {
    alert("CTRL + U is disable");
    return false;
  }
}
document.onkeydown = redirectCU;

//Script Redirect Klik Kanan
function redirectKK(e) {
  if (e.which == 3) {
    alert("Right click is disable");
    return false;
  }
}
document.oncontextmenu = redirectKK;
//]]>
</script>
  </body>
</html>

<style>
	body{
		background-color:#fff;
	}
	.strem
	{
		padding:150px;
		margin-top: 5%;
	}
	.strem span{
		font-size: 60px;
		font-weight: bold;
		font-family: montserrat;
	}
	.btn{
	float:left;
	background-color:#d9534f ; color:#fff;
}
</style>