<!DOCTYPE html>
<?php
    error_reporting(E_ALL & ~E_NOTICE);
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


<body>

<!-- This section is for Splash Screen -->
<!-- End of Splash Screen -->

<!-- Homepage Slider -->
<div id="home-slider" style="height: 30%">	
    <div class="overlay"></div>

    <div class="slider-text">
    	<div id="slidecaption"></div>
    </div>   
	
	<div class="control-nav">
        <a id="prevslide" class="load-item" style="opacity: 1"><i class="font-icon-arrow-simple-left"></i></a>
        <a id="nextslide" class="load-item" ><i class="font-icon-arrow-simple-right"></i></a>
        <ul id="slide-list" style="margin-left: -42px;"></ul>
        
        <a id="nextsection" href="#work"><i class="font-icon-arrow-simple-down"></i></a>
    </div>
</div>
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
            	<li class="current"><a href="#home-slider">Home</a></li>
                <li><a href="#work">Bateman</a></li>
                <li><a href="#about">Tentang Kami</a></li>
                <li><a href="#filter" data-toggle="modal" data-target="#login" >Masuk</a></li>
                <li><a href="#filter" data-toggle="modal" data-target="#register">Daftar</a></li>
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
                    <h2 class="title">Barang Temuan</h2>
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
                        <li><a href="#filter" data-option-value=".keys" style="font-size: 20px;">Kunci</a></li>
                    </ul>
                </nav>
                <!-- End Filter -->
            </div>
            
            <div class="span9">
            	<div class="row">
                	<section id="projects">
                    	<ul id="thumbs">
                        
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 image-wrap electronics">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Charger Laptop Asus X450-JN" href="<?php echo base_url(); ?>assets/_include/img/work/full/image-1-full.jpg">
                                	<span class="overlay-img"></span>
                                    <!--<span class="overlay-img-thumb font-icon-plus"></span>-->
                                    <span class="overlay-text-thumb" style="width: 80%; padding-left: 10%; padding-right: 10%;">Charger Laptop Asus X450-JN</span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img style="width: 100%; height: 220px;" src="<?php echo base_url(); ?>assets/_include/img/work/thumbs/image-1.jpg" 
                                     alt="Lokasi ditemukan di Lab. Pemrograman 2<br>
                                          Tanggal ditemukan 15/03/2015 15:30 WIB<br>
                                          Ditemukan oleh Batman<br>
                                          Kontak 085745557887">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 image-wrap electronics">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Smartphone Asus Zenfone 5" href="<?php echo base_url(); ?>assets/_include/img/work/full/image-2-full.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-text-thumb" style="width: 80%; padding-left: 10%; padding-right: 10%;">Smartphone Asus Zenfone 5</span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img style="width: 100%; height: 220px;" src="<?php echo base_url(); ?>assets/_include/img/work/thumbs/image-2.jpg" 
                                     alt="Lokasi ditemukan di Plasa Baru 1<br>
                                          Tanggal ditemukan 12/03/2015 13:30 WIB<br>
                                          Ditemukan oleh Divi Jaya<br>
                                          Kontak 085745557887">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 image-wrap keys">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Kunci motor Honda" href="<?php echo base_url(); ?>assets/_include/img/work/full/image-3-full.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-text-thumb" style="width: 80%; padding-left: 10%; padding-right: 10%;">Kunci motor Honda</span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img style="width: 100%; height: 220px;" src="<?php echo base_url(); ?>assets/_include/img/work/thumbs/image-3.jpg" 
                                     alt="Lokasi ditemukan di Lab. NCC<br>
                                          Tanggal ditemukan 10/03/2015 10:30 WIB<br>
                                          Ditemukan oleh Putro Satrio<br>
                                          Kontak 085745557887">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 image-wrap electronics">
                            	<!-- Fancybox Media - Gallery Enabled - Title - Link to Video -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Hard Disk Eksternal Seagate" href="<?php echo base_url(); ?>assets/_include/img/work/full/image-4-full.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-text-thumb" style="width: 80%; padding-left: 10%; padding-right: 10%;">Hard Disk Eksternal Seagate</span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img style="width: 100%; height: 220px;" src="<?php echo base_url(); ?>assets/_include/img/work/thumbs/image-4.jpg" 
                                     alt="Lokasi ditemukan di Lab. IGS<br>
                                          Tanggal ditemukan 08/03/2015 10:30 WIB<br>
                                          Ditemukan oleh Ken Genesius<br>
                                          Kontak 085745557887">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 image-wrap electronics">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Flash Disk HP" href="<?php echo base_url(); ?>assets/_include/img/work/full/image-5-full.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-text-thumb" style="width: 80%; padding-left: 10%; padding-right: 10%;">Flash Disk HP</span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img style="width: 100%; height: 220px;" src="<?php echo base_url(); ?>assets/_include/img/work/thumbs/image-5.jpg"
                                     alt="Lokasi ditemukan di Lab. AJK<br>
                                          Tanggal ditemukan 07/03/2015 09:30 WIB<br>
                                          Ditemukan oleh Putro Satrio<br>
                                          Kontak 085745557887">
                            </li>
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

