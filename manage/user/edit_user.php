<?php 
// include('../config/Class_User.php');
// $db = new Class_User();

ob_start();
?>

<div class='container-fluid' style='margin-top:10%; margin-left:25%;'>
	<div class='col-sm-8'>
		<div class='panel panel-default'>
			<div class='panel-heading text-center'>
				<h3>UPDATE DATA USER</h3>
			</div>
			<?php 
				foreach($db->edit_user($_GET['id']) as $row)
				{

			?>

			<div class='panel-body'>
				<form method='post' enctype='multipart/form-data' action='user/proses_user.php?aksi=update' >
					
					<input type='hidden' name='id_user' class='form-control' value='<?=$row['id_user']?>' readonly>
			
					<div class='form-group col-sm-6'>
						<input type='text' name='firstname' class='form-control' placeholder='Firt Name' value='<?=$row['first_name']?>' required> 
					</div>
					<div class='form-group col-sm-6'>
						<input type='text' name='lastname' class='form-control' placeholder='Last Name' value='<?=$row['last_name']?>' required> 
					</div>
					<div class='form-group col-sm-6'>
						<input type='text' name='no_proyek' class='form-control' placeholder='Nomer Proyek' value='<?=$row['no_proyek']?>' required> 
					</div>
					<div class='form-group col-sm-6'>
						<select name='jabatan' class='form-control' required>
							<option value='' selected>Pilih Jabatan</option>
							<?php
							foreach($db->jabatan() as $rw)
							{
							?>
							<option value="<?=$rw['id_jabatan']?>" ><?=$rw['nama_jabatan']?></option>
							<?php
							}
							?>
						</select>
					</div>
					<div class='form-group col-sm-6'>
						<input type='submit' name='' class='btn btn-default' style='background-color:#333; color:#fff;' value='Tambah'>
						<a class='btn btn-default' href="user.php">Batal</a>
					</div>
				</form>
			</div>
			<?php }?>
		</div>
	</div>

</div>

<?php ob_flush(); ?>