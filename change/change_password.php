<?php
$id = $_SESSION['id_user'];

$old_password = "";
if(isset($_POST['old_password']) && strlen(trim($_POST['old_password'])) !=0)
	$old_password = trim($_POST['old_password']);
$new_password = "";
if(isset($_POST['new_password']) && strlen(trim($_POST['new_password'])) !=0)
	$new_password = trim($_POST['new_password']);
$confirm_password = "";
if(isset($_POST['confirm_password']) && strlen(trim($_POST['confirm_password'])) !=0)
	$confirm_password = trim($_POST['confirm_password']);


 ?>
<div class='strem col-sm-3' style='margin-top:;'>
	<div class='panel panel-default'>
		<div class='panel-body'>
		
			<form method='post' action='' enctype='multipart/form-data'>
		<?php 
		
		if(isset($_POST['submit']))
		{
			if(strlen($old_password) !=0 && !$db->cek_password($_SESSION['id_user'],$old_password))
			{
				echo"<div class='alert alert-danger'>Password lama salah!</div>";
			}
			elseif($new_password !== $confirm_password)
			{
				echo"<div class='alert alert-danger'>Password Tidak Sama!</div>";
			}
			else{
				$db->update_password($new_password,$id);
				echo"<div class='alert alert-success'>Change Password Berhasil!</div>";
			}
		}
		
		?>
			<p>CHANGE PASSWORD</p>
				<div class='form-group col-sm-12'>
					<input type='password' name='old_password' class='form-control' placeholder='Masukan password lama' required>
				</div>
				<div class='form-group col-sm-12'>
					<input type='password' name='new_password' class='form-control' placeholder='Masukan password baru' required minlength="6">
				</div>
				
				<div class='form-group col-sm-12'>
					<input type='password' name='confirm_password' class='form-control' placeholder='Konfirmasi password baru' required>
				</div>
				<div class='form-group col-sm-12'>
					<input type='submit' class='btn btn-danger ' name='submit' value='Change'>
					<a href='profile.php?id=<?=$_SESSION['id_user']?>' class='btn btn-default'>Back</a>
				</div>
			</form>
		</div>
	</div>
</div>
<?php ?>