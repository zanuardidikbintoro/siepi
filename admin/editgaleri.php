<?php
include 'accesscontrol.php'; 
?>
 <?php
 $con=mysqli_connect("localhost", "ikmpurwo_root","sangatrahasi4","ikmpurwo_epi");
   $query=mysqli_query($con,"select * from galeri where id=$_GET[id]");
   //echo "sfsdfsfsfsdid".$_GET[id];
   $hasil=mysqli_fetch_array($query);
    
 ?>
<link rel="stylesheet" href="./minified/themes/default.min.css" id="theme-style" />
		  
		<script src="./minified/sceditor.min.js"></script>
		<script src="./minified/icons/monocons.js"></script>
		<script src="./minified/formats/bbcode.js"></script>
  <form name="frmkirim" method="post" action="index.php?menu=editgaleri.php&aksi=kirim" enctype="multipart/form-data">
<table width="100%" border="0" class="">
  <tr>
    <td>Judul</td>
    <td>:</td>
    <td><input type="text" size="40" name="judul" value="<?php echo $hasil['judul'];?>" /></td>
  </tr>
  <tr>
    <td>Isi </td>
    <td>:</td>
    <td><textarea name="isi" cols="70" rows="30" id="example" style="height:300px;width:600px;"><?=$hasil['isi'];?></textarea></td>
  </tr>
  <tr>
    <td>Gambar</td>
    <td>:</td>
    <td>
    <img src="../uploaded/galeri/<?=$hasil['gambar'];?>" width="300" />
    <br />
    <a href="index.php?menu=ubahgambargal.php&id=<?=$_GET['id'];?>" class="btn btn-info">Ubah Gambar</a>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="hidden" value="<?=$hasil['id'];?>" name="id" /><input type="submit" value="Kirim" name="submit" /></td>
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
 $query=mysqli_query($con,"update galeri set judul='$_POST[judul]',isi='$_POST[isi]' where id=$_POST[id]");
 if($query){
	 echo "Artikel berhasil diedit....silahkan menunggu";
	 						echo("<meta http-equiv=\"refresh\" content=\"0;url=index.php?menu=showgaleri.php\">");

								}
}
 
?>
  