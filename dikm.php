<?php  
	  $con=mysqli_connect("localhost", "ikmpurwo_root","sangatrahasi4","ikmpurwo_epi");
$query=mysqli_query($con,"select * from locations, detailikm where locations.id=detailikm.id order by locations.description ASC" );


?>
<table width="100%" border="0" class="table table-striped table-responsive">
  <tbody>
    <tr class="bg-dark text-white">
      <td>No</td>
      <td>Nama IKM</td>
      <td>Pengusaha</td>
      <td>Telepon</td>
		<td>Alamat</td>
      <td>&nbsp;</td>
     
    </tr>
	  <?php
	  $i=0;
	  while($hasil=mysqli_fetch_array($query)){
		  $queryx=mysqli_query($con,"select * from produk where idikm=$hasil[id]" );
$jum=mysqli_num_rows($queryx);
		  $i++;
		  ?>
    <tr>
      <td><?=$i;?></td>
      <td><?=$hasil['description'];?>  
		  <?php
		  
		  if($jum==0) $jum="Belum ada ";
		  ?>
		  <span class="badge badge-success"><?=$jum;?> produk</span></td>
      <td><?=$hasil['pengusaha'];?></td>
      <td><?=$hasil['hp'];?></td>
		<td><?=$hasil['alamat'];?></td>
      <td><a href="konten.php?menu=detailikm.php&id=<?=$hasil['id'];?>" class="btn btn-primary">Detail</a></td>
     
    </tr>
	  <?php } ?>
  </tbody>
</table>