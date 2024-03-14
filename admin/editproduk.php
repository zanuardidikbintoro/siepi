<?php
include 'accesscontrol.php'; 
?>
<?php  
 $con=mysqli_connect("localhost", "ikmpurwo_root","sangatrahasi4","ikmpurwo_epi");
//$isi=mysqli_query($con,"insert into detailikm(id) values('$_POST[id]')" );

$query=mysqli_query($con,"select * from produk where id=$_GET[id]" );

$hasil=mysqli_fetch_array($query);

?>
<script >

</script>
<form name="edit" method="post" action="index.php?menu=editproduk.php&aksi=tambah&id=<?=$_GET['id'];?>" enctype="multipart/form-data">
<table width="100%" border="0">
  <tbody>
	   <tr>
	     <td>Nama Produk</td>
	     <td>&nbsp;</td>
	     <td><input type="text" size="50" name="nama" value="<?=$hasil['nama'];?>"></td>
      </tr>
	  	   <tr>
      <td>Harga</td>
      <td>&nbsp;</td>
      <td><input type="text" size="50" name="harga" value="<?=$hasil['harga'];?>"></td>
    </tr>
    <tr>
      <td>Keterangan</td>
      <td>&nbsp;</td>
      <td><textarea name="ket" cols="50" rows="10"><?=$hasil['ket'];?></textarea></td>
    </tr>
    <tr>
      <td>Foto Produk</td>
      <td>&nbsp;</td>
      <td>
		  <img src="../uploaded/produk/<?=$hasil['foto'];?>" width="200"><br>
		  <input type="file" name="file" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="hidden" value="<?=$hasil['id'];?>" name="id"><input type="submit" name="submit" value="Ubah" class="btn btn-sm btn-info">
</td>
    </tr>
  </tbody>
</table>
	</form>

<?php
if(isset($_GET["aksi"])=="tambah"){
 $con=mysqli_connect("localhost", "ikmpurwo_root","sangatrahasi4","ikmpurwo_epi");
$ekstensi_diperbolehkan	= array('png','jpg');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, '../uploaded/produk/'.$nama);
					
					$q1=mysqli_query($con,"update produk set nama='$_POST[nama]', harga='$_POST[harga]', ket='$_POST[ket]', foto='$nama' where id=$_POST[id]");
 
 if($q1){
	 echo "Data berhasil diupdate....silahkan menunggu";
						echo("<meta http-equiv=\"refresh\" content=\"1;url=index.php?menu=editproduk.php&id=$_GET[id]\">");

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
  
