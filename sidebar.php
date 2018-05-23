<?php


?>

<div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper" class='wall'>
            <ul class="sidebar-nav">
                <li class="sidebar-brand" style='background-color:#d9534f ; color:#fff;'>
                        Nama Proyek 
                </li>
				<?php 
				foreach($cv->tampil_cctv() as $row){
				?>
                <li class="dropdown" >
					<a class="dropdown-toggle" data-toggle="dropdown" href=""><?=$row['nama_proyek']?>
					<span class="caret"></span></a>
					<ul class="dropdown-menu" style='background-color:#333;'>
					  <li><a href="streaming.php?id=<?=$row['id_cctv']?>&menu=stream">Camera 1 - <?=$row['status']?></a></li>
					  <li><a href="404.php">Camera 2 - Maintenance</a></li>
					  <li><a href="404.php">Camera 3 - Maintenance</a></li>
					</ul>
				</li>
				<?php
				}
				?>
            </ul>
			
        </div>
        <!-- /#sidebar-wrapper -->
	<div class='col-sm-3' style='margin-left:-80px;'>
      <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Lokasi Kamera</a>
    </div>
    </div>
    <!-- /#wrapper -->


    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>