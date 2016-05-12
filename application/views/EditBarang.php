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

<?php
if(validation_errors()!=NULL){
    echo'
    <div class="alert alert-info" style="color: white">
        <button type="button" class="close" data-dismiss="alert">×</button>';
            echo validation_errors();
    echo '
    </div>';
}
?>
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
                    <h2 class="title">Edit Temuan Anda</h2>
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
                            <li class="type-work">Nama</li>
                            <li class="type-work">Jenis Barang</li>
                            <li class="type-work">Lokasi Ditemukan</li>
                            <li class="type-work">Tanggal</li>
                            <li class="type-work">Deskripsi</li>
                    <!--        <li><a href="#filter" data-option-value="*" class="selected" style="font-size: 20px;">Semua</a></li>
                            <li><a href="#filter" data-option-value=".electronics" style="font-size: 20px;">Elektronik</a></li>
                            <li><a href="#filter" data-option-value=".keys" style="font-size: 20px;">Kunci</a></li> -->
                        </ul>
                    </nav>
                <!-- End Filter -->
            </div>
                
            <div class="span5">
                <!-- Filter -->
                <form class="form-inline" action="<?php echo base_url(); ?>dashboard/updateBarang" method="POST" name="barangForm" id="barangForm" enctype="multipart/form-data">
                    <nav id="options" class="work-nav">
                        <ul id="filters" class="option-set" data-option-key="filter">
                        <?php
                            $base = base_url();
                            foreach($barang as $barangs){
                        ?>
                            <input type="hidden" name="barang_id" value="<?php echo $barangs->ID_BRG ?>">
                            <li class="type-work" style="margin-top: 0px; margin-bottom: 4%;"><input type="text" style="width: 97%; height: 80%;" name="nama_barang" placeholder="Nama Barang" value="<?php echo $barangs->NAMA_BRG ?>"></li>
                            <li class="type-work" style="margin-top: 0px; margin-bottom: 5%;">
                                <select style="width: 100%; height: 80%;" name="jenis_barang">
                                    <!--<option value="">
                                        -----
                                    </option>-->
                                    <?php if($barangs->ID_JENIS == 1){ ?>
                                        <option selected="selected" value="1">
                                            Aksesoris
                                        </option>
                                    <?php } ?>
                                    <?php if($barangs->ID_JENIS != 1){ ?>
                                        <option value="1">
                                            Aksesoris
                                        </option>                                    
                                    <?php } ?>
                                    <?php if($barangs->ID_JENIS == 2){ ?>
                                        <option selected="selected" value="2">
                                            Alat Tulis
                                        </option>
                                    <?php } ?>
                                    <?php if($barangs->ID_JENIS != 2){ ?>
                                        <option value="2">
                                            Alat Tulis
                                        </option>                                    
                                    <?php } ?>                                                                       
                                    <?php if($barangs->ID_JENIS == 3){ ?>
                                        <option selected="selected" value="3">
                                            Device
                                        </option>
                                    <?php } ?>
                                    <?php if($barangs->ID_JENIS != 3){ ?>
                                        <option value="3">
                                            Device
                                        </option>                                    
                                    <?php } ?>
                                    <?php if($barangs->ID_JENIS == 4){ ?>
                                        <option selected="selected" value="4">
                                            Elektronik
                                        </option>
                                    <?php } ?>
                                    <?php if($barangs->ID_JENIS != 4){ ?>
                                        <option value="4">
                                            Elektronik
                                        </option>                                    
                                    <?php } ?>                                    
                                    <?php if($barangs->ID_JENIS == 5){ ?>
                                        <option selected="selected" value="5">
                                            Pakaian
                                        </option>
                                    <?php } ?>
                                    <?php if($barangs->ID_JENIS != 5){ ?>
                                        <option value="5">
                                            Pakaian
                                        </option>                                    
                                    <?php } ?>
                                    <?php if($barangs->ID_JENIS == 6){ ?>
                                        <option selected="selected" value="6">
                                            Lain - lain
                                        </option>
                                    <?php } ?>
                                    <?php if($barangs->ID_JENIS != 6){ ?>
                                        <option value="6">
                                            Lain - lain
                                        </option>                                    
                                    <?php } ?>
                                </select>
                            </li>
                            <li class="type-work" style="margin-top: 0px; margin-bottom: 5%;"><input type="text" style="width: 97%; height: 80%;" name="lokasi_barang" placeholder="Lokasi Barang" value="<?php echo $barangs->LOKASI_BRG ?>"></li>
                            <li class="type-work" style="margin-top: 0px; margin-bottom: 5%;"><input type="date" style="width: 50%; height: 80%;" name="tanggal" value="<?php echo $barangs->TGLPOST_BRG ?>">&nbsp;&nbsp;&nbsp;Waktu&nbsp;&nbsp;&nbsp;<input type="time" style="width: 21%; height: 80%;" name="waktu" value="<?php echo $barangs->WAKTUPOST_BRG ?>"></li>
                            <li class="type-work" style="margin-top: 0px; margin-bottom: 5%;"><textarea type="text" rows="5" style="width: 97%; height: 80%; " name="deskripsi_barang" placeholder="Deskripsi mengenai barang temuan ...."><?php echo $barangs->DESKRIPSI_BRG ?></textarea></li>
                        </ul>
                    </nav>
                <!-- End Filter -->
            </div>
            <div class="span4">
                <div class="fileinput fileinput-new text-center" data-provides="fileinput" datastyle="width: 100%;">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 262.5px; height: 175px;"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $barangs->FOTO_BRG).'"/>' ?></div>
                         <div><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"><?php echo $barangs->NAMA_FOTO ?></span></div>
                            <span class="btn btn-default btn-file"><span class="fileinput-new">Foto Barang</span><span class="fileinput-exists">Ubah</span><input type="file" name="image" ></span>
                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Hapus</a>
                        </div>
                    </div>
            </div>
            <?php    } ?>
            
            </form>
            <div class="span3"></div>
            <div>
                <button type="submit" class="btn btn-default" form="barangForm" value="submitForm">OK</button>
                <!--<button type="button" class="btn btn-default" data-dismiss="modal">OK</button>-->
                <button type="button" class="btn btn-default">Batal</button>            
            </div>
                
        </div>
        <!-- End Portfolio Projects -->
    </div>
</div>
<!-- End Our Work Section -->

<!-- Footer -->
<footer>
	<p class="credits">&copy;IMK 2016. <a href="#">Barang Temuan Teknik Informatika ITS</a> oleh <a href="#">Bateman Team</a></p>
</footer>
<!-- End Footer -->

<!-- Back To Top -->
<a id="back-to-top" href="#">
	<i class="font-icon-arrow-simple-up"></i>
</a>
<!-- End Back to Top -->


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
<script src="<?php echo base_url(); ?>assets/_include/js/jasny-bootstrap.min.js"></script> <!-- photo -->
<script src="<?php echo base_url(); ?>assets/_include/js/jasny-bootstrap.js"></script> <!-- photo -->
<script src="<?php echo base_url(); ?>assets/_include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<script src="<?php echo base_url(); ?>assets/_include/js/main.js"></script> <!-- Default JS -->
<script>
$(document).ready(function(){
    $(".alert").addClass("in").fadeOut(20000);
});    
</script>
<!-- End Js -->

</body>
</html>