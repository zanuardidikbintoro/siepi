<?php
include 'accesscontrol.php'; 
?>
 <?php
$con=mysqli_connect("localhost", "ikmpurwo_root","sangatrahasi4","ikmpurwo_epi");
   $query=mysqli_query($con,"select * from galeri where id=$_GET[id]");
   //echo "sfsdfsfsfsdid".$_GET[id];
   $hasil=mysqli_fetch_array($query);
    
 ?>
 <form name="frmkirim" method="post" action="index.php?menu=ubahgambargal.php&aksi=kirim" enctype="multipart/form-data">
 Gambar semula<br>
  <img src="../uploaded/galeri/<?=$hasil['gambar'];?>" width="300" /><br>
 <input type="file" name="file" /><br><br><br>
  <input type="hidden" value="<?=$hasil['id'];?>" name="id" />
 <input type="submit" value="Kirim" name="submit" class="btn btn-success" />
 </form>
 <?php
if($_GET["aksi"]=="kirim"){
 $con=mysqli_connect("localhost", "ikmpurwo_root","sangatrahasi4","ikmpurwo_epi");
$ekstensi_diperbolehkan	= array('png','jpg');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, '../uploaded/'.$nama);
 $query=mysqli_query($con,"update galeri set gambar='$nama' where id=$_POST[id]");
 if($query){
	 echo "Artikel berhasil diinput....silahkan menunggu";
						echo("<meta http-equiv=\"refresh\" content=\"1;url=index.php?menu=editgaleri.php&id=$_POST[id]\">");

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