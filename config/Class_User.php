<?php 

/**
* 
*/
class Class_User
{
	function tampil_user()
	{
		include('config.php');
		
		$sql = "select id_user,username,password,first_name,last_name,k.nama_proyek,s.nama_jabatan from tbl_user p	
left outer join tbl_proyek k on (p.no_proyek = k.no_proyek) left outer join tbl_jabatan s on (p.id_jabatan=s.id_jabatan) ";
		$data = pg_query($sql);
		while($d = pg_fetch_assoc($data))
		{
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function input_user($firstname,$lastname,$username,$password,$no_proyek,$jabatan)
	{
		$firstname = addslashes($firstname);
		$lastname = addslashes($lastname);
		$username = addslashes($username);
		$password = addslashes(md5($password));
		$no_proyek = addslashes($no_proyek);
		$jabatan = addslashes($jabatan);
		include('config.php');
		
		$sql = "insert into tbl_user (first_name, last_name, username, password,no_proyek,id_jabatan) values('".$firstname."','".$lastname."','".$username."','".$password."','".$no_proyek."','".$jabatan."')";
		echo $sql;
		pg_query($sql);
	
	}
	
	function edit_user($id)
	{
		include('config.php');
		
		$sql = "select * from tbl_user where id_user ='".$id."' ";
		$data = pg_query($sql);
		while($d = pg_fetch_assoc($data))
		{
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function update_user($firstname,$lastname,$no_proyek,$jabatan,$id)
	{
		include('config.php');
		$sql = "update tbl_user set first_name='".$firstname."', last_name='".$lastname."', no_proyek='".$no_proyek."', id_jabatan='".$jabatan."' where id_user='".$id."' ";
		// echo $sql;
		pg_query($sql);
	}
	
	function hapus_user($id)
	{
		include('config.php');
		$sql = "delete from tbl_user where id_user='".$id."'";
		pg_query($sql);
	}
	
	function jabatan()
	{
		include('config.php');
		$data = pg_query("select * from tbl_jabatan order by id_jabatan"); 
		while ($d = pg_fetch_assoc($data))
		{
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	
}

 ?>