<div class="container">
  <div class="col-lg-12">
	  <a href='user.php?hal=input&site=5' class='btn btn-primary' style='margin-top:10px; padding-top:5px;' >Tambah Data</a>
	  
	  <section class="">
		  <header class="text-center" style='margin-top:5px; font-size:20px;'>
			  User Data<hr>
		  </header>
		  <table class="table table-hover table-bordered">
		   <tbody>
			  <tr>
			<th>No</th>	
			<th>Username</th>
			<th>Nama Lengkap</th>
			<th>Nama Proyek</th>	
			<th>Jabatan</th>
			<th><i class="icon_cogs"></i> Action</th>
			  </tr>
			  <?php
		$no = 1;
		
		foreach($db->tampil_user() as $row)
			{
		?>
		<tr>
			<td><?=$no++?></td>
			<td><?=$row['username']?></td>
			<td><?=$row['first_name']?>&nbsp;&nbsp;<?=$row['last_name']?></td>
			<td><?=$row['nama_proyek']?></td>
			<td><?=$row['nama_jabatan']?></td>
			<td>
			  <div class="btn-group">
				  <a class="btn btn-primary" href='user.php?id=<?=$row['id_user'];?>&aksi=edit&site=5' ><!--<i class="fa fa-pencil" data-toggle="tooltip" title="Update Data"></i>-->Edit</a>
				  <a class="btn btn-danger"  href='user.php?hapus&id=<?=$row['id_user'];?>' onclick="return confirm('Yakin mau delete data ini?')"><!--<i class="fa fa-trash" data-toggle="tooltip" title="Hapus Data"></i>-->Hapus</a>
			  </div>
			</td>
		</tr>   
		 <!---->
					<?php
					}
					?>							  
		   </tbody>
		</table>
	  </section>
  </div>
</div>

	<script src="../assets/jquery.js"></script>
<script>

document.oncontextmenu=new Function("return false;")

$(document).mousedown(function(e){
if(e.which === 2 ){
   alert("Middle click is disable");    
   return false;	
}
if(e.shiftKey && e.which === 1 ){
	
	
    e.preventDefault();
   alert("Shift+Left click is disable");   
   return false;
}
if(e.ctrlKey && e.which === 1 ){
   alert("Ctrl+Left click is disable");    
   return false;

}

});


</script>



<!--https://stackoverflow.com/questions/17169198/how-to-disable-or-hide-the-open-in-new-tab-option-for-hyperlinks-->
