<h3 class="title_color text-dark">Konsultasi</h3>
            <p class="text-dark">Isikan pertanyaan anda melalui form di bawah ini, pakar kami akan menjawabnya</p>
<form name="kosul" method="post" action="konten.php?menu=konsultasi.php&aksi=kirim" enctype="multipart/form-data">
<table width="100%" class="table table-striped">
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input name="nama" type="text" size="40"/></td>
  </tr>
  <tr>
    <td>Email</td>
    <td>:</td>
    <td><input name="email" type="text" size="40"/></td>
  </tr>
  <tr>
    <td>Pertanyaan</td>
    <td>:</td>
    <td><textarea name="pertanyaan" cols="70" rows="10"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" value="Kirim" name="submit" class="btn btn-success"><input type="reset" value="Ulang" name="reset" class="btn btn-danger"></td>
  </tr>
</table></form>
 <?php

function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
 
$tanggal=tgl_indo(date('Y-m-d'));
if($_GET["aksi"]=="kirim"){
$con=mysqli_connect("localhost", "ikmpurwo_root","sangatrahasi4","ikmpurwo_epi");
$query=mysqli_query($con,"insert into konsultasi(nama, email, tanya, tanggal) values ('$_POST[nama]','$_POST[email]','$_POST[pertanyaan]','$tanggal')");
   
   
 echo "Terimakasih ".$_POST['nama']." pertanyaan anda sudah terkirim, narasumber kami akan segera menjawab pertanyaan anda";
}
   
   
   ?>