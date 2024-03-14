 <?php
$con=mysqli_connect("localhost", "ikmpurwo_root","sangatrahasi4","ikmpurwo_epi");
$query=mysqli_query($con,"select * from artikel where id=$_GET[id]");
   //echo "sfsdfsfsfsdid".$_GET[id];
   $hasil=mysqli_fetch_array($query);
    
 ?>
<img class="thumbnail" src="uploaded/<?=$hasil['gambar'];?>">
<h2 class="title_color text-dark"><?=$hasil['judul'];?></h2>
            <p class="text-dark"><?=$hasil['isi'];?></p>