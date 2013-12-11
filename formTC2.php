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
  $(document).ready(function(){$('.carousel').carousel({interval: 6500});});
</script>
<script type="text/javascript" src="jquery.js">//memanggil jquery</script>
<script type="text/javascript" src="ajax.js">//memanggil script ajax</script>

<body>

<div id="wrap">

		<?php include('includes/navlogin.php'); ?>
		<?php include('includes/header.php'); ?>
        
        <div class="breadcrumb">   
     		<?php include('includes/partisipasi.php'); ?>
            <div class="well">
              
              
<table align="center" width="100%">
	<form method="POST" name="frm_ajax" action="kirim_form()" >
	<tr>
		<td align="center" colspan="6">
        <div class="alert alert-info">
			<b>Form <i>Tracer Study</i></b>
            </div>
		</td>	
	</tr>
    <tr>
    	<td align="left" colspan="4"><br><b>Identitas</b></td>
    </tr>
	<tr> 
    	<td width="7%" align="left">F1</td>
		<td width="17%" align="left">Nomor Mahasiswa </td>
        <td width="1%"> : </td>
		<td align="left" colspan="3"><?php echo $q->nim;?></td>
	</tr>
	<tr>
    	<td align="left">F2A</td>
		<td align="left">Nama Mahasiswa </td>
        <td> : </td>
		<td align="left" colspan="3"><?php echo $q->nama;?></td>
	</tr>
	<tr>
    	<td align="left">F2B</td>
		<td align="left">Nomor Telepon/HP </td>
        <td> : </td>
		<td align="left" colspan="3"><?php echo $q->telrumah;?>/<?php echo $q->hprumah;?></td>
	</tr>
	<tr>
    	<td align="left">F2C</td>
		<td align="left">Alamat Email </td>
        <td> : </td>
		<td align="left" colspan="3"><?php echo $q->email;?></td>
	</tr><br />
    <tr>
    	<td align="left" colspan="6"><b>Tracer Study</b></td>
    </tr>
    <tr>
    	<td align="left" valign="top">F3</td>
		<td align="left">Kapan anda mulai mencari pekerjaan<br /><i>Mohon pekerjaan sambilan tidak dimasukkan&nbsp;&nbsp;</td>
        <td valign="top"> : </td>
        <td valign="top" colspan="3">
        	<input type="radio" name="F304" />Kira-kira <input type="text" size="3" id="F302" name="F302" /> bulan sebelum lulus<br />
        	<input type="radio" name="F304" />Kira-kira <input type="text" size="3" id="F303" name="F303" /> bulan sesudah lulus<br />
       		<input type="radio" id="F304" name="F304" value="1" /> Saya tidak mencari kerja (<i>Langsung ke pertanyaan F8</i>)
        </td>
	</tr>
    <tr>
    	<td align="left" valign="top">F4</td>
        <td align="left" valign="top" >Bagaimana anda mencari pekerjaan tersebut?<br /><i>Jawaban bisa lebih dari satu</i></td>
        <td valign="top"> : </td>
        <td valign="top" colspan="3">
        	<input type="checkbox" name="F401" id="F401" value="1" /> Melalui iklan di koran/majalah, brosur<br />
            <input type="checkbox" id="F402" name="F402" value="1" /> Melamar ke perusahaan tanpa mengetahui lowongan yang ada<br />
            <input type="checkbox" name="F403" id="F403" value="1" /> Pergi ke bursa/pameran kerja<br />
            <input type="checkbox" id="F404" name="F404" value="1" /> Mencari lewat internet/iklan online/milis<br />
            <input type="checkbox" name="F405" id="F405" value="1" /> Dihubungi oleh perusahaan<br />
            <input type="checkbox" name="F406" id="F406" value="1" /> Menghubungi Kemenakertrans<br />
            <input type="checkbox" name="F407" id="F407" value="1" /> Menghubungi agen tenaga kerja komersial/swasta<br />
            <input type="checkbox" name="F408" id="F408" value="1" /> Memperoleh informasi dari pusat/kantor pengembang karir fakultas/universitas<br />
            <input type="checkbox" name="F409" id="F409" value="1" /> Menghubungi kantor kemahasiswaan/hubungi alumni<br />
            <input type="checkbox" name="F410" id="F410" value="1" /> Membangun jejaring (<i>network</i>) sejak masih kuliah<br />
            <input type="checkbox" name="F411" id="F411" value="1" /> Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll)<br />
            <input type="checkbox" name="F412" id="F412" value="1" /> Membangun bisnis sendiri<br />
            <input type="checkbox" name="F413" id="F413" value="1" /> Melalui penempatan kerja atau magang<br />
            <input type="checkbox" name="F414" id="F414" value="1" /> Bekerja di tempat yang sama dengan tempa kerja semasa kuliah<br />
            <input type="checkbox" name="F415" id="F415" value="1" /> Lainnya<br />
            <input type="text" size="60" name="F416" id="F416"  />
        </td>
    </tr>
    <tr>
    	<td align="left" valign="top">F5</td>
		<td align="left">Berapa bulan waktu yang dihabiskan (sebelum dan sesudah kelulusan) untuk memeroleh pekerjaan pertama?</td>
        <td valign="top"> : </td>
        <td valign="middle" colspan="3">
        	<input type="radio" name="f5" />Kira-kira <input type="text" size="3" id="F502" name="F502"/> bulan sebelum lulus ujian<br />
        	<input type="radio" name="f5" />Kira-kira <input type="text" size="3" id="F503" name="F503"/> bulan setelah lulus ujian<br />
        </td>
	</tr>
    <tr>
    	<td align="left" valign="top">F6</td>
		<td align="left">Berapa perusahaan/instansi/institusi yang sudah anda lamar(lewat surat atau e-mail) sebelum anda menmeroleh pekerjaan pertama?</td>
        <td valign="top"> : </td>
        <td valign="middle" colspan="3">
        	<input type="text" size="3" id="F6" name="F6"/> perusahaan/instansi/institusi
        </td>
	</tr>
    <tr>
    	<td align="left" valign="top">F7</td>
		<td align="left">Berapa banyak perusahaan/instansi/institusi yang merespon lamaran anda?</td>
        <td valign="top"> : </td>
        <td valign="middle" colspan="3">
        	<input type="text" size="3" id="F7" name="F7"/> perusahaan/instansi/institusi
        </td>
	</tr>
    <tr>
    	<td align="left" valign="top">F8</td>
		<td align="left">Apakah anda bekerja saat ini (termasuk kerja sambilan dan wirausaha)?</td>
        <td valign="top"> : </td>
        <td valign="middle" colspan="3">
        	<input type="radio" name="F8" value="1" id="F8" /> Ya (<i>Jika ya, lanjutkan ke F11</i>)<br />
            <input type="radio" name="F8" value="2" id="F8" /> Tidak
        </td>
	</tr>
    <tr>
    	<td align="left" valign="top">F9</td>
        <td align="left" valign="top" >Bagaimana anda menggambarkan situasi anda saat ini?<br /><i>Jawaban bisa lebih dari satu</i></td>
        <td valign="top"> : </td>
        <td valign="top" colspan="3">
        	<input type="checkbox" name="F901" id="F901" value="1" /> Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana<br />
            <input type="checkbox" name="F902" id="F902" value="1" /> Saya menikah<br />
            <input type="checkbox" name="F903" id="F903" value="1" /> Saya sibuk dengan keluarga dan anak-anak<br />
            <input type="checkbox" name="F904" id="F904" value="1" /> Saya sekarang sedang mencari pekerjaan<br />
            <input type="checkbox" name="F905" id="F905" value="1" /> Lainnya<br />
            <input type="text" size="60"  name="F906" id="F906" />
        </td>
    </tr>
    <tr>
    	<td align="left" valign="top">F10</td>
        <td align="left" valign="top">Apakah anda aktif mencari pekerjaan dalam 4 minggu terakhir?<br /><i>Pilihlah satu jawaban. KEMUDIAN LANJUT KE F17</i></td>
        <td valign="top"> : </td>
        <td valign="middle" colspan="3">
        	<input type="radio" name="F1001" id="F1001" value="1" /> Tidak<br />
            <input type="radio" name="F1001" id="F1001" value="2" /> Tidak, tapi saya sedang menunggu hasil lamaran kerja<br />
            <input type="radio" name="F1001" id="F1001" value="3" /> Ya, saya akan mulai bekerja dalam 2 minggu ke depan<br />
            <input type="radio" name="F1001" id="F1001" value="4" /> Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan<br />
            <input type="radio" name="F1001" id="F1001" value="5" /> Lainnya<br />
            <input type="text" size="60" id="F1002" name="F1002" />
        </td>
    </tr>
    <tr>
    	<td align="left" valign="top">F11</td>
        <td align="left" valign="top">Apa jenis perusahaan/instansi/institusi tempat anda bekerja sekarang?</td>
        <td valign="top"> : </td>
        <td valign="middle" colspan="3">
        	<input type="radio" name="F1101" id="F1101" value="1" /> Instansi pemerintah (termasuk BUMN)<br />
            <input type="radio" name="F1101" id="F1101" value="2" /> Organisasi no-profit/Lembaga Swadaya Masyarakat<br />
            <input type="radio" name="F1101" id="F1101" value="3" /> Perusahaan Swasta<br />
            <input type="radio" name="F1101" id="F1101" value="4" /> Wiraswasta/perusahaan sendiri<br />
            <input type="radio" name="F1101" id="F1101" value="5" /> Lainnya, tuliskan:<br />
            <input type="text" size="60" id="F1102" name="F1102" />
        </td>
    </tr>
    <tr>
    	<td align="left" valign="top">F13</td>
        <td align="left" valign="top">Kira-kira berappa pendapatan anda setiap bulannya?</td> 
        <td valign="top"> : </td>
        <td valign="middle" colspan="3">
        	Dari Pekerjaan Utama &nbsp;&nbsp;&nbsp;Rp. <input type="text" size="20" id="F1301" name="F1301"/><br />
            Dari Lembur dan Tips &nbsp;&nbsp;&nbsp;Rp. <input type="text" size="20" id="F1302" name="F1302"/><br />
            Dari Pekerjaan Lainnya &nbsp;Rp. <input type="text" size="20" id="F1303" name="F1303"/><br />
        </td>
    </tr>
    <tr>
    	<td align="left" valign="top">F14</td>
        <td align="left" valign="top">Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?</td>
        <td valign="top"> : </td>
        <td valign="middle" colspan="3">
        	<input type="radio" name="F14" id="F14" value="1" /> Sangat Erat<br />
            <input type="radio" name="F14" id="F14" value="2" /> Erat<br />
            <input type="radio" name="F14" id="F14" value="3" /> Cukup Erat<br />
            <input type="radio" name="F14" id="F14" value="4" /> Kurang Erat<br />
            <input type="radio" name="F14" id="F14" value="5" /> Tidak Sama Sekali
        </td>
    </tr>
    <tr>
    	<td align="left" valign="top">F15</td>
        <td align="left" valign="top">tingkat pendidikan apa yang tepat/sesuai untuk pekerjaan anda saat ini?</td>
        <td valign="top"> : </td>
        <td valign="middle" colspan="3">
        	<input type="radio" name="F15" id="F15" value="1" /> Setingkat lebih tinggi<br />
            <input type="radio" name="F15" id="F15" value="2" /> Tingkat yang Sama<br />
            <input type="radio" name="F15" id="F15" value="3" /> Setingkat Lebih Rendah<br />
            <input type="radio" name="F15" id="F15" value="4" /> Tidak Perlu Pendidikan Tinggi
        </td>
    </tr>
    <tr>
    	<td align="left" valign="top">F16</td>
        <td align="left" valign="top" >Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya?<br />Jawaban bisa lebih dari satu</td>
        <td valign="top"> : </td>
        <td valign="top" colspan="3">
        	<input type="checkbox" id="F1601" name="F1601" value="1" /> Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya.<br />
            <input type="checkbox" id="F1602" name="F1602" value="1" /> Saya belum mendapatkan pekerjaan yang sesuai.<br />
            <input type="checkbox" id="F1603" name="F1603" value="1" /> Di pekerjaan ini saya memeroleh prospek karir yang baik.<br />
            <input type="checkbox" id="F1604" name="F1604" value="1" /> Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya.<br />
            <input type="checkbox" id="F1605" name="F1605" value="1" /> Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya.<br />
            <input type="checkbox" id="F1606" name="F1606" value="1" /> Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini.<br />
            <input type="checkbox" id="F1607" name="F1607" value="1" /> Pekerjaan saya saat ini lebih aman/terjamin/secure.<br />
            <input type="checkbox" id="F1608" name="F1608" value="1" /> Pekerjaan saya saat ini lebih menarik.<br />
            <input type="checkbox" id="F1609" name="F1609" value="1" /> Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll.<br />
            <input type="checkbox" id="F1610" name="F1610" value="1" /> Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya.<br />
            <input type="checkbox" id="F1611" name="F1611" value="1" /> Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya.<br />
            <input type="checkbox" id="F1612" name="F1612" value="1" /> Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya.<br />
            <input type="checkbox" id="F1613" name="F1613" value="1" /> Lainnya:<br />
            <input type="text" size="60" id="F1614" name="F1614" />
        </td>
    </tr>
    <tr>
    	<td align="left" valign="top">F17</td>
        <td align="left" valign="top" >Pada saat lulus, pada tingkat mana kompetensi di bawah ini anda kuasai?<br /><b>(A)</b><br />Pada saat lulus, bagaimana kontribusi perguruan tinggi dalam hal kompetensi di bawah ini? <br /><b>(B)</b></td>
        <td valign="top"> : </td>
        <td width="55%" valign="top"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(A)<br />
        &nbsp;Sangat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Sangat <br /> 
        Rendah &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;Tinggi <br />
         1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 &nbsp;&nbsp;&nbsp;&nbsp;3 &nbsp;&nbsp;&nbsp;&nbsp;4 &nbsp;&nbsp;&nbsp;&nbsp;5</b><br />
        				 <input type="radio" id="F1701" name="F1701" value="1"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1701" name="F1701" value="2"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1701" name="F1701" value="3"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1701" name="F1701" value="4"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1701" name="F1701" value="5"/> Pengetahuan di bidang atau disiplin ilmu anda<br />
                         
                         <input type="radio" id="F1703" name="F1703" value="1"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1703" name="F1703" value="2"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1703" name="F1703" value="3"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1703" name="F1703" value="4"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1703" name="F1703" value="5"/> Pengetahuan diluar bidang atau disiplin ilmu anda<br />
                         
                         <input type="radio" id="F1705" name="F1705" value="1"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1705" name="F1705" value="2"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1705" name="F1705" value="3"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1705" name="F1705" value="4"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1705" name="F1705" value="5"/> Pengetahuan umum<br />
                         
                         <input type="radio" id="F1707" name="F1707" value="1"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1707" name="F1707" value="2"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1707" name="F1707" value="3"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1707" name="F1707" value="4"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1707" name="F1707" value="5"/> Ketrampilan internet<br />
                         
                         <input type="radio" id="F1709" name="F1709" value="1"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1709" name="F1709" value="2"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1709" name="F1709" value="3"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1709" name="F1709" value="4"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1709" name="F1709" value="5"/> Keterampilan komputer<br />
                         
                         <input type="radio" id="F1711" name="F1711" value="1" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1711" name="F1711" value="2"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1711" name="F1711" value="3"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1711" name="F1711" value="4"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1711" name="F1711" value="5"/> Berpikir kritis<br />
                         
                         <input type="radio" id="F1713" name="F1713" value="1"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1713" name="F1713" value="2"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1713" name="F1713" value="3"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1713" name="F1713" value="4"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1713" name="F1713" value="5"/> Keterampilan riset<br />
                         
                         <input type="radio" id="F1715" name="F1715" value="1"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1715" name="F1715" value="2"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1715" name="F1715" value="3"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1715" name="F1715" value="4"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1715" name="F1715" value="5"/> Kemampuan belajar<br />
                         
                         <input type="radio" id="F1717" name="F1717" value="1"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1717" name="F1717" value="2"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1717" name="F1717" value="3"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1717" name="F1717" value="4"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1717" name="F1717" value="5"/> Kemampuan berkomunikasi<br />
                         
                         <input type="radio" id="F1719" name="F1719" value="1"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1719" name="F1719" value="2"//> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1719" name="F1719" value="3"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1719" name="F1719" value="4"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1719" name="F1719" value="5"/> Bekerja di bawah tekanan<br />
                         
                         <input type="radio" id="F1721" name="F1721" value="1"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1721" name="F1721" value="2"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1721" name="F1721" value="3"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1721" name="F1721" value="4"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="F1721" name="F1721" value="5"/> Manajemen waktu<br />
                         
                         <input type="radio" id="F1723" name="F1723" value="1"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1723" name="F1723" value="2"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1723" name="F1723" value="3"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1723" name="F1723" value="4"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1723" name="F1723" value="5"/> Bekerja secara mandiri<br />
                         
                         <input type="radio" id="F1725" name="F1725" value="1"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1725" name="F1725" value="2"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1725" name="F1725" value="3"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1725" name="F1725" value="4"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1725" name="F1725" value="5"/> Bekerja dalam tim/bekerjasama dengan orang lain<br />
                         
                         <input type="radio" id="F1727" name="F1727" value="1"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1727" name="F1727" value="2"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1727" name="F1727" value="3"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1727" name="F1727" value="4"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1727" name="F1727" value="5"/> Kemampuan dalam memecahkan masalah<br />
                         
                         <input type="radio" id="F1729" name="F1729" value="1"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1729" name="F1729" value="2"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1729" name="F1729" value="3"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1729" name="F1729" value="4"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1729" name="F1729" value="5"/> Negosiasi<br />
                         
                         <input type="radio" id="F1731" name="F1731" value="1"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1731" name="F1731" value="2"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1731" name="F1731" value="3"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1731" name="F1731" value="4"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1731" name="F1731" value="5"/> Kemampuan analisis<br />
                         
                         <input type="radio" id="F1733" name="F1733" value="1"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1733" name="F1733" value="2"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1733" name="F1733" value="3"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1733" name="F1733" value="4"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1733" name="F1733" value="5"/> Toleransi<br />
                         
                         <input type="radio" id="F1735" name="F1735" value="1"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1735" name="F1735" value="2"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1735" name="F1735" value="3"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1735" name="F1735" value="4"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1735" name="F1735" value="5"/> Kemampuan adaptasi<br />
                         
                         <input type="radio" id="F1737" name="F1737" value="1"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1737" name="F1737" value="2"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1737" name="F1737" value="3"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1737" name="F1737" value="4"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1737" name="F1737" value="5"/> Loyalitas dan integritas<br />
                         
                         <input type="radio" id="F1739" name="F1739" value="1"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1739" name="F1739" value="2"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1739" name="F1739" value="3"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1739" name="F1739" value="4"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1739" name="F1739" value="5"/> Bekerja dengan orang yang berbeda budaya maupun latar belakang<br />
                         
                         <input type="radio" id="F1741" name="F1741" value="1"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1741" name="F1741" value="2"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1741" name="F1741" value="3"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1741" name="F1741" value="4"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1741" name="F1741" value="5"/> Kepemimpinan<br />
                         
                         <input type="radio" id="F1743" name="F1743" value="1"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1743" name="F1743" value="2"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1743" name="F1743" value="3"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1743" name="F1743" value="4"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1743" name="F1743" value="5"/> Kemampuan dalam memegang tanggung jawab<br />
                         
                         <input type="radio" id="F1745" name="F1745" value="1" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1745" name="F1745" value="2" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1745" name="F1745" value="3" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1745" name="F1745" value="4" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1745" name="F1745" value="5" /> Inisiatif<br />
                         
                         <input type="radio" id="F1747" name="F1747" value="1"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1747" name="F1747" value="2"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1747" name="F1747" value="3"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1747" name="F1747" value="4"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1747" name="F1747" value="5"/> Manajemen proyek/program<br />
                         
                         <input type="radio" id="F1749" name="F1749" value="1" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1749" name="F1749" value="2"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1749" name="F1749" value="3"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1749" name="F1749" value="4"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1749" name="F1749" value="5"/> Kemampuan untuk memepresentasikan ide/produk/laporan<br />
                         
                         <input type="radio" id="F1751" name="F1751" value="1"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1751" name="F1751" value="2"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1751" name="F1751" value="3"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1751" name="F1751" value="4"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1751" name="F1751" value="5"/> Kemampuan dalam menulis laporan, memo dan dokumen<br />
                         
                         <input type="radio" id="F1753" name="F1753" value="1"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1753" name="F1753" value="2"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1753" name="F1753" value="3"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1753" name="F1753 value="4""/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1753" name="F1753" value="5"/> Kemampuan untuk belajar sepanjang hayat<br />
        </td>
        
        <td width="20%" valign="top">
        <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(B)<br />&nbsp;Sangat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sangat <br /> Rendah &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tinggi <br /> 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 &nbsp;&nbsp;&nbsp;&nbsp;3 &nbsp;&nbsp;&nbsp;&nbsp;4 &nbsp;&nbsp;&nbsp;&nbsp;5</b><br />
        				
                         <input type="radio" id="F1702" name="F1702" value="1"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1702" name="F1702" value="2"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1702" name="F1702" value="3"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1702" name="F1702" value="4"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1702" name="F1702" value="5"/><br />
                        
                         <input type="radio" id="F1704" name="F1704" value="1"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1704" name="F1704" value="2"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1704" name="F1704" value="3"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1704" name="F1704" value="4"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1704" name="F1704" value="5"/><br />
                         
                         <input type="radio" id="F1706" name="F1706" value="1"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1706" name="F1706" value="2"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1706" name="F1706" value="3"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1706" name="F1706" value="4"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1706" name="F1706" value="5"/><br />
                         
                         <input type="radio" id="F1708" name="F1708" value="1"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1708" name="F1708" value="2"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1708" name="F1708" value="3"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1708" name="F1708" value="4"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1708" name="F1708" value="5"/><br />
                         
                         <input type="radio" id="F1710" name="F1710" value="1"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1710" name="F1710" value="2"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1710" name="F1710" value="3"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1710" name="F1710" value="4"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1710" name="F1710" value="5"/><br />
                         
                         <input type="radio" id="F1712" name="F1712" value="1"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1712" name="F1712" value="2"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1712" name="F1712" value="3"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1712" name="F1712" value="4"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1712" name="F1712" value="5"/><br />
                         
                         <input type="radio" id="F1714" name="F1714" value="1" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1714" name="F1714" value="2" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1714" name="F1714" value="3" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1714" name="F1714" value="4" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1714" name="F1714" value="5" /><br />
                         
                         <input type="radio" id="F1716" name="F1716" value="1" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1716" name="F1716" value="2" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1716" name="F1716" value="3" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1716" name="F1716" value="4" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1716" name="F1716" value="5" /><br />
                         
                         <input type="radio" id="F1718" name="F1718" value="1" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1718" name="F1718" value="2" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1718" name="F1718" value="3" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1718" name="F1718" value="4" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1718" name="F1718" value="5" /><br />
                         
                         <input type="radio" id="F1720" name="F1720" value="1" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="f1720" name="F1720" value="2" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1720" name="F1720" value="3" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1720" name="F1720" value="4" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1720" name="F1720" value="5" /><br />
                         
                         <input type="radio" id="F1722" name="F1722" value="1" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1722" name="F1722" value="2" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1722" name="F1722" value="3" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1722" name="F1722" value="4" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1722" name="F1722" value="5" /><br />
                         
                         <input type="radio" id="F1724" name="F1724" value="1" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1724" name="F1724" value="2" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1724" name="F1724" value="3" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1724" name="F1724" value="4" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1724" name="F1724" value="5" /><br />
                         
                         <input type="radio" id="F1726" name="F1726" value="1" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1726" name="F1726" value="2" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1726" name="F1726" value="3" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1726" name="F1726" value="4" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1726" name="F1726" value="5" /><br />
                         
                         <input type="radio" id="F1728" name="F1728" value="1" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1728" name="F1728" value="2" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1728" name="F1728" value="3" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1728" name="F1728" value="4" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1728" name="F1728" value="5" /><br />
                         
                         <input type="radio" id="F1730" name="F1730" value="1" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1730" name="F1730" value="2" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1730" name="F1730" value="3" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1730" name="F1730" value="4" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1730" name="F1730" value="5" /><br />
                         
                         <input type="radio" id="F1732" name="F1732" value="1" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1732" name="F1732" value="2" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1732" name="F1732" value="3" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1732" name="F1732" value="4" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1732" name="F1732" value="5" /><br />
                         
                         <input type="radio" id="F1734" name="F1734" value="1" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1734" name="F1734" value="2" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1734" name="F1734" value="3" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1734" name="F1734" value="4" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1734" name="F1734" value="5" /><br />
                         
                         <input type="radio" id="F1736" name="F1736" value="1" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1736" name="F1736" value="2" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1736" name="F1736" value="3" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1736" name="F1736" value="4" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1736" name="F1736" value="5" /><br />
                         
                         <input type="radio" id="F1738" name="F1738" value="1" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1738" name="F1738" value="2" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1738" name="F1738" value="3" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1738" name="F1738" value="4" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1738" name="F1738" value="5" /><br />
                         
                         <input type="radio" id="F1740" name="F1740" value="1" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1740" name="F1740" value="2" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1740" name="F1740" value="3" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1740" name="F1740" value="4" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1740" name="F1740" value="5" /><br />
                         
                         <input type="radio" id="F1742" name="F1742" value="1" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1742" name="F1742" value="2" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1742" name="F1742" value="3" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1742" name="F1742" value="4" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1742" name="F1742" value="5" /><br />
                         
                         <input type="radio" id="F1744" name="F1744" value="1" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1744" name="F1744" value="2" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1744" name="F1744" value="3" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1744" name="F1744" value="4" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1744" name="F1744" value="5" /><br />
                         
                         <input type="radio" id="F1746" name="F1746" value="1" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1746" name="F1746" value="2" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1746" name="F1746" value="3" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1746" name="F1746" value="4" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1746" name="F1746" value="5" /><br />
                         
                         <input type="radio" id="F1748" name="F1748" value="1" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1748" name="F1748" value="2" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1748" name="F1748" value="3" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1748" name="F1748" value="4" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1748" name="F1748" value="5" /><br />
                         
                         <input type="radio" id="F1750" name="F1750" value="1"/> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1750" name="F1750" value="2" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1750" name="F1750" value="3" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1750" name="F1750" value="4" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1750" name="F1750" value="5" /><br />
                         
                         <input type="radio" id="F1752" name="F1752" value="1" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1752" name="F1752" value="2" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1752" name="F1752" value="3" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1752" name="F1752" value="4" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1752" name="F1752" value="5" /><br />
                         
                         <input type="radio" id="F1754" name="F1754" value="1" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1754" name="F1754" value="2" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1754" name="F1754" value="3" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1754" name="F1754" value="4" /> &nbsp;&nbsp;&nbsp;<input type="radio" id="F1754" name="F1754" value="5" /><br /><br>
    </tr>
    
    <tr bgcolor="#999999">
		<td align="left" colspan="6"><input type="button" onclick="kirim_form();" value="Simpan data" />&nbsp;<div id="pesan_kirim"></div></td>
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
