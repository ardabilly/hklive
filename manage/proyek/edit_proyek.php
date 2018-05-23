<?php 

// include('config/Class_Proyek.php');
// $db = new Class_Proyek();

ob_start();
?>
<div class='container-fluid' style='margin-top:10%; margin-left:25%;'>
	<div class='col-sm-8'>
		<div class='panel panel-default'>
			<div class='panel-heading text-center'>
				<h3>UPDATE DATA PROYEK</h3>
			</div>
			<?php 
				foreach($db->edit_proyek($_GET['id']) as $row)
				{
			?>
			<div class='panel-body'>
				<form method='post' enctype='multipart/form-data' id='register_form' action='proyek/proses_proyek.php?aksi=update' >
					<div class='form-group col-sm-12'>
						<input type='hidden' name='id_proyek' class='form-control' placeholder='id' value='<?=$row['id_proyek']?>'>
						<input type='text' name='nama_proyek' class='form-control' placeholder='Nama Proyek' value='<?=$row['nama_proyek']?>' id='fullname'>
					</div>
					<div class='form-group col-sm-6'>
						<input type='text' name='lok_proyek' class='form-control' placeholder='Lokasi Proyek' value='<?=$row['lokasi_proyek']?>'>
					</div>
					<div class='form-group col-sm-6'>
						<select name='div_kode' class='form-control'>
							<option value='' selected>Pilih Divisi</option>
							<?php 
							foreach($db->divisi() as $rw)
							{
								?>
								<option value="<?=$rw['divisi_kode']?>"><?=$rw['nama_divisi']?></option>
								<?php
							}
							?>
						</select>
					</div>
					<div class='form-group col-sm-6'>
						<input type='number' name='no_proyek' class='form-control' placeholder='Nomer Proyek' value='<?=$row['no_proyek']?>'>
					</div>
					<div class='form-group col-sm-6'>
						<input type='text' name='pemilik_proyek' class='form-control' placeholder='Pemilik Proyek' value='<?=$row['pemilik_proyek']?>'>
					</div>
					<div class='form-group col-sm-6'>
						<input type='submit' name='' class='btn btn-default' value='Tambah' style='background-color:#333; color:#fff;'>
						<a class='btn btn-default' href="proyek.php">Batal</a>
					</div>
				</form>
			</div>
			<?php }?>
		</div>
	</div>

</div>

<?php ob_flush(); ?>