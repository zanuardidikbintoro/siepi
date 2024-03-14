<?php
include 'accesscontrol.php'; 
?>
<?php  
 $con=mysqli_connect("localhost", "ikmpurwo_root","sangatrahasi4","ikmpurwo_epi");
//$isi=mysqli_query($con,"insert into detailikm(id) values('$_POST[id]')" );
$i=0;
$query=mysqli_query($con,"select * from produk where idikm='$_GET[id]'" );
$ikm=mysqli_query($con,"select * from locations where id='$_GET[id]'" );
$dataikm=mysqli_fetch_array($ikm);
?>
<h3>Daftar Barang <?=$dataikm['description'];?></h3>
<table width="100%" border="0" class="table table-striped">
  <tbody>
    <tr class="bg-dark text-white">
      <td>Nomor</td>
      <td>Nama Barang</td>
      <td>Harga</td>
      <td>Keterangan</td>
      <td>Foto</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	  <?php
	  while($hasil=mysqli_fetch_array($query)){
	
	$i++;
		  ?>
    <tr>
      <td><?=$i;?></td>
      <td><?=$hasil['nama'];?></td>
      <td><?=$hasil['harga'];?></td>
      <td><?=$hasil['ket'];?></td>
      <td><img src="../uploaded/produk/<?=$hasil['foto'];?>" width="150"></td>
      <td><a href="index.php?menu=editproduk.php&id=<?=$hasil['id'];?>" class="btn btn-info">Edit</a></td>
      <td><a href="index.php?menu=lihatproduk.php&id=<?=$hasil['id'];?>&aksi=hapus&idkm=<?=$hasil['idikm'];?>" class="btn btn-danger">Hapus</a></td>
    </tr>
	  <?php } ?>
  </tbody>
</table>
<?php
if (isset($_GET["aksi"])=="hapus"){
	
	$query=mysqli_query($con, "delete from produk where id=$_GET[id]");
	if($query) echo("<meta http-equiv=\"refresh\" content=\"0;url=index.php?menu=lihatproduk.php&id=$_GET[idkm]\">");
}

?>
