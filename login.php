<?php 
include('config/database.php');
$db = new Class_Data();

session_start();
if(isset($_SESSION['username']))
{
	echo"<script>alert('Kamu sudah login');window.location.href='index.php'</script>";
}

$username = "";
if(isset($_POST['username']) && strlen(trim($_POST['username'])) !=0)
	$username = trim($_POST['username']);
$password = "";
if(isset($_POST['password']) && strlen(trim($_POST['password'])) !=0)
	$password = trim($_POST['password']);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HKLive | Login  </title>

   
	<?php include('includes/header.php');?>

</head>
  <body class=''>

<!--  
<header class="header " style='background-color:#fff;'>
		<div class='log col-sm-12'>
            <a href="index.php" class="logo">CC<span class="lite">TV</span></a>
		</div>
</header> -->   
<div class='container' style='' >

	<div class='col col-sm-6' style='margin-left:-35px; '>
		<div class='logo'>
		<span style='color:#d9534f;' class='log'>Hutamakarya</span><span class='log' >Live</span>
		</div>
		<div class='col-sm-12' >
			<img src='img/cameras.png' class='img-responsive' width='400px' height='400px' style=''>
		</div>
	</div>
   <div class="col-sm-6 for"> 	   
				<div class="panel panel-default col-sm-8" >			
				<div class='panel-body'>
				<form class="login-form" action="" method='post' id='register_form' >   
			<?php
				if(isset($_POST['submit']))
				{
					if(strlen($username) != 0 && strlen($password) !=0 && !$db->login($username,$password))
					{
						echo"<div class='alert alert-danger text-center' style='font-family:'>ACCESS DENIED!</div>";
					}
					else
					{
						$db->login($_POST['username'],$_POST['password']);
						header('index.php');
					}
				}
			?>	  
					<p>Welcome</p>		
					<div class="form-group">
					  <input type="text" class="form-control" name='username' placeholder="Username" id='fulname' required  autofocus >
					</div>
					<div class="form-group">
						<input type="password" name='password' class="form-control" placeholder="Password" id='password' required>
					</div>
					<label class="checkbox">
						<span class="pull-right"> <a href=""  onclick="window.open('forgot.php', '_blank', 'location=yes,fullscreen=yes,scrollbars=yes,resizable=yes,top=500,left=,width=1351,height=4000');" > Forgot Password?</a></span>
					</label>
					<button class="btn btn-default btn-lg btn-block" name='submit' type="submit"><i class=''></i>Login</button>
			  </form>
			   </div>
			</div>
	</div>
</div>

<style>
span{font-size:12px; color:#lightblue;}
p{font-size:15px; }
.for{
	margin-top:10%;
	margin-left:60%;
	}
.panel{
	
	box-shadow: 0 2px 1px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
	margin-top:-65%;
	margin-left:15px;
}
a{
font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
	}
a:hover
{
	color:red;
}
.btn{
	background-color:#d9534f ; color:#fff;
}
.col{
	margin-top:15%;
}
.logo{
	margin-left:-8%;
	margin-top:-25px;
}
.log{
	font-size:20px;
	
}


</style>

	
<?php include('includes/footer.php');?>
  
  </body>
</html>
