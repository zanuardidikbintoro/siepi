<?php  
	 $con=mysqli_connect("localhost", "ikmpurwo_root","sangatrahasi4","ikmpurwo_epi");

$query=mysqli_query($con, "select * from locations, detailikm, produk where produk.id=$_GET[id] and locations.id=detailikm.id and detailikm.id=produk.idikm");
$hasil=mysqli_fetch_row($query);

function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
}

//$hasil=mysqli_fetch_array($query);

?>


<section class="area-padding-bottom">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                   <p></p>
                       <img width="300" class="img-thumbnail" src="uploaded/produk/<?=$hasil[18];?>" alt="<?=$hasil[15];?>" >
                    <div class="detail-info mb-2 p-2">
          <strong><?=$hasil[15];?></strong>
          <h3 class="text-danger" style="text-transform: initial;"><?php echo rupiah($hasil[16]);?></h3>
        </div>
               <div class="detail-info mb-2 p-2">
          <p>Dijual Oleh :</p>
          <h3><?=$hasil[3];?></h3>
         
          <p class="address m-0 p-0"><?=$hasil[7];?></p>
          <p class="address m-0 p-0">HP : <strong><?=$hasil[10];?></strong></p>
				    <p class="address m-0 p-0">Email : <?=$hasil[9];?></p>
        </div>
      <p>Lokasi:</p>
					
					<!-- map -->
					<iframe 
  width="400" 
  height="200" 
  frameborder="0" 
  scrolling="no" 
  marginheight="0" 
  marginwidth="0" 
  src="https://maps.google.com/maps?q=<?=$hasil[1];?>,<?=$hasil[2];?>&hl=es;z=14&amp;output=embed"
 >
 </iframe>
 <br />
 <small>
   <a 
    href="https://maps.google.com/maps?q=<?=$hasil[1];?>,<?=$hasil[2];?>&hl=es;z=14&amp;output=embed" 
    style="color:#0000FF;text-align:left" 
    target="_blank"
   >
     See map bigger
   </a>
 </small>
			  <div align="center">
          <a onclick="callButton(32);" href="tel:<?=$hasil[10];?>" class="btn btn-info"><i class="fa fa-phone"></i> Hubungi</a>
          <a onclick="callButton(32);" href="https://wa.me/<?=$hasil[11];?>?text=Saya ingin beli <?=$hasil[15];?>" class="btn btn-success"><i class="fab fa-whatsapp" aria-hidden="true"></i> Whatsapp</a>
			<a onclick="callButton(32);" href="mailto:<?=$hasil[9];?>" class="btn btn-danger"><i class="fa fa-envelope" aria-hidden="true"></i> Email</a>	
        </div>		
                    </div>
				
                        <div class="col-lg-6">
                    <div class="area-heading">
                        <h4> <?=$hasil[15];?></h4>
                        <div align="right">
          <a onclick="callButton(32);" href="tel:<?=$hasil[10];?>" class="btn btn-info"><i class="fa fa-phone"></i> Hubungi</a>
          <a onclick="callButton(32);" href="https://wa.me/<?=$hasil[11];?>?text=Saya ingin beli <?=$hasil[15];?>" class="btn btn-success"><i class="fab fa-whatsapp" aria-hidden="true"></i> Whatsapp</a>
			<a onclick="callButton(32);" href="mailto:<?=$hasil[9];?>" class="btn btn-danger"><i class="fa fa-envelope" aria-hidden="true"></i> Email</a>				 
        </div> 
						 
                       <?=$hasil[17];?>
                         <!--================ Start Faq Area =================-->
         
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================About Area End =================-->


	
    <h4 class="m-3">Produk Lainnya</h4>
    <div class="row gallery-item">
				<?php
		$queryx=mysqli_query($con,"select * from produk where idikm=$hasil[14] and id <>$_GET[id]" );
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
							 </div>
            
            </div>    </div>
      </div>
    