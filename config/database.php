<?php 

/**
* 
*/
class Class_Data
{
	function Login($username,$password)
	{
		$username = pg_escape_string(addslashes($username));
		$password = addslashes(md5($password));
		
		require('config.php');
		
		$sql = "select * from tbl_user where username='".$username."' and password='".$password."'";
		$login = pg_query($sql);
		
		$user_data = pg_fetch_object($login);
		
		$no_rows = pg_num_rows($login);
		if($no_rows == 1)
		{
			session_start();
			$_SESSION['username'] = $user_data->username;
			$_SESSION['id_user'] = $user_data->id_user;
			$_SESSION['first_name'] = $user_data->first_name;
			$_SESSION['last_name'] = $user_data->last_name;
			$_SESSION['no_proyek'] = $user_data->no_proyek;
			$_SESSION['jabatan'] = $user_data->jabatan;
			header("location:index.php");
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	
	function datauser($id)
	{
		
		include('config.php');
		$sql= "select id_user,username,password,first_name,last_name,k.nama_proyek,s.nama_jabatan from tbl_user p left outer join tbl_proyek k on (p.no_proyek = k.no_proyek) left outer join tbl_jabatan s on (p.id_jabatan=s.id_jabatan) where id_user='".$id."'";
		// ,z.url_cctvleft outer join tbl_cctv t on (p.id_cctv=z.id_cctv)
		$data = pg_query($sql);
		while($d = pg_fetch_array($data))
		{
			$hasil[] = $d;
		}
		return $hasil;
		
	}

	//UPDATE USERNAME
	function cek_username($username)
	{
		include('config.php');
		
		$sql = "select * from tbl_user where username='".$username."'";
		// ,z.url_cctvleft outer join tbl_cctv t on (p.id_cctv=z.id_cctv)
		$data = pg_query($sql);
		
	}
	function update_username($username,$id)
	{
		include('config.php');
		
		$sql = "update tbl_user set username='".$username."' where id_user='".$id."' ";
		// echo $sql;
		pg_query($sql);
	}
	
	//UPDATE PASSWORD
	function cek_password($id,$password)
	{
		$password = md5($password);
		
		include('config.php');
		
		$sql = "select * from tbl_user where id_user='".$id."' and password ='".$password."'";
		$data = pg_query($sql);
		while($d = pg_fetch_array($data))
		{
			$hasil[] = $d;
		}
	}
	
	function update_password($password,$id)
	{
		$password = md5($password);
		include('config.php');
		
		$sql = "update tbl_user set password='".$password."' where id_user='".$id."'";
		pg_query($sql);
	}
	
}

 ?>