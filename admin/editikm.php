<?php
include 'accesscontrol.php'; 
?>
<?php  
	  $con=mysqli_connect("localhost", "ikmpurwo_root","sangatrahasi4","ikmpurwo_epi");
$isi=mysqli_query($con,"insert into detailikm(id) values('$_POST[id]')" );

$query=mysqli_query($con,"select * from locations, detailikm where locations.id=$_POST[id] and detailikm.id=$_POST[id]" );



$hasil=mysqli_fetch_array($query);

?>
<form name="edit" method="post" action="index.php?menu=editikm.php&aksi=update&id=<?=$hasil['id'];?>" enctype="multipart/form-data">
<table width="100%" border="0">
  <tbody>
	   <tr>
      <td width="27%">Nama IKM</td>
      <td width="4%">&nbsp;</td>
      <td width="69%"><input type="text" value="<?=$hasil['description'];?>" size="50" name="description"></td>
    </tr>
	   <tr>
      <td>Jenis IKM</td>
      <td>&nbsp;</td>
      <td><input type="text" value="<?=$hasil['jenis'];?>" size="50" name="jenis"></td>
    </tr>
	   <tr>
      <td>Nama Pemilik/Pengusaha</td>
      <td>&nbsp;</td>
      <td><input type="text" value="<?=$hasil['pengusaha'];?>" size="50" name="pengusaha"></td>
    </tr>
    <tr>
      <td>Alamat Email</td>
      <td>&nbsp;</td>
      <td><input type="text" value="<?=$hasil['email'];?>" size="50" name="email"></td>
    </tr>
    <tr>
      <td>Nomor HP</td>
      <td>&nbsp;</td>
      <td><input type="text" value="<?=$hasil['hp'];?>" size="50" name="hp"></td>
    </tr>
    <tr>
      <td>Nomor Whatsapp</td>
      <td>&nbsp;</td>
      <td><input type="text" value="<?=$hasil['wa'];?>" size="50" name="wa"></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>&nbsp;</td>
      <td><textarea name="alamat" cols="50" rows="10"><?=$hasil['alamat'];?></textarea></td>
    </tr>
    <tr>
      <td>Foto Profil</td>
      <td>&nbsp;</td>
      <td><input type="file" name="file" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="hidden" value="<?=$hasil['id'];?>" name="id"><input type="submit" name="submit" value="Ubah Data" class="btn btn-sm btn-info">
</td>
    </tr>
  </tbody>
</table>
	</form>

<?php
if($_GET["aksi"]=="update"){
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
					$q1=mysqli_query($con,"update locations set description='$_POST[description]'  where id='$_POST[id]'");
 $query=mysqli_query($con,"update detailikm set jenis='$_POST[jenis]',alamat='$_POST[alamat]',pengusaha='$_POST[pengusaha]',email='$_POST[email]',hp='$_POST[hp]',wa='$_POST[wa]',foto='$nama' where id='$_POST[id]'");
 if($query){
	 echo "Data berhasil diupdate....silahkan menunggu";
						echo("<meta http-equiv=\"refresh\" content=\"1;url=index.php?menu=inputikm.php\">");

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
  
