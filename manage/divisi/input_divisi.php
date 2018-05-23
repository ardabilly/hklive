
<div class='container-fluid' style='margin-top:10%; margin-left:25%;'>
	<div class='col-sm-8'>
		<div class='panel panel-default'>
			<div class='panel-heading text-center'>
				<h3>INPUT DATA DIVISI</h3>
			</div>
			<div class='panel-body'>
				<form method='post' enctype='multipart/form-data' action='divisi/proses_divisi.php?aksi=tambah' id='register_form' >
					<div class='form-group col-sm-6'>
						<input type='text' name='nama_divisi' class='form-control' placeholder='Nama Divisi'  id="fullname" required  pattern='[A-Za-z]+'>
					</div>
					<div class='form-group col-sm-6'>
						<input type='number' name='divisi_kode' class='form-control' placeholder='Divisi Kode' id="fullname" required >
					</div>
					<div class='form-group col-sm-6'>
						<input type='text' name='lokasi' class='form-control' placeholder='lokasi' id="fullname" required  pattern='[A-Za-z]+'>
					</div>
					<div class='form-group col-sm-6'>
						<input type='text' name='bisnis' class='form-control' placeholder='Bisnis' id="fullname" required  pattern='[A-Za-z]+'>
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