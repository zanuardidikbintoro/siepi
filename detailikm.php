

<?php  
$con=mysqli_connect("localhost", "ikmpurwo_root","sangatrahasi4","ikmpurwo_epi");
$query=mysqli_query($con,"select * from locations, detailikm where locations.id=$_GET[id] and detailikm.id=$_GET[id]" );



$hasil=mysqli_fetch_array($query);

	 $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

?>

<table width="100%" border="0" class="table">
  <tbody>
	  <tr>
	     <td colspan="3" align="center"><img src="uploaded/<?=$hasil['foto'];?>" class="img-fluid" alt="<?=$hasil['description'];?>" title="<?=$hasil['description'];?>"></td>
    </tr> 
	   <tr>
      <td colspan="3" align="center"><h3 class="bg-dark text-white"><?=$hasil['description'];?>
      
      </h3></td></tr>
     
	   <tr>
      <td width="27%">Jenis IKM</td>
      <td width="4%">:</td>
      <td width="69%"><?=$hasil['jenis'];?></td>
    </tr>
	   <tr>
      <td>Nama Pemilik/Pengusaha</td>
      <td>:</td>
		   <td><b><?=$hasil['pengusaha'];?></b></td>
    </tr>
    <tr>
      <td>Alamat Email</td>
      <td>:</td>
      <td><?=$hasil['email'];?></td>
    </tr>
    <tr>
      <td>Nomor HP</td>
      <td>:</td>
      <td><a class="btn btn-secondary" href="tel:<?=$hasil['hp'];?>"><?=$hasil['hp'];?></td>
    </tr>
    <tr>
      <td>Nomor Whatsapp</td>
      <td>:</td>
      <td><a class="btn btn-primary" href="https://api.whatsapp.com/send?phone=<?=$hasil['wa'];?>&text=Hallo saya mau tanya"><?=$hasil['wa'];?></a></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>:</td>
      <td><?=$hasil['alamat'];?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><iframe 
  width="400" 
  height="200" 
  frameborder="0" 
  scrolling="no" 
  marginheight="0" 
  marginwidth="0" 
  src="https://maps.google.com/maps?q=<?=$hasil['lat'];?>,<?=$hasil['lng'];?>&hl=es;z=14&amp;output=embed"
 >
 </iframe>
 <br />
 <small>
   <a 
    href="https://maps.google.com/maps?q=<?=$hasil['lat'];?>,<?=$hasil['lng'];?>&hl=es;z=14&amp;output=embed" 
    style="color:#0000FF;text-align:left" 
    target="_blank"
   >
     See map bigger
   </a>
 </small></td>
    </tr>
    
  </tbody>
</table>

<?php
$queryx=mysqli_query($con,"select * from produk where idikm=$_GET[id]" );
//echo $queryx;

					
					function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
 
}
?>
<div class="container">
            <div class="row align-items-center">

                <div class="col-lg-12">
                   
                         <div class="area-heading">                     
                        
                         <div class="section-top-border">
            <h3 class="title_color">Daftar Produk:</h3>
                       <div class="row gallery-item">
				<?php
				while($hasil=mysqli_fetch_array($queryx)){
					?>
				
				 <div class="col-md-4">
                <a href="konten.php?menu=produkdetail.php&id=<?=$hasil['id'];?>">
					<div class="single-gallery-image" style="background: url('uploaded/produk/<?=$hasil['foto'];?>');"></div> 
                <p align="center"><b><?=$hasil['nama'];?></b><br>
 
<?php echo rupiah($hasil['harga']);?></p>
               
              </div>
				<?php
				} ?></a>
							 </div> </div> </div> </div> </div> </div>




  
