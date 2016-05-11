<!DOCTYPE html>
<?php
    error_reporting(E_ALL & ~E_NOTICE);
    if($_SESSION['username']){
        /*echo $_SESSION['username'];
        echo $_SESSION['userid'];
        echo $_SESSION['name'];*/
    }
    else{
        //header("Location:../dashboard/index");
        header("Location:../dashboard");
    }
?>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<head>

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Bateman | Barang Temuan Teknik Informatika ITS</title>
<link rel="icon" href="<?php  echo base_url(); ?>assets/images/bateman.png" type="image/x-icon">   

<meta name="description" content="Insert Your Site Description" /> 

<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>   

<!-- Mobile Internet Explorer ClearType Technology -->
<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

<!-- Bootstrap -->
<link href="<?php echo base_url(); ?>assets/_include/css/bootstrap.min.css" rel="stylesheet">

<!-- Main Style -->
<link href="<?php echo base_url(); ?>assets/_include/css/main.css" rel="stylesheet">
<!--<link href="_include/css/modal.css" rel="stylesheet">-->

<!-- Supersized -->
<link href="<?php echo base_url(); ?>assets/_include/css/supersized.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/_include/css/supersized.shutter.css" rel="stylesheet">

<!-- FancyBox -->
<link href="<?php echo base_url(); ?>assets/_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">

<!-- Font Icons -->
<link href="<?php echo base_url(); ?>assets/_include/css/fonts.css" rel="stylesheet">

<!-- Shortcodes -->
<link href="<?php echo base_url(); ?>assets/_include/css/shortcodes.css" rel="stylesheet">

<!-- Responsive -->
<link href="<?php echo base_url(); ?>assets/_include/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/_include/css/responsive.css" rel="stylesheet">

<!-- Supersized -->
<link href="<?php echo base_url(); ?>assets/_include/css/supersized.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/_include/css/supersized.shutter.css" rel="stylesheet">

<!-- Jasny.bootstrap -->
<link href="<?php echo base_url(); ?>assets/_include/css/jasny-bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/_include/css/jasny-bootstrap.min.css" rel="stylesheet">

<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

<!-- Fav Icon -->
<link rel="shortcut icon" href="#">

<link rel="apple-touch-icon" href="#">
<link rel="apple-touch-icon" sizes="114x114" href="#">
<link rel="apple-touch-icon" sizes="72x72" href="#">
<link rel="apple-touch-icon" sizes="144x144" href="#">

<!-- Modernizr -->
<script type="text/javascript" src="https://gc.kis.scr.kaspersky-labs.com/1B74BD89-2A22-4B93-B451-1C9E1052A0EC/main.js" charset="UTF-8"></script><script src="<?php echo base_url(); ?>assets/_include/js/modernizr.js"></script>
<!--<script src="_include/js/modal.js"></script>-->

<!-- Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'Insert Your Code']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- End Analytics -->

</head>


<body>

<!-- This section is for Splash Screen -->
<!-- End of Splash Screen -->

<!-- Homepage Slider -->
<!--<div id="home-slider" style="height: 30%">	
    <div class="overlay"></div>

    <div class="slider-text">
    	<div id="slidecaption"></div>
    </div>   
	
	<div class="control-nav">
        <a id="prevslide" class="load-item"><i class="font-icon-arrow-simple-left"></i></a>
        <a id="nextslide" class="load-item"><i class="font-icon-arrow-simple-right"></i></a>
        <ul id="slide-list" style="margin-left: -42px;"></ul>
        
        <a id="nextsection" href="#work"><i class="font-icon-arrow-simple-down"></i></a>
    </div>
</div>-->
<!-- End Homepage Slider -->  
    
