<?php 

/**
* 
*/
class Class_Cctv
{
	
	// Jabatan Data
	function tampil_cctv()
	{
		include('config.php');
		
		$sql = "select id_cctv,url_cctv,username,password,status,k.nama_proyek from tbl_cctv p	
left join tbl_proyek k on (p.no_proyek = k.no_proyek)";
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
			echo"<div class='container text-center'><div class='alert alert-danger'>Tidak ada data</div>";
		}
		
	}
	
	function input_cctv($username,$password,$url,$no_proyek,$stat)
	{
		$username = addslashes($username);
		$password = addslashes(md5($password));
		$url = addslashes($url);
		$no_proyek = addslashes($no_proyek);
		$stat = addslashes($stat);
		
		include('config.php');
		
		$sql = "insert into tbl_cctv (username, password, url_cctv,no_proyek,status) values('".$username."','".$password."','".$url."','".$no_proyek."','".$stat."')";
		// echo $sql;
		pg_query($sql);
	}
	
	function edit_cctv($id)
	{
		include('config.php');
		
		$sql = "Select * from tbl_cctv where id_cctv='".$id."' ";
		$data = pg_query($sql);
		while($d = pg_fetch_assoc($data))
		{
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function update_cctv($username,$password,$url,$no_proyek,$stat,$id)
	{
		
		$username = addslashes($username);
		$password = addslashes(md5($password));
		$url = addslashes($url);
		// $port = addslashes($port);
		$no_proyek = addslashes($no_proyek);
		$stat = addslashes($stat);
		
		include('config.php');
		$sql = "update tbl_cctv set username='".$username."',password='".$password."',url_cctv='".$url."',no_proyek='".$no_proyek."',status='".$stat."' where id_cctv='".$id."' ";
		// echo $sql;
		pg_query($sql);
	}
	
	function hapus_cctv($id)
	{
		include('config.php');
		$sql = "delete from tbl_cctv where id_cctv='".$id."'";
		pg_query($sql);
	}

	function tampil_urlcctv($id)
	{
		include('config.php');
		
		$sql = "select id_cctv,url_cctv,username,password,k.nama_proyek from tbl_cctv p	
left join tbl_proyek k on (p.no_proyek = k.no_proyek) where id_cctv='".$id."'";
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
			echo"<div class='container text-center'><div class='alert alert-danger'>Tidak ada data</div>";
		}
		
	}	
	
	function tampil_proyekcctv($id)
	{
		include('config.php');
		
		$sql = "select id_proyek,nama_proyek,lokasi_proyek,no_proyek,pemilik_proyek,k.nama_divisi from tbl_proyek p	
left join tbl_wd k on (p.divisi_kode = k.divisi_kode) where id_proyek='".$id."'";
		$data = pg_query($sql);
		while($d = pg_fetch_assoc($data))
		{
			$hasil[] = $d;
		}
		return $hasil;
	}
}

 ?>