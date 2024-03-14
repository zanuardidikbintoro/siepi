<table width="100%" border="0">
  <tr>
    <td>No</td>
    <td>Judul Artikel</td>
    <td>Aksi</td>
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
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <?php } ?>
</table>
 