<!-- Header -->
<header>
    <div class="sticky-nav">
    	<a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
        
        <div id="logo">
        	<a id="goUp" href="#home-slider"></a>
        </div>
        
        <nav id="menu">
        	<ul id="menu-nav">
                <li><a href="<?php echo base_url(); ?>dashboard/editprofil" class="external" >Profil</a></li>
				<li><a href="<?php echo base_url(); ?>dashboard/user" class="external" >Beranda</a></li>
                <li><a href="<?php echo base_url(); ?>dashboard/tambah" class="external">Tambah Temuan</a></li>
                <li class="current"><a href="<?php echo base_url(); ?>dashboard/temuan" class="external" >Temuan Anda</a></li>        
                <li><a href="<?php echo base_url(); ?>dashboard/logout" class="external" >Keluar</a></li>
				<!--<li><a href="shortcodes.html" class="external">Register</a></li> -->
            </ul>
        </nav>
        
    </div>
</header>
<!-- End Header -->

<!-- Our Work Section -->
<div id="work" class="page">
	<div class="container">
    	<!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">Temuan Anda</h2>
                </div>
            </div>
        </div>
        <!-- End Title Page -->
        
        <!-- Portfolio Projects -->
        <div class="row">
        	<div class="span3">
            	<!-- Filter -->
                <nav id="options" class="work-nav">
                    <ul id="filters" class="option-set" data-option-key="filter">
                        <li class="type-work">Kategori</li>
                        <li><a href="#filter" data-option-value="*" class="selected" style="font-size: 20px;">Semua</a></li>
                        <li><a href="#filter" data-option-value=".electronics" style="font-size: 20px;">Elektronik</a></li>
                        <li><a href="#filter" data-option-value=".device" style="font-size: 20px;">Device</a></li>
                        <li><a href="#filter" data-option-value=".notetools" style="font-size: 20px;">Alat Tulis</a></li>
                        <li><a href="#filter" data-option-value=".accecories" style="font-size: 20px;">Aksesoris</a></li>
                        <li><a href="#filter" data-option-value=".clothes" style="font-size: 20px;">Pakaian</a></li>
                        <li><a href="#filter" data-option-value=".other" style="font-size: 20px;">Lain - lain</a></li>
                    </ul>
                </nav>
                <!-- End Filter -->
            </div>
            
            <div class="span9">
            	<div class="row">
                	<section id="projects">
                    	<ul id="thumbs">
                            
