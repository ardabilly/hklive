<?php 
	ob_start();
?>
<div class='container-fluid' style='margin-top:5%; margin-left:30%;'>
		<h1>UPLOAD</h1>
		<form method='post' action='tool/proses_tool.php?aksi=upload' enctype='multipart/form-data'>
			<div class='fileinput fileinput-new' data-provides='fileinput'>
				<div class='form-group'>
					<input type='text' name='judul' placeholder='masukan judul foto' class='form-control' required>
				</div>
				<div class='fileinput-new thumbnail' style='width:400px; height:200px;'>
					<img src='holder.js/100%x100%' alt=''>
				</div>
				<div class='fileinput-preview fileinput-exists thumbnail' style='max-width:500px; max-height:200px;'></div>
				<div>
					<span class='btn btn-default btn-file'><span class='fileinput-new'>Select Image</span><span class='fileinput-exists'>Change</span><input type='file' name='foto' required></span>
					<input type='submit' name='submit' class='btn btn-default' name='submit' value='Upload' style='background-color:#333; color:#fff;'>
				</div>
			</div>
		</form>
</div>

<?php 
	ob_flush();
?>