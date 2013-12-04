<table align="center" width="100%">
	<form name="frm">
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
        	<input type="radio" name="f3" />Kira-kira <input type="text" size="3" /> bulan sebelum lulus<br />
        	<input type="radio" name="f3" />Kira-kira <input type="text" size="3" /> bulan sesudah lulus<br />
       		<input type="radio" name="f3" /> Saya tidak mencari kerja (<i>Langsung ke pertanyaan F8</i>)
        </td>
	</tr>
    <tr>
    	<td align="left" valign="top">F4</td>
        <td align="left" valign="top" >Bagaimana anda mencari pekerjaan tersebut?<br /><i>Jawaban bisa lebih dari satu</i></td>
        <td valign="top"> : </td>
        <td valign="top" colspan="3">
        	<input type="checkbox" /> Melalui iklan di koran/majalah, brosur<br />
            <input type="checkbox" /> Melamar ke perusahaan tanpa mengetahui lowongan yang ada<br />
            <input type="checkbox" /> Pergi ke bursa/pameran kerja<br />
            <input type="checkbox" /> Mencari lewat internet/iklan online/milis<br />
            <input type="checkbox" /> Dihubungi oleh perusahaan<br />
            <input type="checkbox" /> Menghubungi Kemenakertrans<br />
            <input type="checkbox" /> Menghubungi agen tenaga kerja komersial/swasta<br />
            <input type="checkbox" /> Memperoleh informasi dari pusat/kantor pengembang karir fakultas/universitas<br />
            <input type="checkbox" /> Menghubungi kantor kemahasiswaan/hubungi alumni<br />
            <input type="checkbox" /> Membangun jejaring (<i>network</i>) sejak masih kuliah<br />
            <input type="checkbox" /> Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll)<br />
            <input type="checkbox" /> Membangun bisnis sendiri<br />
            <input type="checkbox" /> Melalui penempatan kerja atau magang<br />
            <input type="checkbox" /> Bekerja di tempat yang sama dengan tempa kerja semasa kuliah<br />
            <input type="checkbox" /> Lainnya<br />
            <input type="text" size="60" />
        </td>
    </tr>
  	<tr>
    	<td align="left" valign="top">F5</td>
		<td align="left">Berapa bulan waktu yang dihabiskan (sebelum dan sesudah kelulusan) untuk memeroleh pekerjaan pertama?</td>
        <td valign="top"> : </td>
        <td valign="middle" colspan="3">
        	<input type="radio" name="f5" />Kira-kira <input type="text" size="3" /> bulan sebelum lulus ujian<br />
        	<input type="radio" name="f5" />Kira-kira <input type="text" size="3" /> bulan setelah lulus ujian<br />
        </td>
	</tr>
    <tr>
    	<td align="left" valign="top">F6</td>
		<td align="left">Berapa perusahaan/instansi/institusi yang sudah anda lamar(lewat surat atau e-mail) sebelum anda menmeroleh pekerjaan pertama?</td>
        <td valign="top"> : </td>
        <td valign="middle" colspan="3">
        	<input type="text" size="3" /> perusahaan/instansi/institusi
        </td>
	</tr>
    <tr>
    	<td align="left" valign="top">F7</td>
		<td align="left">Berapa banyak perusahaan/instansi/institusi yang merespon lamaran anda?</td>
        <td valign="top"> : </td>
        <td valign="middle" colspan="3">
        	<input type="text" size="3" /> perusahaan/instansi/institusi
        </td>
	</tr>
    <tr>
    	<td align="left" valign="top">F8</td>
		<td align="left">Apakah anda bekerja saat ini (termasuk kerja sambilan dan wirausaha)?</td>
        <td valign="top"> : </td>
        <td valign="middle" colspan="3">
        	<input type="radio" name="f8" /> Ya (<i>Jika ya, lanjutkan ke F11</i>)<br />
            <input type="radio" name="f8" /> Tidak
        </td>
	</tr>
    <tr>
    	<td align="left" valign="top">F9</td>
        <td align="left" valign="top" >Bagaimana anda menggambarkan situasi anda saat ini?<br /><i>Jawaban bisa lebih dari satu</i></td>
        <td valign="top"> : </td>
        <td valign="top" colspan="3">
        	<input type="checkbox" /> Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana<br />
            <input type="checkbox" /> Saya menikah<br />
            <input type="checkbox" /> Saya sibuk dengan keluarga dan anak-anak<br />
            <input type="checkbox" /> Lainnya<br />
            <input type="text" size="60" />
        </td>
    </tr>
    <tr>
    	<td align="left" valign="top">F10</td>
        <td align="left" valign="top">Apakah anda aktif mencari pekerjaan dalam 4 minggu terakhir?<br /><i>Pilihlah satu jawaban. KEMUDIAN LANJUT KE F17</i></td>
        <td valign="top"> : </td>
        <td valign="middle" colspan="3">
        	<input type="radio" name="f10" /> Tidak<br />
            <input type="radio" name="f10" /> Tidak, tapi saya sedang menunggu hasil lamaran kerja<br />
            <input type="radio" name="f10" /> Ya, saya akan mulai bekerja dalam 2 minggu ke depan<br />
            <input type="radio" name="f10" /> Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan<br />
            <input type="radio" name="f10" /> Lainnya<br />
            <input type="text" size="60" />
        </td>
    </tr>
    <tr>
    	<td align="left" valign="top">F11</td>
        <td align="left" valign="top">Apa jenis perusahaan/instansi/institusi tempat anda bekerja sekarang?</td>
        <td valign="top"> : </td>
        <td valign="middle" colspan="3">
        	<input type="radio" name="f11" /> Instansi pemerintah (termasuk BUMN)<br />
            <input type="radio" name="f11" /> Organisasi no-profit/Lembaga Swadaya Masyarakat<br />
            <input type="radio" name="f11" /> Perusahaan Swasta<br />
            <input type="radio" name="f11" /> Wiraswasta/perusahaan sendiri<br />
            <input type="radio" name="f11" /> Lainnya, tuliskan:<br />
            <input type="text" size="60" />
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
        	Dari Pekerjaan Utama &nbsp;&nbsp;&nbsp;Rp. <input type="text" size="20" /><br />
            Dari Lembur dan Tips &nbsp;&nbsp;&nbsp;Rp. <input type="text" size="20" /><br />
            Dari Pekerjaan Lainnya &nbsp;Rp. <input type="text" size="20" /><br />
        </td>
    </tr>
    <tr>
    	<td align="left" valign="top">F14</td>
        <td align="left" valign="top">Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?</td>
        <td valign="top"> : </td>
        <td valign="middle" colspan="3">
        	<input type="radio" name="f14" /> Sangat Erat<br />
            <input type="radio" name="f14" /> Erat<br />
            <input type="radio" name="f14" /> Cukup Erat<br />
            <input type="radio" name="f14" /> Kurang Erat<br />
            <input type="radio" name="f14" /> Tidak Sama Sekali
        </td>
    </tr>
    <tr>
    	<td align="left" valign="top">F15</td>
        <td align="left" valign="top">tingkat pendidikan apa yang tepat/sesuai untuk pekerjaan anda saat ini?</td>
        <td valign="top"> : </td>
        <td valign="middle" colspan="3">
        	<input type="radio" name="f15" /> Setingkat lebih tinggi<br />
            <input type="radio" name="f15" /> Tingkat yang Sama<br />
            <input type="radio" name="f15" /> Setingkat Lebih Rendah<br />
            <input type="radio" name="f15" /> Tidak Perlu Pendidikan Tinggi
        </td>
    </tr>
    <tr>
    	<td align="left" valign="top">F16</td>
        <td align="left" valign="top" >Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya?<br />Jawaban bisa lebih dari satu</td>
        <td valign="top"> : </td>
        <td valign="top" colspan="3">
        	<input type="checkbox" /> Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya.<br />
            <input type="checkbox" /> Saya belum mendapatkan pekerjaan yang sesuai.<br />
            <input type="checkbox" /> Di pekerjaan ini saya memeroleh prospek karir yang baik.<br />
            <input type="checkbox" /> Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya.<br />
            <input type="checkbox" /> Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya.<br />
            <input type="checkbox" /> Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini.<br />
            <input type="checkbox" /> Pekerjaan saya saat ini lebih aman/terjamin/secure.<br />
            <input type="checkbox" /> Pekerjaan saya saat ini lebih menarik.<br />
            <input type="checkbox" /> Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll.<br />
            <input type="checkbox" /> Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya.<br />
            <input type="checkbox" /> Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya.<br />
            <input type="checkbox" /> Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya.<br />
            <input type="checkbox" /> Lainnya:<br />
            <input type="text" size="60" />
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
		<td align="left" colspan="6"><input type="submit" name="Simpan" value="Simpan data" onclick="cek()" /></td>
	</tr>
    
	</form>
</table>