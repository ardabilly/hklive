<?php 

include('../../config/Class_divisi.php');
$db = new Class_Divisi();

$aksi = $_GET['aksi'];

if($aksi == "tambah")
{
	$nama = $_POST['nama_divisi'];
	$div_kode = $_POST['divisi_kode'];
	$lok = $_POST['lokasi'];
	$bisnis = $_POST['bisnis'];
	
	
	$db->input_divisi($nama,$div_kode,$lok,$bisnis);
	header('Location:../divisi.php');
}
elseif($aksi == "update")
{
	$id = $_POST['id'];
	$nama = $_POST['nama_divisi'];
	$div_kode = $_POST['divisi_kode'];
	$lok = $_POST['lokasi'];
	$bisnis = $_POST['bisnis'];
	
	$db->update_divisi($nama,$div_kode,$lok,$bisnis,$id);
	 echo"<script>alert('update berhasil'); window.location.href='../divisi.php';</script>"; 
	// header('Location:list_proyek.php');
}

?>