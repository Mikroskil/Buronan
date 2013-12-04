<?php
mysql_connect("localhost", "root", "");
mysql_select_db("tracerstudy");
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

	/*document.frm.value;
	if(frm==0)
	{
		alert("makan");
	}
	function cek()
	{
		var cek1 = new Array(9);
		cek1[0] = document.frm.notelp.value;
		cek1[1] = document.frm.mail.value;
		
		var woi;
		for(var i=0; i<cek1.length; i++)
		{
			if((cek1[i]=="")||(cek1[i]==0))
			woi = 0;
		}
		if(woi==0)
			alert("Anda harus mengisi semua form");
	}
	
	function VerifyNum(textBox)
	{
	        var nvalid = parseFloat(textBox.value) ;
	        if ( isNaN(nvalid) ) {
	            alert ("Nilai yang dimasukkan harus angka");
	            textBox.value = "" ;
	            return (false);
	        }else{
	            return (true);
	        }
	}
	
	
}*/
function prosesData(){
	var F302 = document.getElementById('F302').value;
	var F303 = document.getElementById('F303').value;
	var F304 = document.getElementById('F304').value;
	var F401 = document.getElementById('F401').value;
	var F402 = document.getElementById('F402').value;
	var F403 = document.getElementById('F403').value;
	var F404 = document.getElementById('F404').value;
	var F405 = document.getElementById('F405').value;
	var F406 = document.getElementById('F406').value;
	var F407 = document.getElementById('F407').value;
	var F408 = document.getElementById('F408').value;
	var F409 = document.getElementById('F409').value;
	var F410 = document.getElementById('F410').value;
	var F411 = document.getElementById('F411').value;
	var F412 = document.getElementById('F412').value;
	var F413 = document.getElementById('F413').value;
	var F414 = document.getElementById('F414').value;
	var F415 = document.getElementById('F415').value;
	var F416 = document.getElementById('F416').value;
    var F502 = document.getElementById('F502').value;
	var F503 = document.getElementById('F503').value;
	var F6 = document.getElementById('F6').value;
	var F7 = document.getElementById('F7').value;
	var F901 = document.getElementById('F901').value;
	var F902 = document.getElementById('F902').value;
	var F903 = document.getElementById('F903').value;
	var F904 = document.getElementById('F904').value;
	var F905 = document.getElementById('F905').value;
	var F906 = document.getElementById('F906').value;
	var F1002 = document.getElementById('F1002').value;
	var F1102 = document.getElementById('F1102').value;
	var F1301 = document.getElementById('F1301').value;
	var F1302 = document.getElementById('F1302').value;
	var F1303 = document.getElementById('F1303').value;
	var F1601 = document.getElementById('F1601').value;
	var F1602 = document.getElementById('F1602').value;
	var F1603 = document.getElementById('F1603').value;
	var F1604 = document.getElementById('F1604').value;
	var F1605 = document.getElementById('F1605').value;
	var F1606 = document.getElementById('F1606').value;
	var F1607 = document.getElementById('F1607').value;
	var F1608 = document.getElementById('F1608').value;
	var F1609 = document.getElementById('F1609').value;
	var F1610 = document.getElementById('F1610').value;
	var F1611 = document.getElementById('F1611').value;
	var F1612 = document.getElementById('F1612').value;
	var F1613 = document.getElementById('F1613').value;
	var F1614 = document.getElementById('F1614').value;
	
	var xhr = new XMLHttpRequest();
	var data = new FormData();
	xhr.onreadystatechange = function(){
		if(xhr.readyState==4)
			document.getElementById('hasil').innerHTML = xhr.responseText;
		else
			document.getElementById('hasil').innerHTML = 'Loading ...';
			
	}
	
	xhr.open("POST", "proses.php");
	data.append("F302", F302);
	data.append("F303", F303);
	data.append("F304", F304);
	data.append("F401", F401);
	data.append("F402", F402);
	data.append("F403", F403);
	data.append("F404", F404);
	data.append("F405", F405);
	data.append("F406", F406);
	data.append("F407", F407);
	data.append("F408", F408);
	data.append("F409", F409);
	data.append("F410", F410);
	data.append("F411", F411);
	data.append("F412", F412);
	data.append("F413", F413);
	data.append("F414", F414);
	data.append("F415", F415);
	data.append("F416", F416);
    data.append("F502", F502);
	data.append("F503", F503);
	data.append("F6", F6);
	data.append("F7", F7);
	data.append("F901", F901);
	data.append("F902", F902);
	data.append("F903", F903);
	data.append("F904", F904);
	data.append("F905", F905);
	data.append("F906", F906);
	data.append("F1002", F1002);
	data.append("F1102", F1102);
	data.append("F1301", F1301);
	data.append("F1302", F1302);
	data.append("F1303", F1303);
	data.append("F1601", F1601);
	data.append("F1602", F1602);
	data.append("F1603", F1603);
	data.append("F1604", F1604);
	data.append("F1605", F1605);
	data.append("F1606", F1606);
	data.append("F1607", F1607);
	data.append("F1608", F1608);
	data.append("F1609", F1609);
	data.append("F1610", F1610);
	data.append("F1611", F1611);
	data.append("F1612", F1612);
	data.append("F1613", F1613);
	data.append("F1614", F1614);
		
	xhr.send(data);
}
	
