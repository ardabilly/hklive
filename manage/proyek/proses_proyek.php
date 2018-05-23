<?php 

include('../../config/Class_Proyek.php');
$db = new Class_Proyek();

$aksi = $_GET['aksi'];

if($aksi == "tambah")
{
	$nama = $_POST['nama_proyek'];
	$lok = $_POST['lok_proyek'];
	$div = $_POST['div_kode'];
	$no = $_POST['no_proyek'];
	$pemproyek = $_POST['pemilik_proyek'];
	

	// echo $nama;
	// echo $type;
	// echo $lok;
	echo $div;
	// echo $nilai;
	// echo $no;
	
	
	$db->input_proyek($nama,$lok,$div,$no,$pemproyek);
	// header('Location:../proyek.php');
}
elseif($aksi == "update")
{
	$id = $_POST['id_proyek'];
	$nama = $_POST['nama_proyek'];
	$lok = $_POST['lok_proyek'];
	$div = $_POST['div_kode'];
	$no = $_POST['no_proyek'];
	$pemproyek = $_POST['pemilik_proyek'];
	

	// echo $nama;
	// echo $type;
	// echo $lok;
	echo $div;
	// echo $nilai;
	// echo $no;
	
	
	$db->update_proyek($nama,$lok,$div,$no,$pemproyek,$id);
	 echo"<script>alert('update berhasil'); window.location.href='../proyek.php';</script>"; 
	// header('Location:list_proyek.php');
}

?>