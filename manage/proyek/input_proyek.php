
<div class='container-fluid' style='margin-top:10%; margin-left:25%;'>
	<div class='col-sm-8'>
		<div class='panel panel-default'>
			<div class='panel-heading text-center'>
				<h3>INPUT DATA PROYEK</h3>
			</div>
			<div class='panel-body'>
				<form method='post' enctype='multipart/form-data'   id="register_form" action='proyek/proses_proyek.php?aksi=tambah' >
					<div class='form-group col-sm-12'>
						<input type='text' name='nama_proyek' class='form-control' placeholder='Nama Proyek'  id="fullname"  minlength="5" type="text" required  pattern='[A-Za-z]+'>
					</div>
					<div class='form-group col-sm-6'>
						<input type='text' name='lok_proyek' class='form-control' placeholder='Lokasi Proyek' id="fullname"  minlength="5" type="text" required  pattern='[A-Za-z]+'>
					</div>
					<div class='form-group col-sm-6'>
						<select name='div_kode' class='form-control' required> 
							<option value='' selected>Pilih Divisi</option>
							<?php 
							foreach($db->divisi() as $row)
							{
								?>
								<option value="<?=$row['divisi_kode']?>"><?=$row['nama_divisi']?></option>
								<?php
							}
							?>
						</select>
					</div>
					<div class='form-group col-sm-6'>
						<input type='number' name='no_proyek' class='form-control' placeholder='Nomer Proyek' id="fullname"  minlength="5" type="text" required>
					</div>
					<div class='form-group col-sm-6'>
						<input type='text' name='pemilik_proyek' class='form-control' placeholder='Pemilik Proyek' id="fullname"  minlength="5" type="text" required >
					</div>
					<div class='form-group col-sm-6'>
						<input type='submit' name='' class='btn btn-default' value='Tambah' style='background-color:#333; color:#fff;'>
						<a class='btn btn-default' onclick='window.history.back();'>Batal</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>