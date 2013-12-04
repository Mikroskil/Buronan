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
    <?php
	echo
	"<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kumpulan Tracer Study</h3>
	<hr width='90%' style='border-color:#999'/><br /><br />
	 
	<table>
	<tr>
    	<td width='49'></td>
    	<td width='298' height='24'> &nbsp;Attacment</td>
        <td width='487'>Size</td>
    </tr>
    <tr>
   	  <td></td>
    	<td width='298' height='4' > &nbsp;<hr width='35%' style='border-color:#999' align='left'/></td>
      <td width='487'><hr width='15%' align='left' style='border-color:#999'/></td>
    </tr>
    <br />
    <tr>
    	<td></td>
    	<td width='298' height='119'>
        <a href=''> &nbsp;Tracer Study 2011</a><br /><a href=''>&nbsp;Tracer Study 2012</a><br /><a href=''>&nbsp;Tracer Study 2013</a>
        </td>
        <td width='487'>
        ...kb<br />...kb<br />...kb
        </td>
    </tr>
	</table>"
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
