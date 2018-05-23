<div class="container">
  <div class="col-lg-12">
	  <a href='cctv.php?hal=input&site=1' class='btn btn-primary' style='margin-top:10px; padding-top:5px;'>Tambah Data</a> 
	  <section class=" ">
		  <header class="text-center" style='margin-top:5px; font-size:20px;'>
			  CCTV Data<hr> 
		  </header>
		  
		  <table class="table table-hover table-bordered">
		   <tbody>
			  <tr>
			<th>No</th>	
			<th>Nama Proyek</th>
			<th>IP</th>
			<th>Status</th>
			<th><i class="icon_cogs"></i> Action</th>
			  </tr>
			  <?php
		$no = 1;
		
		foreach($db->tampil_cctv() as $row)
			{
		?>
		<tr>
			<td><?=$no++?></td>
			<td><?=$row['nama_proyek']?></td>
			<td><a href='../streaming.php?id=<?=$row['id_cctv']?>&menu=stream' class='a'>http://<?=$row['url_cctv']?></td>
			<td><?=$row['status']?></td>
			<td>
			  <div class="btn-group">
				  <a class="btn btn-primary" href='cctv.php?id=<?= $row['id_cctv']; ?>&aksi=edit&site=1'><!--<i class="fa fa-pencil" data-toggle="tooltip" title="Update Data"></i>-->Edit</a>
				  <a class="btn btn-danger"  href='cctv.php?hapus&id=<?=$row['id_cctv'];?>' onclick="return confirm('Yakin mau delete data ini?')"><!--<i class="fa fa-trash" data-toggle="tooltip" title="Hapus Data"></i>-->Hapus</a>
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
<style>
.a{
	color:#d2322d;
}
.a:hover{
	color:#333;
	text-decoration:underline;
}
</style>
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
