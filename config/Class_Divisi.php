<?php 

/**
* 
*/
class Class_Divisi
{
	// Proyek Data
	function tampil_divisi()
	{
		include('config.php');
		
		$sql = "Select * from tbl_wd";
		$data = pg_query($sql);
		while($d = pg_fetch_assoc($data))
		{
			$hasil[] = $d;
		}	
		return $hasil;
	}
	
	function input_divisi($nama,$div_kode,$lok,$bisnis)
	{
		$nama = addslashes($nama);
		$div_kode = addslashes($div_kode);
		$bisnis = addslashes($bisnis);
		$lok = addslashes($lok);
		include('config.php');
		
		$sql = "insert into tbl_wd (nama_divisi, divisi_kode, lokasi, bisnis) values('".$nama."','".$div_kode."','".$lok."','".$bisnis."')";
		// echo $sql;
		pg_query($sql);
	}
	
	function edit_divisi($id)
	{
		include('config.php');
		
		$sql = "Select * from tbl_wd where id ='".$id."' ";
		$data = pg_query($sql);
		while($d = pg_fetch_assoc($data))
		{
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function update_divisi($nama,$div_kode,$lok,$bisnis,$id)
	{
		include('config.php');
		$sql = "update tbl_wd set nama_divisi='".$nama."',divisi_kode='".$div_kode."',bisnis='".$bisnis."',lokasi='".$lok."' where id='".$id."' ";
		// echo $sql;
		pg_query($sql);
	}
	
	function hapus_divisi($id)
	{
		include('config.php');
		$sql = "delete from tbl_wd where id='".$id."'";
		pg_query($sql);
	}
	
}

 ?>