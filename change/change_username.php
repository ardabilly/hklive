<?php 

$id = $_SESSION['id_user'];


// $new_username = "";
// if(isset($_POST['new_username']) && strlen(trim($_POST['new_username'])) !=0)
	// $new_username = trim($_POST['new_username']);


?>

<div class='strem col-sm-3' >
	<div class='panel panel-default'>
	<?php 
	
	// if(isset($_POST['submit']))
	// {
		// $db->update_username($new_username,$id);
		// echo"<div class='alert alert-success'>change username success</div>";
		// $new_username = $_SESSION['username'];
	// }
	
	?>
	
		<div class='panel-body'>
			<form method='post' action='change/proses.php?aksi=change' enctype='multipart/form-data'>
			<p>CHANGE USERNAME</p>
				<div class='form-group col-sm-12'>
					<input type='text' name='old_username' class='form-control' value='<?=$_SESSION['username']?>' required readonly>
				</div>
				<div class='form-group col-sm-12'>
					<input type='text' name='new_username' class='form-control' placeholder='Masukan username baru' required  minlength="6" autofocus>
				</div>
				<div class='form-group col-sm-12'>
					<input type='submit' class='btn btn-primary' name='submit' value='Change' >
					<a href='profile.php?id=<?=$_SESSION['id_user']?>' class='btn btn-default'>Back</a>
				</div>
			</form>
		</div>
	</div>
</div>

<?php ?>