<!-- About Section -->
<div id="about" class="page-alternate">
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="title-page">
                <h2 class="title">Tentang Kami</h2>
                <h3 class="title-description">Developer Bateman</h3>
            </div>
        </div>
    </div>
    <!-- End Title Page -->
    
    <!-- People -->
    <div class="row">
        <!-- Start Profile -->
    	<div class="span3 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">Project Manajer</span>
                </div>
                <img src="<?php echo base_url(); ?>assets/_include/img/profile/profile-01.jpg" alt="Divi Jaya">
            </div>
            <h3 class="profile-name">Divi Jaya</h3>
            <p class="profile-description">Saya merasa sedih melihat keadaan tempat penampungan barang temuan yang ada di Laboratorium Teknik Informatika ITS. 
			Terakhir saya lihat tempatnya hanya sebuah kotak kardus atau toples bekas yang tidak terawat. Akhirnya saya dan teman-teman memiliki ide untuk membuat sebuah aplikasi berbasis web 
			yang khusus untuk menampung informasi mengenai barang temuan tersebut. Dari ide itulah lahir Bateman.</p>
            	
<!--            <div class="social">
            	<ul class="social-icons">
                	<li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                    <li><a href="#"><i class="font-icon-social-facebook"></i></a></li>
                </ul>
            </div> -->
        </div>
        <!-- End Profile -->
        
        <!-- Start Profile -->
    	<div class="span3 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">Web Designer</span>
                </div>
                <img src="<?php echo base_url(); ?>assets/_include/img/profile/profile-02.jpg" alt="Putro Satrio">
            </div>
            <h3 class="profile-name">Putro Satrio</h3>
            <p class="profile-description">Dulu saya pernah lupa membawa pulang harddisk external yang saya miliki. Pdahal banyak file-file penting yang ada di dalamnya.
			Suatu ketika saya coba menanyakan barang saya kepada Administrator Lab dan mencoba mencari barang milik saya, namun barang saya tidak ada dimanapun. Beruntung suatu 
			ketika teman saya mengabarkan bahwa barang milik saya tersebut dibawa olehnya. Oleh karena itu, saat teman saya mengajak mengerjakan proyek Bateman, saya menyetujuinya tanpa keraguan sedikitpun.</p>
            	
  <!--          <div class="social">
            	<ul class="social-icons">
                	<li><a href="#"><i class="font-icon-social-facebook"></i></a></li>
                    <li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                </ul>-->
        </div>
        <!-- End Profile -->
        
        <!-- Start Profile -->
    	<div class="span3 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">Web Designer</span>
                </div>
                <img src="<?php echo base_url(); ?>assets/_include/img/profile/profile-03.jpg" alt="Ekky Melinda">
            </div>
            <h3 class="profile-name">Ekky Melinda</h3>
            <p class="profile-description">Kata Bateman lahir dari ide yang dicetuskan PM kami saat menyaksikan Film Superhero Batman. Bateman adalah singkatan dari Barang Temuan 
			dengan logo yang merupakan representasi Batman itu sendiri. Kami berharap Bateman dapat menjadi Superhero yang mampu menghubungkan Anda dengan barang milik Anda.</p>
            	
<!--            <div class="social">
            	<ul class="social-icons">
                    <li><a href="#"><i class="font-icon-social-facebook"></i></a></li>
                    <li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                </ul>
            </div> -->
        </div>
        <!-- End Profile -->
        
        <!-- Start Profile -->
    	<div class="span3 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">Database Administrator</span>
                </div>
                <img src="<?php echo base_url(); ?>assets/_include/img/profile/profile-04.jpg" alt="Ken Genesius">
            </div>
            <h3 class="profile-name">Ken Genesius</h3>
            <p class="profile-description">Superhero sejati tidak selalu lahir dengan kemampuan super atau semacamnya. Superhero sejati juga bisa lahir 
			dari tangan-tangan kecil kami. Seperti Bateman, yang lahir dengan cara sederhana, namun mampu memberikan manfaat yang cukup istimewa. Terima kasih Bateman!</p>
            	
<!--            <div class="social">
            	<ul class="social-icons">
                	<li><a href="#"><i class="font-icon-social-facebook"></i></a></li>
                    <li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                </ul>
            </div> -->
        </div>
        <!-- End Profile -->
        
    </div>
    <!-- End People -->
</div>
</div>
<!-- End About Section -->

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

<!-- Modal -->
<div id="login" class="modal hide fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <ul class="nav nav-tabs" id="myTab">
            <li class="active" style="text-align : center; width : 100%;"><a href="#tab1" data-toggle="tab" >MASUK</a></li>
            <!--<li style="float: left; display: inline; text-align : center; width : 49%;"><a href="#tab2" data-toggle="tab" >LOGIN GURU</a></li>-->
        </ul>
      </div>
      <div class="modal-body">
                    <div class="tab-pane fade in active" id="tab1">
                        <form action="<?php echo base_url(); ?>dashboard/checkLoginUser" name="loginuser" id="loginuser" method="POST" enctype="multipart/form-data">
                            email:<br>
                                <input type="text" name="email" placeholder="email"><br>
                            Password:<br>
                                <input type="password" name="password" placeholder="Password">
                        </form>  
                    </div>
      </div>
      <div class="modal-footer">
        <button id="muridForm" type="submit" class="btn btn-default" form="loginuser" value="submitForm">OK</button>
        <!--<button type="submit" class="btn btn-default" form="loginuser" value="submitForm">OK</button>-->
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal -->

