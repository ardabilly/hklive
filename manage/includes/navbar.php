<?php 
session_start();
if(!isset($_SESSION['username']))
{
	echo"<script>window.location.href='../login.php'</script>";
}
if(isset($_SESSION['username']) && $_SESSION['username'] != 'administrator')
{
	echo"<script>window.location.href='../404.php'</script>";
}
?>

<?php 
	error_reporting(0);
	$page=$_REQUEST['site']; $active='class="active"'; 
?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a href='http://localhost/HKLive/'>
	  <!--<img src='../img/hk.png' width='50px' height='25px' style='margin-top:15px; padding-right:5px;'>-->
	  <div style='margin-top:10px;'><span style='font-size:20px; color:#ec1d23; font-weight:bold; '>HK</span><span style='font-size:20px; color:gray; font-weight:bold;'>Live</span></div>
	  </a>
    </div>
    <ul class="nav navbar-nav" style='margin-left:15px;'>               
		  <li <?php if($page=='' || $page=='') { echo $active;} ?> >
			  <a class="" href="index.php">
				  <!--<i class="fa fa-home"></i>-->
				  <span>Dashboard</span>
			  </a>
		  </li>
		   <li  <?php if($page=='1') { echo $active;} ?> >                     
			  <a class="" href="cctv.php?site=1">
				 <!-- <i class="fa fa-cogs"></i>-->
				  <span>Cctv</span>
			  </a>                
		  </li>
		  	<?php
		
			// if($_SESSION['username']=='root')
			//  {
		?>
		  <li  <?php if($page=='2') { echo $active;} ?> >                     
			  <a class="" href="proyek.php?site=2">
				 <!-- <i class="fa fa-cogs"></i>-->
				  <span>Proyek</span>
			  </a>                
		  </li>
		  <li <?php if($page=='3') { echo $active;} ?>>                     
			  <a class="" href="divisi.php?site=3">
				 <!-- <i class="fa fa-list-alt"></i>-->
				  <span>Divisi</span>
			  </a>                
		  </li>
		  <li <?php if($page=='4') { echo $active;} ?> >                     
			  <a class="" href="jabatan.php?site=4">
				 <!-- <i class="fa fa-fire"></i>-->
				  <span>Jabatan</span>
			  </a>                
		  </li>
		  <li <?php if($page=='5') { echo $active;} ?> > 		  
			  <a class="" href="user.php?site=5">
				 <!-- <i class="fa fa-users"></i>-->
				  <span>User</span>
			  </a>                
		  </li>
		  <li <?php if($page=='6') { echo $active;} ?> > 		  
			  <a class="" href="tool.php?site=6">
				 <!-- <i class="fa fa-users"></i>-->
				  <span>Tool</span>
			  </a>                
		  </li>
		
		  <?php 
		   // }
		  ?> 
    </ul>
	<ul class="nav navbar-right" style='margin-top:5px;'>               	
	  <li> 		  
		  <a class="" href="../logout.php" onclick='return confirm("Are you sure?")'>
			  <i class="fa fa-sign-out"></i>
			  <span>Logout</span>
		  </a>                
	  </li>
	</ul>
	
  </div>
</nav>

<style>
body{
	background-color:#fff;
}
</style>