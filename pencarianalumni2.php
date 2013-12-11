<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/icon.png">

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
	
.carousel1 {       
        overflow: hidden;
}
</style>


<script type="text/javascript" language="javascript">
  $(document).ready(function() {
    $('.carousel').carousel({interval: 6500});
  });
  
  var ajaxRequest;
function getAjax() //memeriksa apakah web browser mendukun AJAX
{
	try
	{
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	}
	catch (e)
	{
		// Internet Explorer Browsers
		try
		{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch (e) 
		{
			try
			{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch (e)
			{
				// Something went wrong
				alert("Your browser broke!");
				return false;
			}
		}
	}
}

function validasi(keyEvent) //untuk mendapatkan nilai dari inputan yang dimasukkan
{
	keyEvent = (keyEvent) ? keyEvent: window.event;
	input = (keyEvent.target) ? keyEvent.target: keyEvent.srcElement;

	if (keyEvent.type == "keyup")
	{
		var targetDiv = document.getElementById("hasil");
		targetDiv.innerHTML = "<div></div>";
		if (input.value)
		{
			getData("search.php?nama=" + input.value);
			
		}
	} 
}

function bukaInfo(nim) //membuka link dari hasil pencarian
{
	ajaxRequest.open("GET","search.php?nim="+nim);
	ajaxRequest.onreadystatechange = 
		function()
		{
			var targetDiv = document.getElementById("info");
			targetDiv.innerHTML = ajaxRequest.responseText;
		}
	ajaxRequest.send(null);
}

function getData(dataSource) //menampilkan kemungkinan hasil nama barang yang diinput
{
	getAjax();
	if (ajaxRequest)
	{
		ajaxRequest.open("GET",dataSource);
		ajaxRequest.onreadystatechange = 
			function()
			{
				if (ajaxRequest.readyState == 4 && ajaxRequest.status == 200)
				{
					var targetDiv = document.getElementById("hasil");
					targetDiv.innerHTML = ajaxRequest.responseText;
				}
			}
		ajaxRequest.send(null);
	}
}
  
</script>

<body>

<div id="wrap">

		<?php include('includes/navlogin.php'); ?>
      <div class="container">
        <div class="breadcrumb">   
          
          <?php include('includes/header.php'); ?>
          <div class="breadcrumb">
           </div>
          <?php include('includes/partisipasi.php'); ?>
           
            	
                <div class="well">
                 <div class="form-group">
            	 <p>Ketikkan nama alumni dibawah ini :</p>
              	 <input type="text" placeholder="Pencarian alumni" onKeyUp="validasi(event)" id='inputan' size="60" class="form-control"><div id='hasil'></div><BR><div id='info'></div>
                 </div>
            	 </div>
			
		</div>
</div>
<br>
	<?php include('includes/footer.php'); ?>

	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.js"></script>
</body>
</html>