<!-- Modal -->
<div id="register" class="modal hide fade" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active" style="text-align : center; width : 100%;"><a href="#tab1" data-toggle="tab" >DAFTAR</a></li>
                </ul>
            </div>
            <div class="modal-body">
                <div class="tab-content" style="background-color: white">
                    <div class="tab-pane fade in active" id="tab1">
                        <form action="<?php echo base_url(); ?>dashboard/account" method="POST" name="registerForm" id="registerForm" enctype="multipart/form-data">
                            <div style="float: left; width: 55%;">
                                Nama:<br>
                                    <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" value="<?php echo set_value('nama'); ?>" required>&nbsp;&nbsp;&nbsp;&nbsp;<span id="nama_verify" class="verify" style="display:inline-block; width:16px; height:16px;"></span><br>
                            </div>
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput" style="float: right; width: 40%;">
                              <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 175px; height: 200px;"></div>
                              <div>
                                <span class="btn btn-default btn-file"><span class="fileinput-new">Select Profile Picture</span><span class="fileinput-exists">Change</span><input type="file" name="image"></span>
                                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                              </div>
                            </div>
                            <div style="float: left; width: 55%;">
                                Email:<br>
                                    <input type="text" name="email" id="email" placeholder="Email" value="<?php echo set_value('email'); ?>" required>&nbsp;&nbsp;&nbsp;&nbsp;<span id="email_verify" class="verify" style="display:inline-block; width:16px; height:16px;"></span><br>
                            </div>                           
                            <div style="float: left; width: 55%;">
                                Password:<br>
                                    <input type="password" name="password" id="password" placeholder="Password" value="<?php echo set_value('password'); ?>" required>&nbsp;&nbsp;&nbsp;&nbsp;<span id="password_verify" class="verify" style="display:inline-block; width:16px; height:16px;"></span><br>
                            </div>
                            <div style="float: left; width: 55%;">
                                Konfirmasi Password:<br>
                                    <input type="password" name="confirm_password" placeholder="Konfirmasi Password"><br>
                            </div>
                     <!--       <div class="form-group">
                              <button class="btn btn-primary btn btn-block">OK</button>
                            </div> -->
                        </form>  
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default" form="registerForm" value="submitForm">OK</button>
                <!--<button type="button" class="btn btn-default" data-dismiss="modal">OK</button>-->
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>

    </div>
</div>
<!-- Modal -->
    
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

<script type="text/javascript">
$(document).ready(function(){
    $("#nama").blur(function(){
        var nama = $("#nama").val();
        
        if($("#nama").val().length >=5)
        {
         
            if(isValidFullname(nama))
            {
               $("#nama_verify").css({ "background-image": "url('<?php echo base_url();?>assets/_include/img/yes.png')" });
               email_con=true;
               //register_show();
            } else {
               
                $("#nama_verify").css({ "background-image": "url('<?php echo base_url();?>assets/_include/img/no.png')" });
            }
 
        }
        else {
            $("#nama_verify").css({ "background-image": "url('<?php echo base_url();?>assets/_include/img/no.png')" });
        }
    });    
    
    $("#email").blur(function(){
        var email = $("#email").val();
        
        if(email != 0)
        {
         
            if(isValidEmailAddress(email))
            {
               $("#email_verify").css({ "background-image": "url('<?php echo base_url();?>assets/_include/img/yes.png')" });
               email_con=true;
               //register_show();
            } else {
               
                $("#email_verify").css({ "background-image": "url('<?php echo base_url();?>assets/_include/img/no.png')" });
            }
 
        }
        else {
            $("#email_verify").css({ "background-image": "url('<?php echo base_url();?>assets/_include/img/no.png')" });
        }

    });
    $("#password").blur(function(){
        var password = $("#password").val();
        
        if($("#password").val().length >=6)
        {
         
            if(isValidPassword(password))
            {
               $("#password_verify").css({ "background-image": "url('<?php echo base_url();?>assets/_include/img/yes.png')" });
               email_con=true;
               //register_show();
            } else {
               
                $("#password_verify").css({ "background-image": "url('<?php echo base_url();?>assets/_include/img/no.png')" });
            }
 
        }
        else {
            $("#password_verify").css({ "background-image": "url('<?php echo base_url();?>assets/_include/img/no.png')" });
        }

    });
});

function isValidFullname(nama) {
        var pattern = new RegExp(/^[a-zA-Z _-]{7,50}$/i);
        return pattern.test(nama);
    }
function isValidPassword(password) {
        var pattern = new RegExp(/^[a-z0-9_-]{6,32}$/i);
        return pattern.test(password);
    }
function isValidEmailAddress(emailAddress) {
        var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
        return pattern.test(emailAddress);
    }
</script>

<!-- End Js -->

</body>
</html>