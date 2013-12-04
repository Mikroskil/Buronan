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


  </head>

  <body>

    <!-- Wrap all page content here -->
    <div id="wrap">

<?php include('includes/nav.php'); ?>

<?php include('includes/header.php'); ?>

        <div class="breadcrumb">
        </div>
        
     <?php include('includes/partisipasi.php'); ?>      
    
    <div class="well">
	<?php include('includes/connection.php'); ?>
    <?php
    //membaca semua data dari tabel latar
$query = "select * from latar";
$result = mysql_query($query)or die ("Wrong Query:".mysql_error());
while($data=mysql_fetch_array($result))

{	
	
	echo "<h3>Latar Belakang</h3>";
	
	echo "<p align='justify'>$data[satu]</p>";
	//echo "<br>";
	echo "<p align='justify'>$data[dua]</p>";
	
	echo "<h3>Tujuan Pelaksanaan <i>Tracer Study</i></h3>";
	echo "<p align='justify'>$data[tiga]</p>";	
}
?>
	</div>
        
        <br>
                 
        <!--<p class="lead">All graduates can fill up Tracer Study form. <br /> 
        Login by entering your User ID and Password <br />
        User ID : <code>NIM</code> <br />
        Password : <code>dd/MM/yyyy</code> 
        <p>For more information, please send an email to admin@alumnimikroskil.com</address> </p>-->
      </div>
    </div>

   <?php include('includes/footer.php'); ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.js"></script>
  </body>
</html>