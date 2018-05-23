<div class="container">
  <div class="col-sm-10">
	  <a href='jabatan.php?hal=input&site=4' class='btn btn-primary' style='margin-top:10px; padding-top:5px;'>Tambah Data</a>
	  <section class=" ">
			<header class='text-center' style='font-size:20px;'>
				Jabatan Data<hr>
			</header>
		  <table class="table  table-hover table-bordered">
		   <thead>
		   </thead>
		   <tbody>
			  <tr>
				<th>No</th>	
				<th>Nama Jabatan</th>
				<th>Kode Jabatan</th>
				<th><i class="icon_cogs"></i> Action</th>
			  </tr>
			  <?php
		$no = 1;
		
		foreach($db->tampil_jabatan() as $row)
			{
		?>
		<tr>
			<td><?=$no++?></td>
			<td><?=$row['nama_jabatan']?></td>
			<td><?=$row['kode_jabatan']?></td>
			<td class='text-center'> 
			  <div class="btn-group">
				  <a class="btn btn-primary" href='jabatan.php?id=<?= $row['id_jabatan']; ?>&aksi=edit&site=4'><!--<i class="fa fa-pencil" data-toggle="tooltip" title="Update Data"></i>-->Edit</a>
				  <a class="btn btn-danger"  href='jabatan.php?hapus&id=<?=$row['id'];?>' onclick="return confirm('Yakin mau delete data ini?')"><!--<i class="fa fa-trash" data-toggle="tooltip" title="Hapus Data"></i>-->Hapus</a>
			  </div>
			</td>
		</tr>   
					<?php
					}
					?>							  
		   </tbody>
		</table>
	  </section>
  </div>
</div>
<script>
document.oncontextmenu=new Function("return false;")
$(document).mousedown(function(e){
if(e.which === 2 ){
   alert("Middle click is disable")    
   return false;
}
if(e.shiftKey && e.which === 1 ){
   alert("Shift+Left click is disable")    
   return false;
}
if(e.ctrlKey && e.which === 1 ){
   alert("Ctrl+Left click is disable")    
   return false;
}

});


</script>
