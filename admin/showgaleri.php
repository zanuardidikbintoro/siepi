<?php
include 'accesscontrol.php'; 
?>
<table width="100%" border="0" class="table table-striped">
  <tr>
    <td width="5%"><strong>No</strong></td>
    <td width="34%"><strong>Judul</strong></td>
	   <td width="53%"><strong>Gambar</strong></td>
    <td width="4%"><strong>Aksi</strong></td>
    <td width="4%">&nbsp;</td>
  </tr>
  <?php
$con=mysqli_connect("localhost", "ikmpurwo_root","sangatrahasi4","ikmpurwo_epi");
 $query=mysqli_query($con,"select * from galeri order by id DESC");
 $i=0;
 while($hasil=mysqli_fetch_array($query)){
	 $i++;
 ?>

  <tr>
    <td><?=$i;?></td>
    <td><?=$hasil['judul'];?></td>
	  <td><img src="../uploaded/galeri/<?=$hasil['gambar'];?>" width="300"></td>
    <td><a href="index.php?menu=editgaleri.php&id=<?=$hasil['id'];?>" class="btn btn-info">Edit</a></td>
    <td><a href="index.php?menu=showgaleri.php&id=<?=$hasil['id'];?>&aksi=hapus" class="btn btn-danger">Hapus</a></td>
  </tr>
  <?php } 
   
  
  ?>
  
</table>
<?php
if(isset($_GET["aksi"])=="hapus"){
	$query=mysqli_query($con,"delete from galeri where id=$_GET[id]");
	if($query) {echo "Sukses hapus data";
	echo("<meta http-equiv=\"refresh\" content=\"0;url=index.php?menu=showgaleri.php\">");
	}
	else {echo "gagal";}
	
}


?>
 