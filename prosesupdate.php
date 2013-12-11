<?php
$nim=$_COOKIE['nim'];
mysql_connect("localhost", "root", "");
mysql_select_db("tracerstudy");

	$alamat=$_REQUEST['alamat'];
	$kotarumah=$_REQUEST['kotarumah'];
	$telrumah=$_REQUEST['telrumah'];
	$hprumah=$_REQUEST['hprumah'] ;
	$email=$_REQUEST['email'] ;
	$faxrumah=$_REQUEST['faxrumah'];
	$pekerjaan=$_REQUEST['pekerjaan'];
	$alamatkantor=$_REQUEST['alamatkantor'];
	$kotakantor=$_REQUEST['kotakantor'];
	$telkantor=$_REQUEST['telkantor'];
	$hpkantor=$_REQUEST['hpkantor'];
	$faxkantor=$_REQUEST['faxkantor'];
	$file_name = $_FILES['file']['name'];
	
	$query=mysql_query("UPDATE mahasiswa SET alamat='$alamat',kotarumah='$kotarumah',telrumah='$telrumah',hprumah='$hprumah',email='$email',faxrumah='$faxrumah',pekerjaan='$pekerjaan',alamatkantor='$alamatkantor',kotakantor='$kotakantor',telkantor='$telkantor',hpkantor='$hpkantor',faxkantor='$faxkantor',file_name='$file_name' where nim='$nim' ");
	
	move_uploaded_file($_FILES["file"]["tmp_name"], "profilepicture/".$_FILES["file"]["name"]);
	
	
	header("location:formdataalumni2.php");
?>
