<?php 


// include('../config/Class_Cctv.php');
// $db = new Class_Cctv();


ob_start();
?>
<div class='container-fluid' style='margin-top:10%; margin-left:25%;'>
	<div class='col-sm-8'>
		<div class='panel panel-default'>
			<div class='panel-heading text-center'>
				<h3>UPDATE DATA CCTV</h3>
			</div>
			<?php 
				foreach($db->edit_cctv($_GET['id']) as $row)
				{
			?>
			<div class='panel-body'>
				<form method='post' enctype='multipart/form-data' action='url/proses_cctv.php?aksi=update' >
				<div class='form-group col-sm-6'>
						<input type='hidden' name='id_cctv' class='form-control' value='<?=$row['id_cctv']?>' readonly>
						<input type='text' name='username' class='form-control' placeholder='username' value='<?=$row['username']?>' readonly>
					</div>
					<div class='form-group col-sm-6'>
						<input type='password' name='password' class='form-control' placeholder='password' value='<?=$row['password']?>' readonly>
					</div>
					<div class='form-group col-sm-6'>
						<input type='text' name='url_cctv' class='form-control' placeholder='Masukan IP CCTV' value='<?=$row['url_cctv']?>'> 
					</div>
					<!--<div class='form-group col-sm-2'>
						<input type='text' name='port' class='form-control' placeholder='Port' value='<?=$row['url_port']?>'>
					</div>-->
					<div class='form-group col-sm-6'>
						<input type='number' name='no_proyek' class='form-control' placeholder='Nomer Proyek' value='<?=$row['no_proyek']?>'>
					</div>
					<div class='form-group col-sm-6'>
						<select name='status' class='form-control' required>
							<option value='' readonly>Status</option >
							<option value='<?=$row['status']?>' selected><?=$row['status']?></option>
							<option value='Active'>Active</option>
							<option value='Maintenance'>Maintenance</option>
						</select>
					</div>
					<div class='form-group col-sm-6'>
						<input type='submit' name='' class='btn btn-default' style='background-color:#333; color:#fff;' value='Tambah'>
						<a class='btn btn-default' href="cctv.php">Batal</a>
					</div>
				</form>
			</div>
			<?php }?>
		</div>
	</div>

</div>

<?php ob_flush(); ?>