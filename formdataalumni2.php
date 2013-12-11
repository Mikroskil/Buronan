<?php
$nim=$_COOKIE['nim'];
mysql_connect("localhost", "root", "");
mysql_select_db("tracerstudy");

$query=mysql_query("select * from mahasiswa where nim='$nim' ");
$q = mysql_fetch_object($query);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.ico">

    <title>Mikroskil Graduates</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/jquery-1.9.1.min.js"></script>
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
     
    <!-- Custom styles for this template -->
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
  
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->

<style type="text/css">
      .carousel {
       
        overflow: hidden;
      }
      .carousel .item {
        -webkit-transition: opacity 1s;
        -moz-transition: opacity 1s;
        -ms-transition: opacity 1s;
        -o-transition: opacity 1s;
        transition: opacity 1s;
      }
      .carousel .active.left, .carousel .active.right {
        left:0;
        opacity:0;
        z-index:2;
      }
      .carousel .next, .carousel .prev {
        left:0;
        opacity:1;
        z-index:1;
      }
	  
	  
	  	
		.btn-twitter {
			padding-left: 30px;
			background: rgba(0, 0, 0, 0) url(https://platform.twitter.com/widgets/images/btn.27237bab4db188ca749164efd38861b0.png) -20px 6px no-repeat;
			background-position: -20px 11px !important;
		}
		.btn-twitter:hover {
			background-position:  -20px -18px !important;
		}
	
</style>


<script type="text/javascript">
  $(document).ready(function() {
    $('.carousel').carousel({interval: 6500});
  });	
</script>
<script type="text/javascript" src="jquery.js">//memanggil jquery</script>

<body>

<div id="wrap">

		<?php include('includes/navlogin.php'); ?>
		<?php include('includes/header.php'); ?>
        
        <div class="breadcrumb">   
     		<?php include('includes/partisipasi.php'); ?>
            <div class="well">
            	<table align="center" width="100%">
				<form name="frm" action="editprofil.php">
				<tr>
					<td align="center" colspan="3">
        			<div class="alert alert-info">
						<b>Form Edit Profil Alumni</b>
            		</div>
					</td>	
				</tr>
   				<tr>
    				<td align="center" colspan="3"><br><br><br><img width="200px" height="200px" src="profilepicture/<?php echo $q->file_name;?>" class="img-thumbnail" alt="A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera"><br><br><br></td>
    			</tr>
				<tr> 
    				<td width="29%" align="right">NIM&nbsp;</td>
       				<td width="1%"> : </td>
					<td width="70%" align="left"><?php echo $q->nim;?></td>
				</tr>
   				<tr> 
    				<td width="29%" align="right">Nama&nbsp;</td>
        			<td width="1%"> : </td>
					<td width="70%" align="left"><?php echo $q->nama;?></td>
				</tr>
   				<tr> 
    				<td width="29%" align="right">Program Studi/Kosentrasi Bidang&nbsp;</td>
        			<td width="1%"> : </td>
					<td width="70%" align="left"><?php echo $q->jur;?></td>
				</tr>
    			<tr> 
    				<td width="29%" align="right">Tempat/Tangggal Lahir&nbsp;</td>
        			<td width="1%"> : </td>
					<td width="70%" align="left"><?php echo $q->ttl;?></td>
				</tr>
                <tr> 
    				<td width="29%" align="right">Masuk Mikroskil Tahun&nbsp;</td>
        			<td width="1%"> : </td>
					<td width="70%" align="left"><?php echo $q->masuk;?></td>
				</tr>
                <tr> 
    				<td width="29%" align="right">Lulus Mikroskil Tahun&nbsp;</td>
        			<td width="1%"> : </td>
					<td width="70%" align="left"><?php echo $q->lulus;?> </td>
				</tr>
    			<tr> 
    				<td width="29%" align="right"><br /><b>Data Rumah&nbsp;</b></td>
				</tr>
                <tr> 
    				<td width="29%" align="right">Alamat&nbsp;</td>
        			<td width="1%"> : </td>
					<td width="70%" align="left"><?php echo $q->alamat;?> </td>
				</tr>
                <tr> 
    				<td width="29%" align="right">Kota&nbsp;</td>
        			<td width="1%"> : </td>
					<td width="70%" align="left"><?php echo $q->kotarumah;?></td>
				</tr>
    			<tr> 
    				<td width="29%" align="right">Telepon&nbsp;</td>
        			<td width="1%"> : </td>
					<td width="70%" align="left"><?php echo $q->telrumah;?> </td>
				</tr>
                <tr> 
    				<td width="29%" align="right">HP&nbsp;</td>
        			<td width="1%"> : </td>
					<td width="70%" align="left"><?php echo $q->hprumah;?></td>
				</tr>
                <tr> 
    				<td width="29%" align="right">Email&nbsp;</td>
        			<td width="1%"> : </td>
					<td width="70%" align="left"><?php echo $q->email;?></td>
				</tr>
    			<tr> 
    				<td width="29%" align="right">No Fax&nbsp;</td>
        			<td width="1%"> : </td>
					<td width="70%" align="left"><?php echo $q->faxrumah;?></td>
				</tr>
    			<tr> 
    				<td width="29%" align="right"><br /><b>Data Kantor&nbsp;</b></td>
				</tr>
    			<tr> 
    				<td width="29%" align="right">Pekerjaan Sekarang&nbsp;</td>
        			<td width="1%"> : </td>
					<td width="70%" align="left"><?php echo $q->pekerjaan;?></td>
				</tr>
    			<tr> 
    				<td width="29%" align="right">Alamat&nbsp;</td>
        			<td width="1%"> : </td>
					<td width="70%" align="left"><?php echo $q->alamatkantor;?></td>
				</tr>
    			<tr> 
    				<td width="29%" align="right">Kota&nbsp;</td>
        			<td width="1%"> : </td>
					<td width="70%" align="left"><?php echo $q->kotakantor;?></td>
				</tr>
    			<tr> 
    				<td width="29%" align="right">Telepon&nbsp;</td>
        			<td width="1%"> : </td>
					<td width="70%" align="left"><?php echo $q->telkantor;?></td>
				</tr>  
                <tr> 
    				<td width="29%" align="right">HP&nbsp;</td>
        			<td width="1%"> : </td>
					<td width="70%" align="left"><?php echo $q->hpkantor;?></td>
				</tr>   
    			<tr> 
    				<td width="29%" align="right">No Fax&nbsp;</td>
        			<td width="1%"> : </td>
					<td width="70%" align="left"><?php echo $q->faxkantor;?></td>
				</tr>   			
                <tr>
                <td><br><br></td>
                </tr>
    			<tr bgcolor="#999999">
					<td align="left" colspan="6"><input type="submit" onclick="editprofil.php" value="Edit Profil" />&nbsp;<div id="pesan_kirim"></div></td>
				</tr>
				</form>
		</table> 
			</div>
		</div>
</div>
	<?php include('includes/footer.php'); ?>

	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.js"></script>
</body>
</html>
