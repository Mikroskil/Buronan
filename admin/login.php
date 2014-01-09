 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Administrator Login</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<?php session_start();
include "koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysql_query("select * from users where username='$username' and password='$password'");
$cek=mysql_num_rows($query);
if($cek){
$_SESSION['username']=$username;
?>
<!--<div class="alert alert-success" align='center'>
Anda berhasil login. silahkan menuju <a href="administrator.php">Halaman ADMINISTRATOR</a></div>-->
<?php
header("location:administrator.php");
?>
<?php
}else{
?> 
<div class='alert alert-danger' align='center'>
        <strong>Anda gagal login!</strong> silahkan <a href="index.php">Login kembali</a>
      </div>
<?php
echo mysql_error();
}
?> 

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
