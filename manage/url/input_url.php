
<div class='container-fluid' style='margin-top:10%; margin-left:25%;'>
	<div class='col-sm-8'>
		<div class='panel panel-default'>
			<div class='panel-heading text-center' style='background-color:;' >
				<h3>INPUT DATA CCTV</h3>
			</div>
			<div class='panel-body'>
				<form method='post' enctype='multipart/form-data' action='url/proses_cctv.php?aksi=tambah' id='register_form'>
					
					<div class='form-group col-sm-6'>
						<input type='text' name='username' class='form-control' placeholder='username' id="fullname" required value='admin' readonly>
					</div>
					<div class='form-group col-sm-6'>
						<input type='password' name='password' class='form-control' placeholder='password' id="password" min-length='6' required value='HK112112' readonly>
					</div>
					<div class='form-group col-sm-6'>
						<input type='text' name='url_cctv' class='form-control' placeholder='Masukan IP CCTV' id="fullname" required> 
					</div>
					<!--<div class='form-group col-sm-2'>
						<input type='text' name='port' class='form-control' placeholder='Port'>
					</div>-->
					<div class='form-group col-sm-6'>
						<input type='number' name='no_proyek' class='form-control' placeholder='Nomer Proyek'>
					</div>
					<div class='form-group col-sm-6'>
						<select name='status' class='form-control' required>
							<option value='' required>Status</option>
							<option value='Active'>Active</option>
							<option value='Maintenance'>Maintenance</option>
						</select>
					</div>
					<div class='form-group col-sm-6'>
						<input type='submit' name='' class='btn btn-default' style='background-color:#333; color:#fff;' value='Tambah'>
						<a class='btn btn-default' onclick='window.history.back();'>Batal</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>