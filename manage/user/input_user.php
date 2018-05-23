<div class='container-fluid' style='margin-top:10%; margin-left:25%;'>
	<div class='col-sm-8'>
		<div class='panel panel-default'>
			<div class='panel-heading text-center'>
				<h3>INPUT DATA USER</h3>
			</div>
			<div class='panel-body'>
				<form method='post' enctype='multipart/form-data' action='user/proses_user.php?aksi=tambah' id='register_form'>
					
					<div class='form-group col-sm-6'>
						<input type='text' name='firstname' class='form-control' placeholder='First Name' id="fullname" required pattern='[A-Za-z]+' >
					</div>
					<div class='form-group col-sm-6'>
						<input type='text' name='lastname' class='form-control' placeholder='Last Name' id="fullname" required pattern='[A-Za-z]+'>
					</div>
					<div class='form-group col-sm-6'>
						<input type='text' name='username' class='form-control' placeholder='username' id="fullname" required pattern='[A-Za-z]+'>
					</div>
					<div class='form-group col-sm-6'>
						<input type='password' name='password' class='form-control' placeholder='password' id="password" min-length='6' required>
					</div>
					<div class='form-group col-sm-6'>
						<input type='text' name='no_proyek' class='form-control' placeholder='Nomer Proyek' id="fullname" required pattern="[0-9]+" title='Masukan nomer proyek'> 
					</div>
					<div class='form-group col-sm-6'>
						<select name='jabatan' class='form-control'>
							<option value='' selected>Pilih Jabatan</option>
							<?php
							foreach($db->jabatan() as $row)
							{
							?>
							<option value="<?=$row['id_jabatan']?>"><?=$row['nama_jabatan']?></option>
							<?php
							}
							?>
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