<?php
include 'accesscontrol.php'; 
?>
<?php $con=mysqli_connect("localhost", "ikmpurwo_root","sangatrahasi4","ikmpurwo_epi"); ?>
<link rel="stylesheet" href="./minified/themes/default.min.css" id="theme-style" />
		  
		<script src="./minified/sceditor.min.js"></script>
		<script src="./minified/icons/monocons.js"></script>
		<script src="./minified/formats/bbcode.js"></script>
<?php if(isset($_GET['jenis'])!="edit"){ ?>
		
  <form name="frmkirim" method="post" action="index.php?menu=inputyutub.php&aksi=kirim" enctype="multipart/form-data">
<table width="100%" border="0" class="">
  <tr>
    <td>Judul</td>
    <td>:</td>
    <td><input type="text" size="40" name="judul" /></td>
  </tr>
  <tr>
    <td>Link Youtube (ID)</td>
    <td>:</td>
    <td><input type="text" size="50" name="link" /><br>Misal: https://www.youtube.com/watch?v=WlmWXoP0C0s, masukkan <b>WlmWXoP0C0s</b></td>
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
<?php } ?>
<?php if(isset($_GET['jenis'])=="edit"){ 
 $query=mysqli_query($con,"select * from youtube where id=$_GET[id]");
$hasil=mysqli_fetch_array($query);

?>
		
  <form name="frmedit" method="post" action="index.php?menu=inputyutub.php&aksiku=update" enctype="multipart/form-data">
<table width="100%" border="0" class="">
  <tr>
    <td>Judul</td>
    <td>:</td>
    <td><input type="text" size="40" name="judul" value="<?=$hasil['judul'];?>" /></td>
  </tr>
  <tr>
    <td>Link Youtube (ID)</td>
    <td>:</td>
    <td><input type="text" size="50" name="link" value="<?=$hasil['link'];?>" /><br>Misal: https://www.youtube.com/watch?v=WlmWXoP0C0s, masukkan <b>WlmWXoP0C0s</b></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" value="Ubah" name="submits" class="btn btn-success" />
	  <input type="hidden" value="<?=$hasil['id'];?>" name="id">
	  </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
<?php } ?>
<?php
if(isset($_GET["aksi"])=="kirim"){
 
 $query=mysqli_query($con,"insert into youtube (judul, link) values ('$_POST[judul]','$_POST[link]')");
 if($query){
	 echo "Artikel berhasil diinput....silahkan menunggu";
						echo("<meta http-equiv=\"refresh\" content=\"1;url=index.php?menu=inputyutub.php\">");
 }
}
else if(isset($_GET["aksiku"])=="update"){
 
 $query=mysqli_query($con,"update youtube set judul='$_POST[judul]',link='$_POST[link]' where id=$_POST[id]");
 if($query){
	 echo "Artikel berhasil diupdate....silahkan menunggu";
						echo("<meta http-equiv=\"refresh\" content=\"1;url=index.php?menu=inputyutub.php\">");
 }
}
include "showyutub.php";
 
?>
  