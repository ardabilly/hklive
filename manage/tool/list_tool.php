<div class="container">
  <div class="col-lg-12">
	  <a href='tool.php?menu=upload&site=6' class='btn btn-primary' style='margin-top:16px;' >Tambah Data</a>
	  
	  <section class="">
		  <header class="text-center" style='margin-top:5px; font-size:20px;'>
			  Data Foto Perlengkapan Proyek<hr>
		  </header>
			  <?php
		$no = 1;
		
		foreach($db->tampil_tool() as $row)
			{
		?>
	<div class="col-md-4">
		<div class="thumbnail">
		  <p><?=$row['judul']?></p> 
		  <a href='../img/tool/<?=$row['content']?>' target='_blank'>
			<img src='../img/tool/<?=$row['content']?>' width='300px' height='200px'>
		   </a>
			<a class="btn btn-danger"  href='tool.php?hapus&id=<?=$row['id'];?>' onclick="return confirm('Yakin mau delete data ini?');" data-toggle="tooltip" title="Hapus!"><i class='fa fa-trash-o'></i></a>
			<a class="btn btn-primary" href='../img/tool/<?=$row['content'];?>' data-toggle="tooltip" title="Download!" onclick="return confirm('Klik OK untuk download');" download><i class='fa fa-download'></i></a>
		</div>
	</div>
					<?php
					}
					?>							  
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
