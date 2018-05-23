
<div class='container-fluid' style='margin-top:10%; margin-left:25%;'>
	<div class='col-sm-8'>
		<div class='panel panel-default'>
			<div class='panel-heading text-center'>
				<h3>INPUT DATA JABATAN</h3>
			</div>
			<div class='panel-body'>
				<form method='post' enctype='multipart/form-data' action='proses_jabatan.php?aksi=tambah' id='register_form'>
					<div class='form-group col-sm-6'>
						<input type='text' name='nama_jabatan' class='form-control' placeholder='Nama Jabatan' id="fullname" required  pattern='[A-Za-z]+'>
					</div>
					<div class='form-group col-sm-6'>
						<input type='number' name='kode_jabatan' class='form-control' placeholder='Kode Jabatan' id="fullname" required>
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