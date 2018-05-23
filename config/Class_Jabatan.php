<?php 

/**
* 
*/
class Class_Jabatan
{
	
	// Jabatan Data
	function tampil_jabatan()
	{
		include('config.php');
		
		$sql = "Select * from tbl_jabatan";
		// echo $sql;
		$data = pg_query($sql);
		if(pg_num_rows($data) > 0)
		{
			while ($d = pg_fetch_array($data))
			{
				$hasil[] = $d;
			}
			
			return $hasil;
		
		}
		else
		{
			echo"<div class='container text-center'><div class='alert alert-danger'>Tidak ada data</div><a onclick='window.history.back();' class='btn btn-primary' >Beranda</a></div>";
		}
		
	}
	
	function input_jabatan($nama,$kode,$userid)
	{
		$nama = addslashes($nama);
		$kode = addslashes($kode);
		$userid = addslashes($userid);
		include('config.php');
		
		$sql = "insert into tbl_jabatan (nama_jabatan, kode_jabatan) values('".$nama."','".$kode."')";
		// echo $sql;
		pg_query($sql);
	}
	
	function edit_jabatan($id)
	{
		include('config.php');
		$sql = "Select * from tbl_jabatan where id_jabatan='".$id."' ";
		$data = pg_query($sql);
		
		while($d = pg_fetch_assoc($data))
		{
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function update_jabatan($nama,$kode,$id)
	{
		include('config.php');
		$sql = "update tbl_jabatan set nama_jabatan='".$nama."',kode_jabatan='".$kode."' where id='".$id."' ";
		// echo $sql;
		pg_query($sql);
	}
	
	function hapus_jabatan($id)
	{
		include('config.php');
		$sql = "delete from tbl_jabatan where id_jabatan='".$id."'";
		pg_query($sql);
	}
	
}

 ?>