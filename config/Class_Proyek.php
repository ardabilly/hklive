<?php 

/**
* 
*/
class Class_Proyek
{
	// Proyek Data
	function tampil_proyek()
	{
		include('config.php');
		
		$sql = "select id_proyek,nama_proyek,lokasi_proyek,no_proyek,pemilik_proyek,k.nama_divisi from tbl_proyek p	
left join tbl_wd k on (p.divisi_kode = k.divisi_kode)";
		$data = pg_query($sql);
		while($d = pg_fetch_assoc($data))
		{
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function input_proyek($nama,$lokasi,$div_kode,$no_proyek,$pemproyek)
	{
		$nama = addslashes($nama);
		$lokasi = addslashes($lokasi);
		$div_kode = addslashes($div_kode);
		$no_proyek = addslashes($no_proyek);
		$pemproyek = addslashes($pemproyek);
		include('config.php');
		
		$sql = "insert into tbl_proyek (nama_proyek, lokasi_proyek, divisi_kode,no_proyek,pemilik_proyek) values('".$nama."','".$lokasi."','".$div_kode."','".$no_proyek."','".$pemproyek."')";
		echo $sql;
		pg_query($sql);
	}
	
	function edit_proyek($id)
	{
		include('config.php');
		
		$sql = "Select * from tbl_proyek where id_proyek ='".$id."' ";
		$data = pg_query($sql);
		while($d = pg_fetch_assoc($data))
		{
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function update_proyek($nama,$lokasi,$div_kode,$no_proyek,$pemproyek,$id)
	{
		include('config.php');
		$sql = "update tbl_proyek set nama_proyek='".$nama."',lokasi_proyek='".$lokasi."',divisi_kode='".$div_kode."',no_proyek='".$no_proyek."',pemilik_proyek='".$pemproyek."' where id_proyek='".$id."' ";
		echo $sql;
		pg_query($sql);
	}
	
	function hapus_proyek($id)
	{
		include('config.php');
		$sql = "delete from tbl_proyek where id_proyek='".$id."'";
		pg_query($sql);
	}
	
	function divisi()
	{
		include('config.php');
		$data = pg_query("select * from tbl_wd order by id"); 
		while ($d = pg_fetch_assoc($data))
		{
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	
}

 ?>