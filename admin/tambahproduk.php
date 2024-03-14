<?php
include 'accesscontrol.php'; 
?>
<?php  
 $con=mysqli_connect("localhost", "ikmpurwo_root","sangatrahasi4","ikmpurwo_epi");
//$isi=mysqli_query($con,"insert into detailikm(id) values('$_POST[id]')" );

$query=mysqli_query($con,"select * from locations, detailikm where locations.id=$_GET[id] and detailikm.id=$_GET[id]" );

$hasil=mysqli_fetch_array($query);

?>
<script >

</script>
<form name="edit" method="post" action="index.php?menu=tambahproduk.php&aksi=tambah" enctype="multipart/form-data">
<table width="100%" border="0">
  <tbody>
	   <tr>
	     <td>Nama IKM</td>
	     <td>&nbsp;</td>
	     <td><b><?=$hasil['description'];?></b></td>
      </tr>
	   <tr>
      <td width="27%">Nama Produk</td>
      <td width="4%">&nbsp;</td>
      <td width="69%"><input type="text" size="50" name="nama">
		   </td>
    </tr>
	   <tr>
      <td>Harga</td>
      <td>&nbsp;</td>
      <td><input type="text" size="50" name="harga" id="rupiah2"></td>
    </tr>
    <tr>
      <td>Keterangan</td>
      <td>&nbsp;</td>
      <td><textarea name="ket" cols="50" rows="10"></textarea></td>
    </tr>
    <tr>
      <td>Foto Produk</td>
      <td>&nbsp;</td>
      <td><input type="file" name="file" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="hidden" value="<?=$hasil['id'];?>" name="id"><input type="submit" name="submit" value="Tambah" class="btn btn-sm btn-info">
</td>
    </tr>
  </tbody>
</table>
	</form>

<?php
if(isset($_GET["aksi"])=="tambah"){
 $con=mysqli_connect("localhost", "ikmpurwo_root","sangatrahasi4","ikmpurwo_epi");
$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, '../uploaded/produk/'.$nama);
					
					$q1=mysqli_query($con,"insert into produk (idikm, nama, harga, ket, foto) values ('$_POST[id]','$_POST[nama]','$_POST[harga]','$_POST[ket]','$nama')");
 
 if($q1){
	 echo "Data berhasil diupdate....silahkan menunggu";
						echo("<meta http-equiv=\"refresh\" content=\"1;url=index.php?menu=tambahproduk.php&id=$_POST[id]\">");

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
  
