<?php 

//sumber W3SCHOOL

include('../../config/config.php');
$target_dir	='../../img/tool/';
$target_file = $target_dir . basename($_FILES['foto']['name']);
$uploadOK = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

//Check image file 
if(isset($_POST['submit']))
{
	//check image jika sudah ada
	if(file_exists($target_file)){
		echo "Maaf, File sudah ada";
		$uploadOK = 0;
	}
	//check size/ukuran file
	if($_FILES['foto']['size'] > 2097152){
		echo "Maaf, File terlalu besar";
		$uploadOK = 0;
	}
	//Format image yang diizinkan
	if($imageFileType !='jpg' && $imageFileType !='png' && $imageFileType !='jpeg' && $imageFileType !='gif'){
		echo "Maaf, Hanya JPG,PNG,JPEG,GIF yang diizinkan";
		$uploadOK = 0;
	}
	//jika salah
	if($uploadOK = 0){
		echo "Gagal Upload";
	//jika semuanya benar
	}else{
		if(move_uploaded_file($_FILES['foto']['tmp_name'], $target_file)){
			$nama = basename($_FILES['foto']['name']);
			$judul = $_POST['judul'];
			$sql = pg_query("INSERT INTO tbl_keperluan (judul,content) VALUES('".$judul."','".$nama."')");
			if($sql){
				header('location: ../tool.php');
			}else{
				echo "<script>alert('Upload gagal!'); window.location.href='../tool.php?menu=upload'</script>";
			}
		}else{
			echo "Upload error";
		}
	}
}

?>