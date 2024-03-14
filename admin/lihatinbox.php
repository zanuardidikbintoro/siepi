<?php
include 'accesscontrol.php'; 
?>
<?php
if(isset($_GET['id'])){
include "jawab.php";
}

?>

<table width="100%" border="0" class="table table-hover">
  <tbody>
    <tr>
      <td width="5%">No</td>
      <td width="24%">Pengirim</td>
      <td width="39%">Pertanyaan</td>
      <td width="16%">Jawaban</td>
      <td width="16%">Aksi</td>
    </tr>
	  <?php  
	 $con=mysqli_connect("localhost", "ikmpurwo_root","sangatrahasi4","ikmpurwo_epi");
$query=mysqli_query($con,"select * from konsultasi order by id DESC" );
	  $i=0;
while($hasil=mysqli_fetch_array($query)){
	$i++;

?>
    <tr>
      <td><?=$i;?></td>
      <td><?=$hasil['nama'];?></td>
      <td><?=$hasil['tanya'];?></td>
      <td>
		  
		  <?php if(($hasil['jawaban'])==NULL){
		?>
	<a href='index.php?menu=lihatinbox.php&id=<?=$hasil['id'];?>'class='btn btn-info' target=''>Jawab</a>
		  <?php
	}
	else{ 
		
		echo $hasil['jawaban'];
		echo "<br><a href='index.php?menu=lihatinbox.php&id=$hasil[id]'class='btn btn-sm btn-success'>Ubah</a>";
		
		}
		  ?>
		
		</td>
		
      <td><a href="index.php?menu=lihatinbox.php&id=<?=$hasil['id'];?>&aksi=hapus"class='btn btn-danger'>Hapus</a></td>
    </tr>
	  <?php } ?>
  </tbody>
</table>
<?php
if (isset($_GET["aksi"])=="hapus"){
	
	$query=mysqli_query($con, "delete from konsultasi where id=$_GET[id]");
	if($query) echo("<meta http-equiv=\"refresh\" content=\"0;url=index.php?menu=lihatinbox.php\">");
}

?>
