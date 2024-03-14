<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php
include 'accesscontrol.php'; 
if($_GET["menu"]=="welcome.php"){
	$info="Admin Menu";
	$ket="admin";
}

if($_GET["menu"]=="inputartikel.php"){
	$info="Input Artikel Edukasi";
	$ket="inputartikel";
}
if($_GET["menu"]=="showartikel.php"){
	$info="Daftar Artikel Edukasi";
	$ket="showartikel";
}
if($_GET["menu"]=="lihatinbox.php"){
	$info="Konsultasi";
	$ket="inbox";
}
if($_GET["menu"]=="pilihmap.php"){
	$info="Pilih Lokasi IKM";
	$ket="pilihmap";
}
if($_GET["menu"]=="konfirmap.php"){
	$info="Konfirmasi Lokasi IKM";
	$ket="konfirmap";
}
if($_GET["menu"]=="inputikm.php"){
	$info="Pilih IKM";
	$ket="dataikm";
}
if($_GET["menu"]=="editikm.php"){
	$info="Edit Data Detail IKM";
	$ket="dataikm";
}

if($_GET["menu"]=="tambahproduk.php"){
	$info="Tambah Produk IKM";
	$ket="dataikm";
}
if($_GET["menu"]=="showikm.php"){
	$info="Data IKM";
	$ket="dataikm";
}
if($_GET["menu"]=="lihatproduk.php"){
	$info="Lihat Produk IKM";
	$ket="dataikm";
}

if($_GET["menu"]=="editproduk.php"){
	$info="Edit Produk IKM";
	$ket="dataikm";
}
if($_GET["menu"]=="inputberita.php"){
	$info="Input Berita";
	$ket="berita";
}
	if($_GET["menu"]=="inputgaleri.php"){
	$info="Input Galeri Promosi";
	$ket="promosi";
}

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Si EPI Admin Dashboard</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<style>
.resp-container {
    position: relative;
    overflow: hidden;
    padding-top: 56.25%;
}
.resp-iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0;
}

</style>
<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                           
                        </b>
                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" />
                            
                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->
                            
                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
               
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
		
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
					<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="index.php?menu=welcome.php" aria-expanded="false"><i class="mdi mdi-home"></i><span class="hide-menu">Home </span></a></li>
                   <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-tab"></i><span class="hide-menu">Artikel Edukasi </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="index.php?menu=inputartikel.php" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Input Artikel</span></a></li>
                                <li class="sidebar-item"><a href="index.php?menu=showartikel.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Edit Artikel </span></a></li>
								<li class="sidebar-item"><a href="index.php?menu=lihatinbox.php" class="sidebar-link">
									
									<?php
									 $con=mysqli_connect ("localhost", 'root', '','demo');
$query=mysqli_query($con,"select * from konsultasi where jawaban=''" );
									$jum=mysqli_num_rows($query);
									
									?>
									
									<i class="mdi mdi-note-plus"></i><span class="hide-menu"> Lihat Inbox 
									
									<?php if($jum!=0) { ?>
									<span class="text-danger">(<?=$jum;?>)<i class="fa fa-bell"></i></span><?php } ?></a></li>
                            </ul>
                        </li>
						 
                       
						 
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-map"></i><span class="hide-menu">Promosi IKM</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="index.php?menu=inputgaleri.php" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Input Galeri Promosi</span></a></li>
                                <li class="sidebar-item"><a href="index.php?menu=showgaleri.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Edit Galeri Promosi </span></a></li>
								 <li class="sidebar-item"><a href="index.php?menu=inputyutub.php" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Input Video Promosi</span></a></li>
                                <li class="sidebar-item"><a href="index.php?menu=showyutub.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Edit Video Promosi </span></a></li>
                            </ul>
                        </li>
                        
						
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-map"></i><span class="hide-menu">Lokasi IKM (Googlemap) </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="index.php?menu=pilihmap.php" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Pilih Lokasi IKM</span></a></li>
                                <li class="sidebar-item"><a href="index.php?menu=konfirmap.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Konfirmasi Lokasi IKM </span></a></li>
                            </ul>
                        </li>
                        
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-database"></i><span class="hide-menu">Data IKM </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="index.php?menu=inputikm.php" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Input Data IKM </span></a></li>
                                <li class="sidebar-item"><a href="index.php?menu=showikm.php" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Edit Data IKM </span></a></li>
                            </ul>
                        </li>
                        
                     <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-tab"></i><span class="hide-menu">Berita </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="index.php?menu=inputberita.php" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Input Berita</span></a></li>
                                <li class="sidebar-item"><a href="index.php?menu=showberita.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Edit Berita </span></a></li>
                            </ul>
                        </li>
                       <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="index.php?menu=logout.php" aria-expanded="false"><i class="mdi mdi-logout"></i><span class="hide-menu">Logout </span></a>
						</li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
		 <div class="page-wrapper">
           <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title"><?=$info;?></h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?=$ket;?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
         
			
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
       
          
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
               <?php
			   if(empty($_GET["menu"])){
				echo("<meta http-equiv=\"refresh\" content=\"0;url=index.php?menu=welcome.php\">");

			   }
				   else{
			   include $_GET["menu"];
				   }
			   ?>
                              
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

</body>

</html>