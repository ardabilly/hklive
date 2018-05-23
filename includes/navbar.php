<?php 
session_start();
if(!isset($_SESSION['username']))
{
	echo"<script>window.location.href='login.php'</script>";
}

ob_start();
?>
<nav class="navbar navbar-default" style="background-color: none; ">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="http://localhost/HKLive">
				<!--<img src='img/hk.png' width='50px' height='25px'>-->
				<span style='font-size:20px; color:#ec1d23; font-weight:bold;'>HK</span><span style='font-size:20px; color:; font-weight:bold;'>Live</span>
			  </a>
		    </div>
			
			<ul class="nav navbar-right" style='margin-top:5px;'>               	
			  <li> 		  
				  <a class="" href="logout.php" onclick='return confirm("Are you sure?")'>
					  <i class="fa fa-sign-out"></i>
					  <span>Logout</span>
				  </a>                
			  </li>
			</ul>
			<ul class="nav navbar-right" style='margin-top:5px;'>  
			<li> 		  
			  <a class="" href="profile.php?id=<?=$_SESSION['id_user']?>">
				  <i class="fa fa-user"></i>
				  <span><?=$_SESSION['username']?></span>
			  </a>                
		   </li>
		   </ul>
			
			
		  </div>
		</nav>


<?php ob_flush(); ?>