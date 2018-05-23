<?php 

include('../../config/Class_Cctv.php');
$db = new Class_Cctv();

$aksi = $_GET['aksi'];

if($aksi == "tambah")
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$url_cctv = $_POST['url_cctv'];
	// $port = $_POST['port'];
	$no_proyek = $_POST['no_proyek'];
	$stat = $_POST['status'];

	
	$db->input_cctv($username,$password,$url_cctv,$no_proyek,$stat);
	header('Location:../cctv.php');
}
elseif($aksi == "update")
{
	$id = $_POST['id_cctv'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$url_cctv = $_POST['url_cctv'];
	// $port = $_POST['port'];
	$no_proyek = $_POST['no_proyek'];
	$stat = $_POST['status'];

	
	$db->update_cctv($username,$password,$url_cctv,$no_proyek,$stat,$id);
	 echo"<script>alert('update berhasil'); window.location.href='../cctv.php';</script>"; 
}

?>