<?php 
// include('../config/Class_Jabatan.php');
// $db = new Class_Jabatan();

ob_start();
?>

<div class='container-fluid' style='margin-top:10%; margin-left:25%;'>
	<div class='col-sm-8'>
		<div class='panel panel-default'>
			<div class='panel-heading text-center'>
				<h3>UPDATE DATA JABATAN</h3>
			</div>
			<?php 
				foreach($db->edit_jabatan($_GET['id']) as $row)
				{
			?>
			<div class='panel-body'>
				<form method='post' enctype='multipart/form-data' action='jabatan/proses_Jabatan.php?aksi=update' id='register_form'>
					<div class='form-group col-sm-6'>
						<input type='hidden' name='id' class='form-control' placeholder='id' value='<?=$row['id']?>' >
						<input type='text' name='nama_jabatan' class='form-control' placeholder='Nama Jabatan' value='<?=$row['nama_jabatan']?>' id="fullname" required>
					</div>
					<div class='form-group col-sm-6'>
						<input type='text' name='kode_jabatan' class='form-control' placeholder='Kode Jabatan' value='<?=$row['kode_jabatan']?>' id="fullname" required>
					</div>
					<div class='form-group col-sm-6'>
						<input type='submit' name='' class='btn btn-default' value='Tambah' style='background-color:#333; color:#fff;'>
						<a class='btn btn-default' href="jabatan.php">Batal</a>
					</div>
				</form>
			</div>
			<?php }?>
		</div>
	</div>

</div>

<?php ob_flush(); ?>