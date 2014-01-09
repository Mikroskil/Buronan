<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tracer Study Administrator</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="css/morris-0.4.3.min.css">
  </head>

  <body>
<?php session_start();
if(ISSET($_SESSION['username'])){
include "koneksi.php";
    echo "<div id='wrapper'>

     
      <nav class='navbar navbar-inverse navbar-fixed-top' role='navigation'>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class='navbar-header'>
          <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-ex1-collapse'>
            <span class='sr-only'> </span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
          </button>
          <a class='navbar-brand' href='../index.php' target='new'>Lihat Situs</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class='collapse navbar-collapse navbar-ex1-collapse'>
          <ul class='nav navbar-nav side-nav'>
            <li class='active'><a href='administrator.php'><i class='fa fa-dashboard'></i> Berita</a></li>
            <li><a href='lowongan.php'><i class='fa fa-bar-chart-o'></i> Lowongan Pekerjaan</a></li>
            <li><a href='#'><i class='fa fa-table'></i>Pengguna</a></li>
          
          </ul>

          <ul class='nav navbar-nav navbar-right navbar-user'>
           
            <li class='dropdown user-dropdown'>
              <a href='#' class='dropdown-toggle' data-toggle='dropdown'><i class='fa fa-user'></i> Admin <b class='caret'></b></a>
              <ul class='dropdown-menu'>
              
                <li><a href='logout.php'><i class='fa fa-power-off'></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id='page-wrapper'>


        <div class='row'>
          <div class='col-lg-12'>
            <h1>Beranda <small>Berita Terbaru</small></h1>
            <ol class='breadcrumb'>
              <li class='active'><i class='fa fa-dashboard'></i> Beranda</li>
            </ol>
            <div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              Selamat datang di halaman administrator. <br>
              silahkan update berita, lowongan pekerjaan dan pengguna Tracer Study.
            </div>
			
            <table class='table table-bordered'>
        <thead>
          <tr>
            <th>No</th>
            <th>Perbaharui Artikel</th>
            
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td><a href='berita_1.php?p=Berita_Satu' rel='next' rel='tooltip' data-placement='bottom' title='Klik untuk edit'>
            Artikel 1</a></td>
            
          </tr>
          <tr>
            <td>2</td>
            <td><a href='berita_2.php?p=Berita_Dua' rel='next' rel='tooltip' data-placement='bottom' title='Klik untuk edit'>
            Artikel 2</a></td>
            
          </tr>
          <tr>
            <td>3</td>
            <td><a href='berita_3.php?p=Berita_Tiga' rel='next' rel='tooltip' data-placement='bottom' title='Klik untuk edit'>
            Artikel 3</a></td>
            
            </tr>
         </tbody>
      </table>
          </div>
        </div><!-- /.row -->

       
                </div>
                
              </div>
            </div>
          </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->";
?>

<?php
}else{
?><h1 align="center">Anda tidak memiliki izin mengakses halaman ini. </h1>
<center>silahkan<a href="index.php"> Login</a> terlebih dahulu</a></center><?php
}
?>
    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->
    <script src="js/raphael-min.js"></script>
    <script src="js/morris-0.4.js"></script>
    <script src="js/morris/chart-data-morris.js"></script>
    <script src="js/tablesorter/jquery.tablesorter.js"></script>
    <script src="js/tablesorter/tables.js"></script>

  </body>
</html>
