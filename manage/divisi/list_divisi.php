<div class="container">
  <div class="col-lg-10">
	  <a href='divisi.php?hal=input&site=3' class='btn btn-primary' style='margin-top:10px; padding-top:5px;'>Tambah Data</a>
	  <section class="">
		  <header class="text-center" style='margin-top:5px; font-size:20px;'>
			  Divisi Data<hr> 
		  </header>
		  <table class="table  table-hover table-bordered">
		   <tbody>
			  <tr>
			<th>No</th>	
			<th>Nama Divisi</th>
			<th>Divisi Kode</th>
			<th>Lokasi</th>
			<th>Bisnis </th>
			<th><i class="icon_cogs"></i> Action</th>
			  </tr>
			  <?php
		$no = 1;
		
		foreach($db->tampil_divisi() as $row)
			{
		?>
		<tr>
			<td><?=$no++?></td>
			<td><?=$row['nama_divisi']?></td>
			<td><?=$row['divisi_kode']?></td>
			<td><?=$row['lokasi']?></td>
			<td><?=$row['bisnis']?></td>
			<td>
			  <div class="btn-group">
				  <a class="btn btn-primary" href='divisi.php?id=<?= $row['id']; ?>&aksi=edit&site=3'><!--<i class="fa fa-pencil" data-toggle="tooltip" title="Update Data"></i>-->Edit</a>
				  <a class="btn btn-danger"  href='divisi.php?hapus&id=<?=$row['id'];?>' onclick="return confirm('Yakin mau delete data ini?')"><!--<i class="fa fa-trash" data-toggle="tooltip" title="Hapus Data"></i>-->Hapus</a>
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