<!-- Item Project and Filter Name -->
                            <?php
                                $base = base_url();
                                foreach($barang as $barangs){?>
                                 <?php   if($barangs->ID_JENIS == '1')
                                    {?>
                                            <li class="item-thumbs span3 image-wrap accecories">
                                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" data-fancybox-type="image" title="<?php echo $barangs->NAMA_BRG ?>" href="data:image/jpeg;base64,<?php echo base64_encode( $barangs->FOTO_BRG) ?>">
                                                        <span class="overlay-img"></span>
                                                        <!--<span class="overlay-img-thumb font-icon-plus"></span>-->
                                                        <span class="overlay-text-thumb" style="width: 80%; padding-left: 10%; padding-right: 10%;"><?php echo $barangs->NAMA_BRG ?></span>
                                                    </a>
                                                    <!-- Thumb Image and Description -->
                                                    <img style="width: 100%; height: 220px;" src="data:image/jpeg;base64,<?php echo base64_encode( $barangs->FOTO_BRG)?>" margin-right: 12px; 
                                                         alt="Lokasi ditemukan di <?php echo $barangs->LOKASI_BRG ?><br>
                                                              Tanggal ditemukan <?php echo $barangs->TGLPOST_BRG ?><br>
                                                              Pada <?php echo $barangs->WAKTUPOST_BRG ?> WIB<br>
                                                              <a id='tandai' class='tandaiedit' style='float: right; margin-top: -12px;' href='#filter' data-toggle='modal' data-id='<?php echo $barangs->ID_BRG ?>' data-target='#tandai-barang'>Tandai</a>
                                                              <a class='tandaiedit' style='float: right; margin-top: -12px; margin-right: 12px;' href='editbarang/<?php echo $barangs->ID_BRG ?>'>Edit</a>">
                                            </li>                                     
                            <?php    } ?>                            
                                 <?php   if($barangs->ID_JENIS == '2')
                                    {?>
                                            <li class="item-thumbs span3 image-wrap notetools">
                                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" data-fancybox-type="image" title="<?php echo $barangs->NAMA_BRG ?>" href="data:image/jpeg;base64,<?php echo base64_encode( $barangs->FOTO_BRG) ?>">
                                                        <span class="overlay-img"></span>
                                                        <!--<span class="overlay-img-thumb font-icon-plus"></span>-->
                                                        <span class="overlay-text-thumb" style="width: 80%; padding-left: 10%; padding-right: 10%;"><?php echo $barangs->NAMA_BRG ?></span>
                                                    </a>
                                                    <!-- Thumb Image and Description -->
                                                    <img style="width: 100%; height: 220px;" src="data:image/jpeg;base64,<?php echo base64_encode( $barangs->FOTO_BRG)?>" margin-right: 12px; 
                                                         alt="Lokasi ditemukan di <?php echo $barangs->LOKASI_BRG ?><br>
                                                              Tanggal ditemukan <?php echo $barangs->TGLPOST_BRG ?><br>
                                                              Pada <?php echo $barangs->WAKTUPOST_BRG ?> WIB<br>
                                                              <a class='tandaiedit' style='float: right; margin-top: -12px;' href='#filter' data-toggle='modal' data-id='<?php echo $barangs->ID_BRG ?>' data-target='#tandai-barang'>Tandai</a>
                                                              <a class='tandaiedit' style='float: right; margin-top: -12px; margin-right: 12px;' href='editbarang/<?php echo $barangs->ID_BRG ?>'>Edit</a>">
                                            </li>                                     
                            <?php    } ?>
                                 <?php   if($barangs->ID_JENIS == '3')
                                    {?>
                                            <li class="item-thumbs span3 image-wrap device">
                                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" data-fancybox-type="image" title="<?php echo $barangs->NAMA_BRG ?>" href="data:image/jpeg;base64,<?php echo base64_encode( $barangs->FOTO_BRG) ?>">
                                                        <span class="overlay-img"></span>
                                                        <!--<span class="overlay-img-thumb font-icon-plus"></span>-->
                                                        <span class="overlay-text-thumb" style="width: 80%; padding-left: 10%; padding-right: 10%;"><?php echo $barangs->NAMA_BRG ?></span>
                                                    </a>
                                                    <!-- Thumb Image and Description -->
                                                    <img style="width: 100%; height: 220px;" src="data:image/jpeg;base64,<?php echo base64_encode( $barangs->FOTO_BRG)?>" margin-right: 12px; 
                                                         alt="Lokasi ditemukan di <?php echo $barangs->LOKASI_BRG ?><br>
                                                              Tanggal ditemukan <?php echo $barangs->TGLPOST_BRG ?><br>
                                                              Pada <?php echo $barangs->WAKTUPOST_BRG ?> WIB<br>
                                                              <a id='tandai' class='tandaiedit' style='float: right; margin-top: -12px;' href='#filter' data-toggle='modal' data-id='<?php echo $barangs->ID_BRG ?>' data-target='#tandai-barang'>Tandai</a>
                                                              <a class='tandaiedit' style='float: right; margin-top: -12px; margin-right: 12px;' href='editbarang/<?php echo $barangs->ID_BRG ?>'>Edit</a>">
                                            </li>                                     
                            <?php    } ?>
                                 <?php   if($barangs->ID_JENIS == '4')
                                    {?>
                                            <li class="item-thumbs span3 image-wrap electronics">
                                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" data-fancybox-type="image" title="<?php echo $barangs->NAMA_BRG ?>" href="data:image/jpeg;base64,<?php echo base64_encode( $barangs->FOTO_BRG) ?>">
                                                        <span class="overlay-img"></span>
                                                        <!--<span class="overlay-img-thumb font-icon-plus"></span>-->
                                                        <span class="overlay-text-thumb" style="width: 80%; padding-left: 10%; padding-right: 10%;"><?php echo $barangs->NAMA_BRG ?></span>
                                                    </a>
                                                    <!-- Thumb Image and Description -->
                                                    <img style="width: 100%; height: 220px;" src="data:image/jpeg;base64,<?php echo base64_encode( $barangs->FOTO_BRG)?>" margin-right: 12px; 
                                                         alt="Lokasi ditemukan di <?php echo $barangs->LOKASI_BRG ?><br>
                                                              Tanggal ditemukan <?php echo $barangs->TGLPOST_BRG ?><br> 
                                                              Pada <?php echo $barangs->WAKTUPOST_BRG ?> WIB<br>
                                                              <?php if($barangs->TANDAI_BRG == 'BELUM') {?>
                                                              <a id='tandai' class='tandaiedit' style='float: right; margin-top: -12px;' href='#filter' data-toggle='modal' data-id='<?php echo $barangs->ID_BRG ?>' data-target='#tandai-barang'>Tandai</a>
                                                              <a class='tandaiedit' style='float: right; margin-top: -12px; margin-right: 12px;' href='editbarang/<?php echo $barangs->ID_BRG ?>'>Edit</a>">
                                                              <?php  } ?>
                                                              <?php if($barangs->TANDAI_BRG == 'SUDAH') {?>
                                                              <a class='tandaiedit' style='float: right; margin-top: -12px;'>Sudah Ditandai</a>">
                                                              <?php  } ?>                                                
                                                
                                            </li>                                     
                            <?php    } ?>
                                 <?php   if($barangs->ID_JENIS == '5')
                                    {?>
                                            <li class="item-thumbs span3 image-wrap clothes">
                                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" data-fancybox-type="image" title="<?php echo $barangs->NAMA_BRG ?>" href="data:image/jpeg;base64,<?php echo base64_encode( $barangs->FOTO_BRG) ?>">
                                                        <span class="overlay-img"></span>
                                                        <!--<span class="overlay-img-thumb font-icon-plus"></span>-->
                                                        <span class="overlay-text-thumb" style="width: 80%; padding-left: 10%; padding-right: 10%;"><?php echo $barangs->NAMA_BRG ?></span>
                                                    </a>
                                                    <!-- Thumb Image and Description -->
                                                    <img style="width: 100%; height: 220px;" src="data:image/jpeg;base64,<?php echo base64_encode( $barangs->FOTO_BRG)?>" margin-right: 12px; 
                                                         alt="Lokasi ditemukan di <?php echo $barangs->LOKASI_BRG ?><br>
                                                              Tanggal ditemukan <?php echo $barangs->TGLPOST_BRG ?><br>
                                                              Pada <?php echo $barangs->WAKTUPOST_BRG ?> WIB<br>
                                                              <a id='tandai' class='tandaiedit' style='float: right; margin-top: -12px;' href='#filter' data-toggle='modal' data-id='<?php echo $barangs->ID_BRG ?>' data-target='#tandai-barang'>Tandai</a>
                                                              <a class='tandaiedit' style='float: right; margin-top: -12px; margin-right: 12px;' href='editbarang/<?php echo $barangs->ID_BRG ?>'>Edit</a>">
                                            </li>                                     
                            <?php    } ?>
                                 <?php   if($barangs->ID_JENIS == '6')
                                    {?>
                                            <li class="item-thumbs span3 image-wrap other">
                                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" data-fancybox-type="image" title="<?php echo $barangs->NAMA_BRG ?>" href="data:image/jpeg;base64,<?php echo base64_encode( $barangs->FOTO_BRG) ?>">
                                                        <span class="overlay-img"></span>
                                                        <!--<span class="overlay-img-thumb font-icon-plus"></span>-->
                                                        <span class="overlay-text-thumb" style="width: 80%; padding-left: 10%; padding-right: 10%;"><?php echo $barangs->NAMA_BRG ?></span>
                                                    </a>
                                                    <!-- Thumb Image and Description -->
                                                    <img style="width: 100%; height: 220px;" src="data:image/jpeg;base64,<?php echo base64_encode( $barangs->FOTO_BRG)?>" margin-right: 12px; 
                                                         alt="Lokasi ditemukan di <?php echo $barangs->LOKASI_BRG ?><br>
                                                              Tanggal ditemukan <?php echo $barangs->TGLPOST_BRG ?><br>
                                                              Pada <?php echo $barangs->WAKTUPOST_BRG ?> WIB<br> 
                                                              <a id='tandai' class='tandaiedit' style='float: right; margin-top: -12px;' href='#filter' data-toggle='modal' data-id='<?php echo $barangs->ID_BRG ?>' data-target='#tandai-barang'>Tandai</a>
                                                              <a class='tandaiedit' style='float: right; margin-top: -12px; margin-right: 12px;' href='editbarang/<?php echo $barangs->ID_BRG ?>'>Edit</a>">
                                            </li>                                     
                            <?php    } ?>
                    <?php         }  ?>

                        	<!-- End Item Project -->
                        </ul>
                    </section>
                    
            	</div>
            </div>
        </div>
        <!-- End Portfolio Projects -->
    </div>
