<?php
	mysql_connect("localhost","root","");
	mysql_select_db("tracerstudy");

	if (isset($_GET['nama']))
	{
		$nama = $_GET['nama'];
		//query ke database untuk mencari nama barang yang mirip dengan inputan kita
		$query = mysql_query("SELECT nim,nama FROM mahasiswa WHERE nama LIKE '%$nama%' LIMIT 5"); 
		 
		//mengecek jumlah hasil query dari $query
		$hasil = mysql_num_rows($query); 
		if ($hasil > 0) 
		{
			//menampilkan kemungkinan dari hsil input
			;
			while($data = mysql_fetch_row($query)) 
			{
				?>
				<a href='javascript:bukaInfo(<?=$data[0]?>);' title='<?=$data[1]?>'><?=$data[1]?><BR>
				<?php	
			}
		}
		else //jika tidak terdapat data yang kita inginkan
		{
			echo "Data tidak ditemukan";
		}
	}

	else if(isset($_GET['nim'])) //menampilkan info dari hasil pencarian
	{
		$nim = $_GET['nim'];
		$query = mysql_query("SELECT * FROM mahasiswa WHERE nim='$nim'");
		$info = mysql_fetch_row($query);
		echo "NIM : ".$info[0]."<BR>Nama : ".$info[1]."<BR>Jurusan : ".$info[2];
	}
?>