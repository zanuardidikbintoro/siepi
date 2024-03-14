<?php
include 'accesscontrol.php'; 
?>
<link rel="stylesheet" href="./minified/themes/default.min.css" id="theme-style" />
		  
		<script src="./minified/sceditor.min.js"></script>
		<script src="./minified/icons/monocons.js"></script>
		<script src="./minified/formats/bbcode.js"></script>

		
  <form name="frmkirim" method="post" action="index.php?menu=inputartikel.php&aksi=kirim" enctype="multipart/form-data">
<table width="100%" border="0" class="">
  <tr>
    <td>Judul</td>
    <td>:</td>
    <td><input type="text" size="40" name="judul" /></td>
  </tr>
  <tr>
    <td>Isi </td>
    <td>:</td>
    <td><textarea name="isi" cols="70" rows="30" id="example" style="height:300px;width:600px;"></textarea></td>
  </tr>
  <tr>
    <td>Gambar</td>
    <td>:</td>
    <td><input type="file" name="file" /><br /><br /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" value="Kirim" name="submit" class="btn btn-success" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
<script>
			var textarea = document.getElementById('example');
			sceditor.create(textarea, {
				format: 'xhtml',
				icons: 'monocons',
				style: '../minified/themes/content/default.min.css'
			});


			var themeInput = document.getElementById('theme');
			themeInput.onchange = function() {
				var theme = '../minified/themes/' + themeInput.value + '.min.css';

				document.getElementById('theme-style').href = theme;
			};
		</script>

<?php
if($_GET["aksi"]=="kirim"){
  $con=mysqli_connect("localhost", "ikmpurwo_root","sangatrahasi4","ikmpurwo_epi");
$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, '../uploaded/'.$nama);
 $query=mysqli_query($con,"insert into artikel (judul, isi, gambar) values ('$_POST[judul]','$_POST[isi]','$nama')");
 if($query){
	 echo "Artikel berhasil diinput....silahkan menunggu";
						echo("<meta http-equiv=\"refresh\" content=\"1;url=index.php?menu=inputartikel.php\">");

					}else{
						echo 'GAGAL MENGUPLOAD GAMBAR';
					}
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}
}
 
?>
  