<?php

// include('../config/Class_Divisi.php');
// $db = new Class_Divisi();

ob_start();
?>
<div class='container-fluid' style='margin-top:10%; margin-left:25%;'>
	<div class='col-sm-8'>
		<div class='panel panel-default'>
			<div class='panel-heading text-center'>
				<h3>UPDATE DATA DIVISI</h3>
			</div>
			<?php 
				foreach($db->edit_divisi($_GET['id']) as $row)
				{
			?>
			<div class='panel-body'>
				<form method='post' enctype='multipart/form-data' action='divisi/proses_divisi.php?aksi=update' id='register_form'>
					<div class='form-group col-sm-12'>
						<input type='hidden' name='id' class='form-control' placeholder='id' value='<?=$row['id']?>' id="fullname" required>
						<input type='text' name='nama_divisi' class='form-control' placeholder='Nama Proyek' value='<?=$row['nama_divisi']?>' id="fullname" required>
					</div>
					<div class='form-group col-sm-6'>
						<input type='text' name='divisi_kode' class='form-control' placeholder='Divisi Kode' value='<?=$row['divisi_kode']?>' id="fullname" required>
					</div>
					<div class='form-group col-sm-6'>
						<input type='text' name='bisnis' class='form-control' placeholder='Bisnis' value='<?=$row['bisnis']?>' id="fullname" required>
					</div>
					<div class='form-group col-sm-6'>
						<input type='submit' name='' class='btn btn-default' value='Tambah' style='background-color:#333; color:#fff;'>
						<a class='btn btn-default' href="divisi.php"  >Batal</a>
					</div>
				</form>
			</div>
			<?php }?>
		</div>
	</div>

</div>

<?php ob_flush(); ?>