</script>

<body>

<div id="wrap">

		<?php include('includes/nav.php'); ?>
		<?php include('includes/header.php'); ?>
        
        <div class="breadcrumb">   
     		<?php include('includes/partisipasi.php'); ?>
            <div class="well">
              
              
<table align="center" width="100%">
	<form name="frm" method="POST" action="javascript:prosesData();">
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
		<td align="left" colspan="3"><input type="text" name="nim" size="10" /></td>
	</tr>
	<tr>
    	<td align="left">F2A</td>
		<td align="left">Nama Mahasiswa </td>
        <td> : </td>
		<td align="left" colspan="3"><input type="text" name="namamhs" size="25" /></td>
	</tr>
	<tr>
    	<td align="left">F2B</td>
		<td align="left">Nomor Telepon/HP </td>
        <td> : </td>
		<td align="left" colspan="3"><input type="text" name="notelp" size="15" onkeyup="VerifyNum(this)" /></td>
	</tr>
	<tr>
    	<td align="left">F2C</td>
		<td align="left">Alamat Email </td>
        <td> : </td>
		<td align="left" colspan="3"><input type="email" name="mail" size="25" /></td>
	</tr><br />
    <tr>
    	<td align="left" colspan="6"><b>Tracer Study</b></td>
    </tr>
    <tr>
    	<td align="left" valign="top">F3</td>
		<td align="left">Kapan anda mulai mencari pekerjaan<br /><i>Mohon pekerjaan sambilan tidak dimasukkan&nbsp;&nbsp;</td>
        <td valign="top"> : </td>
        <td valign="top" colspan="3">
        	<input type="radio" name="f3" />Kira-kira <input type="text" size="3" id="F302" /> bulan sebelum lulus<br />
        	<input type="radio" name="f3" />Kira-kira <input type="text" size="3" id="F303" /> bulan sesudah lulus<br />
       		<input type="radio" name="f3" id="F304" value="1" /> Saya tidak mencari kerja (<i>Langsung ke pertanyaan F8</i>)
        </td>
	</tr>
    <tr>
    	<td align="left" valign="top">F4</td>
        <td align="left" valign="top" >Bagaimana anda mencari pekerjaan tersebut?<br /><i>Jawaban bisa lebih dari satu</i></td>
        <td valign="top"> : </td>
        <td valign="top" colspan="3">
        	<input type="checkbox" id="F401" value="1" /> Melalui iklan di koran/majalah, brosur<br />
            <input type="checkbox" id="F402" value="1" /> Melamar ke perusahaan tanpa mengetahui lowongan yang ada<br />
            <input type="checkbox" id="F403" value="1" /> Pergi ke bursa/pameran kerja<br />
            <input type="checkbox" id="F404" value="1" /> Mencari lewat internet/iklan online/milis<br />
            <input type="checkbox" id="F405" value="1" /> Dihubungi oleh perusahaan<br />
            <input type="checkbox" id="F406" value="1" /> Menghubungi Kemenakertrans<br />
            <input type="checkbox" id="F407" value="1" /> Menghubungi agen tenaga kerja komersial/swasta<br />
            <input type="checkbox" id="F408" value="1" /> Memperoleh informasi dari pusat/kantor pengembang karir fakultas/universitas<br />
            <input type="checkbox" id="F409" value="1" /> Menghubungi kantor kemahasiswaan/hubungi alumni<br />
            <input type="checkbox" id="F410" value="1" /> Membangun jejaring (<i>network</i>) sejak masih kuliah<br />
            <input type="checkbox" id="F411" value="1" /> Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll)<br />
            <input type="checkbox" id="F412" value="1" /> Membangun bisnis sendiri<br />
            <input type="checkbox" id="F413" value="1" /> Melalui penempatan kerja atau magang<br />
            <input type="checkbox" id="F414" value="1" /> Bekerja di tempat yang sama dengan tempa kerja semasa kuliah<br />
            <input type="checkbox" id="F415" value="1" /> Lainnya<br />
            <input type="text" size="60" id="F416" />
        </td>
    </tr>
  	<tr>
    	<td align="left" valign="top">F5</td>
		<td align="left">Berapa bulan waktu yang dihabiskan (sebelum dan sesudah kelulusan) untuk memeroleh pekerjaan pertama?</td>
        <td valign="top"> : </td>
        <td valign="middle" colspan="3">
        	<input type="radio" name="f5" />Kira-kira <input type="text" size="3" id="F502" /> bulan sebelum lulus ujian<br />
        	<input type="radio" name="f5" />Kira-kira <input type="text" size="3" id="F503" /> bulan setelah lulus ujian<br />
        </td>
	</tr>
    <tr>
    	<td align="left" valign="top">F6</td>
		<td align="left">Berapa perusahaan/instansi/institusi yang sudah anda lamar(lewat surat atau e-mail) sebelum anda menmeroleh pekerjaan pertama?</td>
        <td valign="top"> : </td>
        <td valign="middle" colspan="3">
        	<input type="text" size="3" id="F6" /> perusahaan/instansi/institusi
        </td>
	</tr>
    <tr>
    	<td align="left" valign="top">F7</td>
		<td align="left">Berapa banyak perusahaan/instansi/institusi yang merespon lamaran anda?</td>
        <td valign="top"> : </td>
        <td valign="middle" colspan="3">
        	<input type="text" size="3" id="F7" /> perusahaan/instansi/institusi
        </td>
	</tr>
    <tr>
    	<td align="left" valign="top">F8</td>
		<td align="left">Apakah anda bekerja saat ini (termasuk kerja sambilan dan wirausaha)?</td>
        <td valign="top"> : </td>
        <td valign="middle" colspan="3">
        	<input type="radio" name="f8" value="1" id="" /> Ya (<i>Jika ya, lanjutkan ke F11</i>)<br />
            <input type="radio" name="f8" value="2" id="" /> Tidak
        </td>
	</tr>
    <tr>
    	<td align="left" valign="top">F9</td>
        <td align="left" valign="top" >Bagaimana anda menggambarkan situasi anda saat ini?<br /><i>Jawaban bisa lebih dari satu</i></td>
        <td valign="top"> : </td>
        <td valign="top" colspan="3">
        	<input type="checkbox" id="F901" value="1" /> Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana<br />
            <input type="checkbox" id="F902" value="1" /> Saya menikah<br />
            <input type="checkbox" id="F903" value="1" /> Saya sibuk dengan keluarga dan anak-anak<br />
            <input type="checkbox" id="F904" value="1" /> Saya sekarang sedang mencari pekerjaan<br />
            <input type="checkbox" id="F905" value="1" /> Lainnya<br />
            <input type="text" size="60"  id="F906" />
        </td>
    </tr>
    <tr>
    	<td align="left" valign="top">F10</td>
        <td align="left" valign="top">Apakah anda aktif mencari pekerjaan dalam 4 minggu terakhir?<br /><i>Pilihlah satu jawaban. KEMUDIAN LANJUT KE F17</i></td>
        <td valign="top"> : </td>
        <td valign="middle" colspan="3">
        	<input type="radio" name="f10" id="" /> Tidak<br />
            <input type="radio" name="f10" id="" /> Tidak, tapi saya sedang menunggu hasil lamaran kerja<br />
            <input type="radio" name="f10" id="" /> Ya, saya akan mulai bekerja dalam 2 minggu ke depan<br />
            <input type="radio" name="f10" id="" /> Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan<br />
            <input type="radio" name="f10" id="" /> Lainnya<br />
            <input type="text" size="60" id="F1002" />
        </td>
    </tr>
    <tr>
    	<td align="left" valign="top">F11</td>
        <td align="left" valign="top">Apa jenis perusahaan/instansi/institusi tempat anda bekerja sekarang?</td>
        <td valign="top"> : </td>
        <td valign="middle" colspan="3">
        	<input type="radio" name="f11" id="" /> Instansi pemerintah (termasuk BUMN)<br />
            <input type="radio" name="f11" id="" /> Organisasi no-profit/Lembaga Swadaya Masyarakat<br />
            <input type="radio" name="f11" id="" /> Perusahaan Swasta<br />
            <input type="radio" name="f11" id="" /> Wiraswasta/perusahaan sendiri<br />
            <input type="radio" name="f11" id="" /> Lainnya, tuliskan:<br />
            <input type="text" size="60" id="F1102" />
        </td>
    </tr>
    <tr>
    	<td align="left" valign="top">F12</td>
        <td align="left" valign="top">Tempat anda bekerja saat ini bergerak di bidang apa? (Klasifikasi Baku Lapangan Usaha Indonesia, Kemnakertrans,2009)</td> 
        <td valign="top"> : </td>
        <td valign="middle" colspan="3">
        	<select size="1" name="f12" >
				<option value="0">--Menu--</option>
                <option></option>
				<option></option>                
			</select>
        </td>
    </tr>
    <tr>
    	<td align="left" valign="top">F13</td>
        <td align="left" valign="top">Kira-kira berappa pendapatan anda setiap bulannya?</td> 
        <td valign="top"> : </td>
        <td valign="middle" colspan="3">
        	Dari Pekerjaan Utama &nbsp;&nbsp;&nbsp;Rp. <input type="text" size="20" id="F1301" /><br />
            Dari Lembur dan Tips &nbsp;&nbsp;&nbsp;Rp. <input type="text" size="20" id="F1302" /><br />
            Dari Pekerjaan Lainnya &nbsp;Rp. <input type="text" size="20" id="F1303" /><br />
        </td>
    </tr>
    <tr>
    	<td align="left" valign="top">F14</td>
        <td align="left" valign="top">Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?</td>
        <td valign="top"> : </td>
        <td valign="middle" colspan="3">
        	<input type="radio" name="f14" id="" /> Sangat Erat<br />
            <input type="radio" name="f14" id="" /> Erat<br />
            <input type="radio" name="f14" id="" /> Cukup Erat<br />
            <input type="radio" name="f14" id="" /> Kurang Erat<br />
            <input type="radio" name="f14" id="" /> Tidak Sama Sekali
        </td>
    </tr>
    <tr>
    	<td align="left" valign="top">F15</td>
        <td align="left" valign="top">tingkat pendidikan apa yang tepat/sesuai untuk pekerjaan anda saat ini?</td>
        <td valign="top"> : </td>
        <td valign="middle" colspan="3">
        	<input type="radio" name="f15" id="" /> Setingkat lebih tinggi<br />
            <input type="radio" name="f15" id="" /> Tingkat yang Sama<br />
            <input type="radio" name="f15" id="" /> Setingkat Lebih Rendah<br />
            <input type="radio" name="f15" id="" /> Tidak Perlu Pendidikan Tinggi
        </td>
    </tr>
    <tr>
    	<td align="left" valign="top">F16</td>
        <td align="left" valign="top" >Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya?<br />Jawaban bisa lebih dari satu</td>
        <td valign="top"> : </td>
        <td valign="top" colspan="3">
        	<input type="checkbox" id="F1601" value="1" /> Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya.<br />
            <input type="checkbox" id="F1602" value="1" /> Saya belum mendapatkan pekerjaan yang sesuai.<br />
            <input type="checkbox" id="F1603" value="1" /> Di pekerjaan ini saya memeroleh prospek karir yang baik.<br />
            <input type="checkbox" id="F1604" value="1" /> Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya.<br />
            <input type="checkbox" id="F1605" value="1" /> Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya.<br />
            <input type="checkbox" id="F1606" value="1" /> Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini.<br />
            <input type="checkbox" id="F1607" value="1" /> Pekerjaan saya saat ini lebih aman/terjamin/secure.<br />
            <input type="checkbox" id="F1608" value="1" /> Pekerjaan saya saat ini lebih menarik.<br />
            <input type="checkbox" id="F1609" value="1" /> Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll.<br />
            <input type="checkbox" id="F1610" value="1" /> Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya.<br />
            <input type="checkbox" id="F1611" value="1" /> Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya.<br />
            <input type="checkbox" id="F1612" value="1" /> Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya.<br />
            <input type="checkbox" id="F1613" value="1" /> Lainnya:<br />
            <input type="text" size="60" id="F1614" />
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
        				 <input type="radio" name="f17-1" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-1"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-1"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-1"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-1"/> Pengetahuan di bidang atau disiplin ilmu anda<br />
                         
                         <input type="radio" name="f17-3" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-3"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-3"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-3"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-3"/> Pengetahuan diluar bidang atau disiplin ilmu anda<br />
                         
                         <input type="radio" name="f17-5" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-5"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-5"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-5"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-5"/> Pengetahuan umum<br />
                         
                         <input type="radio" name="f17-7" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-7"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-7"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-7"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-7"/> Ketrampilan internet<br />
                         
                         <input type="radio" name="f17-9" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-9"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-9"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-9"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-9"/> Keterampilan komputer<br />
                         
                         <input type="radio" name="f17-11" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-11"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-11"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-11"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-11"/> Berpikir kritis<br />
                         
                         <input type="radio" name="f17-13" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-13"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-13"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-13"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-13"/> Keterampilan riset<br />
                         
                         <input type="radio" name="f17-15" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-15"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-15"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-15"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-15"/> Kemampuan belajar<br />
                         
                         <input type="radio" name="f17-17" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-17"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-17"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-17"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-17"/> Kemampuan berkomunikasi<br />
                         
                         <input type="radio" name="f17-19" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-19"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-19"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-19"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-19"/> Bekerja di bawah tekanan<br />
                         
                         <input type="radio" name="f17-21" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-21"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-21"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-21"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-21"/> Manajemen waktu<br />
                         
                         <input type="radio" name="f17-23" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-23"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-23"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-23"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-23"/> Bekerja secara mandiri<br />
                         
                         <input type="radio" name="f17-25" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-25"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-25"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-25"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-25"/> Bekerja dalam tim/bekerjasama dengan orang lain<br />
                         
                         <input type="radio" name="f17-27" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-27"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-27"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-27"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-27"/> Kemampuan dalam memecahkan masalah<br />
                         
                         <input type="radio" name="f17-29" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-29"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-29"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-29"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-29"/> Negosiasi<br />
                         
                         <input type="radio" name="f17-31" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-31"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-31"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-31"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-31"/> Kemampuan analisis<br />
                         
                         <input type="radio" name="f17-33" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-33"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-33"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-33"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-33"/> Toleransi<br />
                         
                         <input type="radio" name="f17-35" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-35"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-35"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-35"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-35"/> Kemampuan adaptasi<br />
                         
                         <input type="radio" name="f17-37" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-37"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-37"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-37"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-37"/> Loyalitas dan integritas<br />
                         
                         <input type="radio" name="f17-39" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-39"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-39"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-39"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-39"/> Bekerja dengan orang yang berbeda budaya maupun latar belakang<br />
                         
                         <input type="radio" name="f17-41" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-41"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-41"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-41"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-41"/> Kepemimpinan<br />
                         
                         <input type="radio" name="f17-43" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-43"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-43"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-43"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-43"/> Kemampuan dalam memegang tanggung jawab<br />
                         
                         <input type="radio" name="f17-45" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-45"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-45"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-45"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-45"/> Inisiatif<br />
                         
                         <input type="radio" name="f17-47" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-47"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-47"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-47"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-47"/> Manajemen proyek/program<br />
                         
                         <input type="radio" name="f17-49" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-49"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-49"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-49"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-49"/> Kemampuan untuk memepresentasikan ide/produk/laporan<br />
                         
                         <input type="radio" name="f17-51" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-51"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-51"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-51"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-51"/> Kemampuan dalam menulis laporan, memo dan dokumen<br />
                         
                         <input type="radio" name="f17-53" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-53"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-53"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-53"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-53"/> Kemampuan untuk belajar sepanjang hayat<br />
        </td>
        
        <td width="20%" valign="top">
        <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(B)<br />&nbsp;Sangat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sangat <br /> Rendah &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tinggi <br /> 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 &nbsp;&nbsp;&nbsp;&nbsp;3 &nbsp;&nbsp;&nbsp;&nbsp;4 &nbsp;&nbsp;&nbsp;&nbsp;5</b><br />
        				
                        <input type="radio" name="f17-2" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-2"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-2"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-2"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-2"/><br />
                        
                         <input type="radio" name="f17-4" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-4"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-4"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-4"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-4"/><br />
                         
                         <input type="radio" name="f17-6" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-6"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-6"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-6"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-6"/><br />
                         
                         <input type="radio" name="f17-8" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-8"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-8"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-8"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-8"/><br />
                         
                         <input type="radio" name="f17-10" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-10"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-10"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-10"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-10"/><br />
                         
                         <input type="radio" name="f17-12" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-12"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-12"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-12"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-12"/><br />
                         
                         <input type="radio" name="f17-14" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-14"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-14"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-14"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-14"/><br />
                         
                         <input type="radio" name="f17-16" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-16"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-16"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-16"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-16"/><br />
                         
                         <input type="radio" name="f17-18" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-18"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-18"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-18"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-18"/><br />
                         
                         <input type="radio" name="f17-20" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-20"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-20"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-20"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-20"/><br />
                         
                         <input type="radio" name="f17-22" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-22"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-22"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-22"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-22"/><br />
                         
                         <input type="radio" name="f17-24" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-24"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-24"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-24"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-24"/><br />
                         
                         <input type="radio" name="f17-26" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-26"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-26"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-26"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-26"/><br />
                         
                         <input type="radio" name="f17-28" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-28"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-28"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-28"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-28"/><br />
                         
                         <input type="radio" name="f17-30" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-30"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-309"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-30"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-30"/><br />
                         
                         <input type="radio" name="f17-32" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-32"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-32"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-32"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-32"/><br />
                         
                         <input type="radio" name="f17-34" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-34"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-34"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-34"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-34"/><br />
                         
                         <input type="radio" name="f17-36" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-36"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-36"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-36"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-36"/><br />
                         
                         <input type="radio" name="f17-38" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-38"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-38"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-38"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-38"/><br />
                         
                         <input type="radio" name="f17-40" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-40"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-40"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-40"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-40"/><br />
                         
                         <input type="radio" name="f17-42" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-42"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-42"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-42"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-42"/><br />
                         
                         <input type="radio" name="f17-44" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-44"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-44"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-44"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-44"/><br />
                         
                         <input type="radio" name="f17-46" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-46"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-46"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-46"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-46"/><br />
                         
                         <input type="radio" name="f17-48" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-48"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-48"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-48"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-48"/><br />
                         
                         <input type="radio" name="f17-50" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-50"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-50"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-50"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-50"/><br />
                         
                         <input type="radio" name="f17-52" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-52"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-52"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-52"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-52"/><br />
                         
                         <input type="radio" name="f17-54" /> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-54"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-54"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-54"/> &nbsp;&nbsp;&nbsp;<input type="radio" name="f17-54"/><br /><br>
    </tr>
    
    
    <tr bgcolor="#999999">
		<td align="left" colspan="6"><input type="submit" name="Simpan" value="Simpan data" onclick="cek()" /><i id="hasil"></i></td>
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
