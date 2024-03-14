<?php
include 'accesscontrol.php'; 
?>
<?php  
 $con=mysqli_connect("localhost", "ikmpurwo_root","sangatrahasi4","ikmpurwo_epi");
$query=mysqli_query($con,"select * from locations, detailikm where locations.id=detailikm.id order by locations.description ASC" );
?>
<table width="100%" border="0" class="table table-striped">
  <tbody>
    <tr class="bg-dark text-white">
      <td>No</td>
      <td>Nama IKM</td>
      <td>Pengusaha</td>
      <td>Telepon</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	  <?php
	  $i=0;
	  while($hasil=mysqli_fetch_array($query)){
		  $i++;
		  ?>
    <tr>
      <td><?=$i;?></td>
      <td><?=$hasil['description'];?></td>
      <td><?=$hasil['pengusaha'];?></td>
      <td><?=$hasil['hp'];?></td>
      <td><a href="index.php?menu=lihatproduk.php&id=<?=$hasil['id'];?>" class="btn btn-primary">Lihat Barang</a></td>
      <td><a href="index.php?menu=tambahproduk.php&id=<?=$hasil['id'];?>" class="btn btn-info">Tambah Barang</a></td>
      <td><a href="index.php?menu=showikm.php&id=<?=$hasil['id'];?>&aksi=hapus" class="btn btn-danger">Hapus</a></td>
    </tr>
	  <?php } ?>
  </tbody>
</table>

 <?php 
if(isset($_GET["aksi"])=="hapus"){
$qq=mysqli_query($con, "delete from locations where id=$_GET[id]");
$qqs=mysqli_query($con, "delete from produk where idikm=$_GET[id]");
$qqa=mysqli_query($con, "delete from detailikm where id=$_GET[id]");

if($qqa){
	 echo "Data berhasil diupdate....silahkan menunggu";
						echo("<meta http-equiv=\"refresh\" content=\"1;url=index.php?menu=showikm.php\">");
}
}

?>
