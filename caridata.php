<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Peta IKM Purworejo - Si-EPI</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>

    <!--================Header Menu Area =================-->
    <header class="header_area">	
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li> 
                           
                                 
                           <li class="nav-item"><a class="nav-link" href="edukasi.php">Edukasi</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Promosi</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="promosi.php">Foto dan Video</a></li> 
                                    <li class="nav-item"><a class="nav-link" href="socmed.php">Social Media</a></li>
                                                                    </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Informasi IKM</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="petaikm.php">Peta IKM</a></li> 
									<li class="nav-item"><a class="nav-link" href="produk.php">Produk IKM</a></li>
                                    <li class="nav-item"><a class="nav-link" href="dataikm.php">Lihat Data IKM</a></li>
                                    <li class="nav-item"><a class="nav-link" href="caridata.php">Cari Data IKM</a></li>
                                </ul>
                            </li>
                             <li class="nav-item"><a class="nav-link" href="berita.php">Berita</a></li>
                            
                            <li class="nav-item"><a class="nav-link" href="about.php">Tentang Si-EPI</a></li>                           
                                              <li class="nav-item"><a class="nav-link" href="kontak.php">Kontak</a></li>
                        </ul>
                    </div>
                    
                    <div class="right-button">
                       <!-- <ul>
                            <li class="shop-icon"><a href="#"><i class="ti-shopping-cart-full"></i><span>0</span></a></li>
                            <li><a class="sign_up" href="">Sign Up</a></li>
                        </ul>-->
                    </div> 
                    
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->

    <!--================Hero Banner Area Start =================-->
    <section class="hero-banner d-flex align-items-center">
        <div class="container text-center">
            <h2>Data IKM </h2>
            <nav aria-label="breadcrumb" class="banner-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data IKM Purworejo</li>
                </ol>
            </nav>
        </div>
    </section>
    <!--================Hero Banner Area End =================-->

   

    <!--================About  Area =================-->
    <section class="area-padding-bottom">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-12">
                   <div class="area-heading">
<h3 class="title_color">Cari Data IKM Disini</h3>                   </div>
                    
                        <form name="frmcari" action="caridata.php?aksi=cari"
                        method="post" enctype="multipart/form-data" class="form-inline">
                       
                            <input type="text" name="cari" placeholder="Masukkan Nama IKM" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Nama IKM'" class="form-control" size="50">
                            <input type="submit" name="submit" class="btn btn-primary">
                       
                    </form>
					
					
					
					<?php  
					if(isset($_GET["aksi"])=="cari"){

$con=mysqli_connect("localhost", "ikmpurwo_root","sangatrahasi4","ikmpurwo_epi");
//echo $_POST['cari'];
$query=mysqli_query($con,"select * from locations, detailikm where locations.description like '%$_POST[cari]%' and locations.id=detailikm.id");
?>
<table width="100%" border="0" class="table table-striped">
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

<?php } ?>
					
                </div>

               
                </div>
            </div>
      
    </section>
    <!--================About Area End =================-->

 <footer class="footer-area">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Tentang Si-EPI</h4>
                    <p>Si-EPI merupakan Sistem Informasi IKM Kabupaten Purworejo</p>
                    <div class="footer-logo">
                        <img src="img/logo.png" alt="">
                    </div>
                </div>

                 <div class="col-lg-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Kontak</h4>
                    <div class="footer-address">
                        <p>Dinas Perindustrian dan Tenaga Kerja Kabupaten Purworejo</p>
                        <span>Telp : (0275) 325451</span>
                        <span>Email : info@ikmpurworejo.com</span>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Link Terkait</h4>
                    <ul>
                        <li><a href="http://www.purworejokab.go.id">Website Purworejo</a></li>
                        <li><a href="http://www.dinperinaker.purworejokab.go.id">Dinperinaker Purworejo</a></li>
                       
                                           </ul>
                </div>

                <div class="col-lg-3 col-md-8 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Berita</h4>
                      <ul>
                     <?php
                      $con=mysqli_connect("localhost", "ikmpurwo_root","sangatrahasi4","ikmpurwo_epi");
							 $query=mysqli_query($con,"select * from berita order by id DESC");
							 while($hasil1=mysqli_fetch_array($query)){
							?>
							
                   
                        <li><a href="beritadetail.php?id=<?=$hasil1['id'];?>"><?=$hasil1['judul'];?></a></li>
                      
                        <?php } ?>
                                           </ul>
<!--
                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                        method="get">
                        <div class="input-group">
                            <input type="email" class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '">
                            <div class="input-group-append">
                                <button class="btn click-btn" type="submit">
                                    <i class="fab fa-telegram-plane"></i>
                                </button>
                            </div>
                        </div>
                        <div style="position: absolute; left: -5000px;">
                            <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                        </div>

                        <div class="info"></div>
                    </form>
                </div>
-->
            </div>
        </div>
        <div class="footer-bottom row align-items-center text-center text-lg-left no-gutters">
            <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
<!--All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                <a href="#"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter-alt"></i></a>
                <a href="#"><i class="ti-dribbble"></i></a>
                <a href="#"><i class="ti-linkedin"></i></a>
            </div>
        </div>
    </div>
</footer>
<!-- ================ End footer Area ================= -->






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/contact.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/theme.js"></script>
</body>
</html>