<?php 

include('../../config/Class_User.php');
$db = new Class_User();

$aksi = $_GET['aksi'];

if($aksi == "tambah")
{
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$no_proyek = $_POST['no_proyek'];
	$jabatan = $_POST['jabatan'];

	
	$db->input_user($firstname,$lastname,$username,$password,$no_proyek,$jabatan);
	header('Location:../user.php');
}
elseif($aksi == "update")
{
	$id = $_POST['id_user'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$no_proyek = $_POST['no_proyek'];
	$jabatan = $_POST['jabatan'];

	// echo $id;

	
	$db->update_user($firstname,$lastname,$no_proyek,$jabatan,$id);
	 echo"<script>alert('update berhasil'); window.location.href='../user.php';</script>"; 
}

?>