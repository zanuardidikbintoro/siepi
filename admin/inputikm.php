<?php
include 'accesscontrol.php'; 
?>
<?php  
 $con=mysqli_connect("localhost", "ikmpurwo_root","sangatrahasi4","ikmpurwo_epi");
$query=mysqli_query($con,"select * from locations order by id DESC" );
?>
<form name="frmikm" method="post" action="index.php?menu=editikm.php" enctype="multipart/form-data">
<select name="id">
<?php
while($hasil=mysqli_fetch_array($query)){
?>
	<option value="<?=$hasil['id'];?>"><?=$hasil['description'];?></option>
	
<?php } ?>
	</select>
<input type="submit" name="submit" value="Edit Data" class="btn btn-sm btn-info">

	</form>