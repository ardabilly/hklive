<?php 

/**
* 
*/
class class_tool
{
	function tampil_tool()
	{
		include('config.php');
		
		$sql = "select * from tbl_keperluan  ";
		$data = pg_query($sql);
		
		while($d = pg_fetch_array($data))
		{
			$hasil[] = $d;
		}
		return $hasil;
	}
	function hapus($id){
		
		include('config.php');
		
		$sql = "delete from tbl_keperluan where id='".$id."'";
		pg_query($sql);
	}


}

 ?>