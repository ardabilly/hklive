<div class="container">
  <div class="col-sm-12">
	  <a href='proyek.php?hal=input&site=2' class='btn btn-primary' style='margin-top:10px; padding-top:5px;'>Tambah Data</a>
	  <section class="">
		  <header class="text-center" style='margin-top:5px; font-size:20px;'>
			  Proyek Data<hr> 
		  </header>
		  
		  <table class="table table-hover table-bordered">
		   <tbody>
			  <tr>
				 <th><i class=""></i> No</th>
				 <th><i class=""></i> Nama</th>
				 <th><i class=""></i> Lokasi Proyek</th>
				 <th><i class=""></i> Nama Divisi</th>
				 <th><i class=""></i> No_Proyek</th>
				 <th><i class=""></i> Pemilik Proyek</th>
				 <th><i class="icon_cogs"></i> Action</th>
			  </tr>
			  <?php
				$no = 1;
				
				foreach($db->tampil_proyek() as $row)
					{
				?>
			  <tr>
				 <td><?=$no++?></td>
				 <td><?=$row['nama_proyek']?></td>
				 <td><?=$row['lokasi_proyek']?></td>
				 <td><?=$row['nama_divisi']?></td>
				 <td><?=$row['no_proyek']?></td>
				 <td><?=$row['pemilik_proyek']?></td>
				 
				 <td>
				  <div class="btn-group">
					  <a class="btn btn-primary" href='proyek.php?id=<?= $row['id_proyek']; ?>&aksi=edit&site=2'><!--<i class="fa fa-pencil" data-toggle="tooltip" title="Update Data"></i>-->Edit</a>
					  <a class="btn btn-danger"  href='proyek.php?hapus&id_proyek=<?=$row['id_proyek'];?>' onclick="return confirm('Yakin mau delete data ini?')"><!--<i class="fa fa-trash" data-toggle="tooltip" title="Hapus	 Data"></i>-->Hapus</a>
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
