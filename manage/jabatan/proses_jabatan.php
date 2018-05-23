<?php 

include('../../config/Class_Jabatan.php');
$db = new Class_Jabatan();

$aksi = $_GET['aksi'];

if($aksi == "tambah")
{
	$nama = $_POST['nama_jabatan'];
	$kode = $_POST['kode_jabatan'];
	
	
	$db->input_jabatan($nama,$kode);
	header('Location:../jabatan.php');
}
elseif($aksi == "update")
{
	$id = $_POST['id'];
	$nama = $_POST['nama_jabatan'];
	$kode = $_POST['kode_jabatan'];
	
	$db->update_jabatan($nama,$kode,$id);
	 echo"<script>alert('update berhasil'); window.location.href='../jabatan.php';</script>"; 
	// header('Location:list_proyek.php');
}

?>