<?php

include_once('../config/database.php');
$db = new Class_Data();
session_start();
$aksi = $_GET['aksi'];

if(isset($aksi) == "change"){

	$id = $_SESSION['id_user'];
	$new = $_POST['new_username'];
	
	
	$db->update_username($new,$id);
	$_SESSION['username'] = $new ;
	// header('location:../profile.php?hal=change');
	echo"<script>alert('Change username success'); window.location.href='../profile.php?id=" . $id ."';</script>";
 
}


?>