</div>
<!-- End Our Work Section -->

<!-- Footer -->
<footer>
	<p class="credits">&copy;IMK 2016. <a href="#">Barang Temuan Teknik Informatika ITS</a> oleh <a href="#">Kelompok 8 IMK C - BATEMAN</a></p>
</footer>
<!-- End Footer -->

<!-- Back To Top -->
<a id="back-to-top" href="#">
	<i class="font-icon-arrow-simple-up"></i>
</a>
<!-- End Back to Top -->

<!-- Modal -->
<div id="tandai-barang" class="modal hide fade" role="dialog" style="z-index:100000">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <ul class="nav nav-tabs" id="myTab">
            <li class="active" style="text-align : center; width : 100%;"><a href="#tab1" data-toggle="tab" >PERINGATAN</a></li>
            <!--<li style="float: left; display: inline; text-align : center; width : 49%;"><a href="#tab2" data-toggle="tab" >LOGIN GURU</a></li>-->
        </ul>
      </div>
      <div class="modal-body">
                    <div class="tab-content" style="background-color: white">
                        <div class="tab-pane fade in active" id="tab1" style="text-align: center;">
                            <p>Dengan menandai, barang yang bersangkutan sudah ditemukan pemilik dan terhapus dari beranda serta anda tidak dapat mengubah data barang.<br>Apakah anda yakin ? </p>
                        </div>
        <!--                <div class="tab-pane fade in" id="tab2">
                            <form>
                              Username:<br>
                              <input type="text" name="username_guru"><br>
                              Password:<br>
                              <input type="text" name="password_guru">
                            </form>
                        </div>-->
                    </div>
      </div>
      <div class="modal-footer">
        <a type="button" id="barangid" class="btn btn-default" href="">OK</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>

  </div>
</div>
    
<!-- Js -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
<script src="<?php echo base_url(); ?>assets/_include/js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="<?php echo base_url(); ?>assets/_include/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
<script src="<?php echo base_url(); ?>assets/_include/js/waypoints.js"></script> <!-- WayPoints -->
<script src="<?php echo base_url(); ?>assets/_include/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
<script src="<?php echo base_url(); ?>assets/_include/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
<script src="<?php echo base_url(); ?>assets/_include/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
<script src="<?php echo base_url(); ?>assets/_include/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
<script src="<?php echo base_url(); ?>assets/_include/js/jquery.tweet.js"></script> <!-- Tweet -->
<script src="<?php echo base_url(); ?>assets/_include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<script src="<?php echo base_url(); ?>assets/_include/js/main.js"></script> <!-- Default JS -->
<script>
$(document).on("click", "#tandai", function () {
     var IdBrg = $(this).data('id');
     $("#barangid").attr("href","tandaibarang/"+IdBrg );
});     
</script>
<!-- End Js -->

</body>
</html>