<?php
include 'accesscontrol.php'; 
?>
<table width="100%" border="0" class="table table-striped">
  <tr>
    <td width="12%"><strong>No</strong></td>
    <td width="80%"><strong>Judul Artikel</strong></td>
    <td width="4%"><strong>Aksi</strong></td>
    <td width="4%">&nbsp;</td>
  </tr>
  <?php
 $con=mysqli_connect("localhost", "ikmpurwo_root","sangatrahasi4","ikmpurwo_epi");
 $query=mysqli_query($con,"select * from artikel order by id ASC");
 $i=0;
 while($hasil=mysqli_fetch_array($query)){
	 $i++;
 ?>

  <tr>
    <td><?=$i;?></td>
    <td><?=$hasil['judul'];?></td>
    <td><a href="index.php?menu=editartikel.php&id=<?=$hasil['id'];?>" class="btn btn-info">Edit</a></td>
    <td><a href="index.php?menu=showartikel.php&id=<?=$hasil['id'];?>&aksi=hapus" class="btn btn-danger">Hapus</a></td>
  </tr>
  <?php } 
   
  
  ?>
  
</table>
<?php
if(isset($_GET["aksi"])=="hapus"){
	$query=mysqli_query($con,"delete from artikel where id=$_GET[id]");
	if($query) {echo "Sukses hapus data";
	echo("<meta http-equiv=\"refresh\" content=\"0;url=index.php?menu=showartikel.php\">");
	}
	else {echo "gagal";}
	
}


?>
 