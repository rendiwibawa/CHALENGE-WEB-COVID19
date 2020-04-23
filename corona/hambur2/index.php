<!DOCTYPE html>
<html lang="en">
 
<head>

<title>Corona Test</title>
 
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
<link rel="stylesheet" href="http://localhost/nilai/aset/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="http://localhost/nilai/aset/fontawesome/css/all.min.css">
<style>
     
body {
    font-family: 'Roboto Condensed', sans-serif;  
    overflow: hidden;
    margin: 0;
    padding: 0;
   
}


.nav-up {
    top: -40px;
}


li {
    list-style: none;
}
 
 
/*------------------------ 2 Home ------------------------*/

.main {
    background: url(2.jpg) no-repeat;
    background-size: cover;
    display: table;
    width: 100%;
    position: relative;
}

.main:after {
    content: '';
    width: 100%;
    height: 100%;
    left: 0;
    z-index: -1;
    opacity: .85;
    position: absolute;
     
}
    .nav-icon{
        margin-left: 990px;
        margin-top: -540px;
    }
.main-title {
    font-size: 24px;
    line-height: 28px;
    color: #000;
    font-weight: 400;
}

.hello {
    color: #000;
    font-size: 45px;
    line-height: 28px;
}

.main-content {
    padding: 0 60px;
    vertical-align: middle;
    display: table-cell;
    height: 100%;
    width: 100%;
}

    .logo a{
        color: #000;
        margin-left: 30px;         
        font-size: 40px;
    }
  
    .logo a:hover{
        text-decoration: none;
    }

/*------------------------ 2.1 Full Menu ------------------------*/

.full-menu {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 3;
    height: 100%;
    width: 100%;
    overflow: hidden;
    background-size: cover;
    opacity: 0;
    visibility: hidden;   
    transition: opacity 0.3s 0s, visibility 0s 0.3s;
}

/* Full Menu */

.full-menu .modal-close {
    /* 'X' icon */
    position: absolute;
    z-index: 1;
    top: 0;
    right: 0;
    padding: 50px;
    height: 45px;
    width: 45px;
    border-radius: 50%;
    background:rgba(0, 0, 0, 0.3) url(cd-icon-close.svg)no-repeat center center;
    overflow: hidden;
    text-indent: 100%;
    white-space: nowrap;
    visibility: hidden;
    opacity: 0;     
    transform: scale(0);
    visibility: 0s 0.3s, opacity 0.3s 0s;
     
    transition: transform 0.3s 0s, visibility 0s 0.3s, opacity 0.3s 0s;
}

.no-touch .full-menu .modal-close:hover {
    background-color: rgba(0, 0, 0, 0.5);
}

.full-menu.visible {
    background-size: 100%;
    opacity: 1;
    visibility: visible;   
    transition: opacity 0.7s, visibility 0s;
}

.full-menu.visible .fullmenu-content {
    -webkit-overflow-scrolling: touch;
}

.full-menu.visible .modal-close {
    visibility: visible;
    opacity: 1;    
    transition: transform 0.3s 0s, visibility 0s 0s, opacity 0.3s 0s;     
    transform: scale(1);
}

@media only screen and (min-width: 1100px) {
    .full-menu .fullmenu-content {
        padding: 6em 5%;
    }
    .full-menu .modal-close {
        height: 60px;
        width: 60px;
    }
    .full-menu p {
        font-size: 25px;
    }
}

.cd-transition-layer {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 2;
    height: 100%;
    width: 100%;
    opacity: 0;
    visibility: hidden;
    overflow: hidden;
}

.cd-transition-layer .bg-layer {
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translateY(-50%) translateX(-2%);   
    transform: translateY(-50%) translateX(-2%);     
    height: 100%;
    /* our sprite is composed of 25 frames */
    width: 2500%;
    background: url(ink.png) no-repeat 0 0;
    background-size: 100% 100%;
}

.cd-transition-layer.visible {
    opacity: 1;
    visibility: visible;
}

.cd-transition-layer.opening .bg-layer {     
    animation: cd-sequence 1.0s steps(24);     
    animation-fill-mode: forwards;
}

.cd-transition-layer.closing .bg-layer {     
    animation: cd-sequence-reverse 1.0s steps(24);    
    animation-fill-mode: forwards;
}

.no-cssanimations .cd-transition-layer {
    display: none;
}

 
@keyframes cd-sequence {
    0% {
        transform: translateY(-50%) translateX(-2%);
    }
    100% {        
        transform: translateY(-50%) translateX(-98%);
    }
}

    
    
  
@keyframes cd-sequence-reverse {
    0% {
         
        transform: translateY(-50%) translateX(-98%);
    }
    100% {
         
        transform: translateY(-50%) translateX(-2%);
    }
}


/*------------------------ 2.2 Header ------------------------*/

.full-menu .fullmenu-content {
    height: 100%;
    width: 100%;
    display: table;
}

.page-menu {
    display: table-cell;
    vertical-align: middle;
    text-align: center;
}

.page-menu li {
    line-height: 50px;
    margin-left: -25px;
}

.page-menu li:last-child {
    line-height: 90px;
}

.page-menu li a {
    color: #fff;
    font-size: 26px;
    position: relative;
    font-weight: 500;
     
}

.social img {
    width: 15px;
}

.main .social {
    margin-top: 30px;
}

.social a {
    margin-right: 20px;
}

.social a:hover img {
    opacity: .6;
    transition: all ease 0.3s;
}

.social a:last-child {
    margin-right: 0px;
}

 
 

header {
    position: fixed;
    padding: 30px;
    top: 0;
    width: 100%;
    z-index: 2;
}


.nav-icon {
    width: 23px;
    height: 18px;
    position: relative;    
    transform: rotate(0deg);     
    transition: .5s ease-in-out;
    cursor: pointer;
    margin-top: 7px;
}

.nav-icon span {
    display: block;
    position: absolute;
    height: 2px;
    width: 100%;
    background: #fff;
    opacity: 1;    
    transform: rotate(0deg);   
    transition: .25s ease-in-out;
}

.nav-icon span:nth-child(1) {
    top: 0px;     
    transform-origin: left center;
}

.nav-icon span:nth-child(2) {
    top: 6px;    
    transform-origin: left center;
}

.nav-icon span:nth-child(3) {
    top: 12px;     
    transform-origin: left center;
    width: 60%;
    right: 0 !important;
}

.nav-icon:hover span:nth-child(3) {
    width: 100%;
}



     
</style>
</head>

<body>
    <?php
include '../koneksi.php';
include '../aset/footer.php';
    ?>

<header>
	<div class="logo float-left">
	</div> 
	<div class="nav-icon float-right">
		<span></span>
		<span></span>
		<span></span>
	</div>
</header>

<!-- Full Menu -->
<div class="full-menu">
	<div class="fullmenu-content">
		<ul class="page-menu">
			<li><a href="http://localhost/corona/hambur2/index.php">Home</a></li><br>
			<li><a href="http://localhost/corona/hambur/index.php">Login Medis</a></li><br>
			<li><a href="http://localhost/corona/coba">About developer</a></li><br>
			<li class="social">
				<a href="#"><img src="icons/social/twitter.svg" alt=""></a>
				<a href="#"><img src="icons/social/dribbble.svg" alt=""></a>
				<a href="#"><img src="icons/social/instagram.svg" alt=""></a>
				<a href="#"><img src="icons/social/send.svg" alt=""></a>
			</li>
		</ul>
	</div>
	<a href="#0" class="modal-close"></a>
</div>
<div class="cd-transition-layer visible opening"> 
	<div class="bg-layer"></div>
</div><!-- Ink Transition -->

<div class="wrapper">
 
<section class="main">
	<div class="main-content">
        <span class="hello">Hello Warga Indonesia</span><br>
		<h1 class="main-title">Saat ini dengan mulai munculnya ODP,PDP<br>
        dan kasus Positif COVID-19 ,Tentunya self-asssement COVID-19<br>
        akan sangat di butuhkan oleh masyarakat !
        
        </h1><br>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahpasien"><i class="fas fa-plus"></i> 
IKUTI TES !!
</button>

<!-- Modal Tambah Pasien-->
<div class="modal fade" id="tambahpasien" tabindex="-1" role="dialog" aria-labelledby="tambahpasienTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahpasienTitle"><i class="fas fa-file mr-2"></i>Biodata</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="card-body">
                    <form method="post"enctype="multipart/form-data" action="proses-tambah.php">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama"required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat"required>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kel">Jenis Kelamin</label><br>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control"required>
                                <option value="">Jenis Kelamin</option>
                                <option value="L">L (Laki-Laki)</option>
                                <option value="P">P (Perempuan)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tlp">NO.Telphon</label>
                            <input type="number"class="form-control" name="tlp" id="tlp" placeholder="Masukkan NO.Telphon"required>
                        </div>
                        <div class="form-group">
                        <label for="datepicker">Tanggal Cek</label>
                        <input type="date" name="tgl_terakhir" class="form-control"><br><br>
                        
                        <h5 class="modal-title" id="tambahpasienTitle"><i class="fas fa-check mr-2"></i>Self Check Up COVID-19</h5><br>
                        <!-- Tes1111111111111111111111111111111111111111 -->
                       </div>
                        <div class="form-group">
                            <h5><label for="tes1"><b>Apakah Anda mengalami satu dari yang berikut ini:<br></b></h5>
                            -Kesulitan bernafas yang parah (Bernafas dengan sangat cepat atau berbicara dalam satu kata)<br>
                            -Nyeri dada yang parah<br>
                            -Sulit untuk bangun<br>
                            -Merasa kebingungan<br>
                            -Penurunan kesadaran<br>
                             </label><br>
                            <select name="tes1" id="tes1" class="form-control"required>
                                <option value="">Jawab</option>
                                <option value=1>Iya</option>
                                <option value=2>Tidak</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <h5><label for="tes2"><b>Apakah Anda mengalami salah satu dari yang berikut:<br></b></h5>
                            -Nafas yang pendek saat istirahat<br>
                            -Ke2mampuan untuk berbaring karena kesulitan bernafas<br>
                            -Kondisi kesehatan kronis yang anda alami dirasakan lebih berat karena kesulitan bernapas<br>
                             </label><br>
                            <select name="tes2" id="tes2" class="form-control"required>
                                <option value="">Jawab</option>
                                <option value=1>Iya</option>
                               <option value=2>Tidak</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <h5><label for="tes3"><b>Apakah anda pernah muncul gejala sekitar 14 hari setelah travelling ke luar negeri? <br></h5></b>
                            (China, Italy, Iran, Korea Selatan, Prancis, Spanyol, Jerman, USA) <br>
                            atau ke kota terjangkit (Jakarta, Bali, Solo, Yogyakarta, Pontianak, Manado, Bandung dll)?<br>
                             </label><br>
                            <select name="tes3" id="tes3" class="form-control"required>
                                <option value="">Jawab</option>
                                <option value=1>Iya</option>
                               <option value=2>Tidak</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <h5><label for="tes4"><b>Apakah Anda memberikan perawatan atau melakukan kontak dekat dengan seseorang dengan COVID-19 (kemungkinan atau dikonfirmasi) saat mereka sakit (batuk, demam, bersin, atau sakit tenggorokan)?<br></b></h5>
                             </label><br>
                            <select name="tes4" id="tes4" class="form-control"required>
                                <option value="">Jawab</option>
                                <option value=1>Iya</option>
                               <option value=2>Tidak</option>
                            </select>
                        </div>
      <div class="modal-footer">
      <button href="kesimpulan.php?id_tes=<?= $p['id_tes'] ?>" type="submit" class="btn btn-primary" name="simpan">Simpan</button>
      <button type="reset" onclick="window.location.href='index.php'"class="btn btn-danger" name="Batal">Batal</button>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Akhir Tambah Pasien -->
		<div class="social">
			<!-- <a href="#"><img src="icons/social/twitter.svg" alt=""></a>
			<a href="#"><img src="icons/social/instagram.svg" alt=""></a>
			<a href="#"><img src="icons/social/dribbble.svg" alt=""></a> -->
			<a href="#"><img src="icons/social/send.svg" alt=""></a>
		</div>
	</div>
	 
	 
</section>
 
 
<script src="jquery-2.1.4.min.js"></script>
 
 <script>
 'use strict'; 

$(document).ready( function() {
 
	

    var width = 100,
        perfData = window.performance.timing, 
        EstimatedTime = -(perfData.loadEventEnd - perfData.navigationStart),
        time = ((EstimatedTime/1000)%50) * 100


    // Percentage Increment Animation
    var PercentageID = $(".percentage"),
            start = 0,
            end = 100,
            durataion = time;
            animateValue(PercentageID, start, end, durataion);

    function animateValue(id, start, end, duration) {

        var range = end - start,
          current = start,
          increment = end > start? 1 : -1,
          stepTime = Math.abs(Math.floor(duration / range)),
          obj = $(id);


        var timer = setInterval(function() {
            current += increment;
            $(obj).text(current);
          //obj.innerHTML = current;
            if (current == end) {
                clearInterval(timer);
            }
        }, stepTime);
    }
    

    
	setTimeout(function(){
        $('.preloader').fadeOut();
        
        $('.cd-transition-layer').addClass('closing').delay(1000).queue(function(){
            $(this).removeClass("visible closing opening").dequeue();
        });
        
	}, time);
		
    


   // FADE OUT EFFECT WHEN CLICK A LINK
    $(document).on("click", "a:not(.lightbox)", function () {
        var newUrl = $(this).attr("href");
        if (!newUrl || newUrl[0] === "#") {
            location.hash = newUrl;
            return;
        }
        $("html").fadeOut(function () {
            location = newUrl;
        });
        return false;
    });
    

    var paget = $(".page-title .title").text();

    $( ".page-title").append("<span></span>");
    $( ".page-title span").append(paget);


    
    //posts page hover 
    $('.blog-post .blog-link').hover(function(){
        $(this).parent('.content-outter').parent('.blog-post').toggleClass('mousef');
        $(this).parent('.blog-post').toggleClass('mousef');
    });
 
});  




$(window).load( function() {
 

function smokeeffect () { 
    var modalTrigger = $('.nav-icon'),
        transitionLayer = $('.cd-transition-layer'),
        transitionBackground = transitionLayer.children(),
        modalWindow = $('.full-menu');

    var frameProportion = 1.78, //png frame aspect ratio
        frames = 25, //number of png frames
        resize = false;

    //set transitionBackground dimentions
    setLayerDimensions();
    $(window).on('resize', function(){
        if( !resize ) {
            resize = true;
            (!window.requestAnimationFrame) ? setTimeout(setLayerDimensions, 300) : window.requestAnimationFrame(setLayerDimensions);
        }
    });

    //open modal window
    modalTrigger.on('click', function(event){   
        event.preventDefault();
        transitionLayer.addClass('visible opening');
        var delay = ( $('.no-cssanimations').length > 0 ) ? 0 : 600;
        setTimeout(function(){
            modalWindow.addClass('visible');
        }, delay);
    });

    //close modal window
    modalWindow.on('click', '.modal-close', function(event){
        event.preventDefault();
        transitionLayer.addClass('closing');
        modalWindow.removeClass('visible');
        transitionBackground.one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
            transitionLayer.removeClass('closing opening visible');
            transitionBackground.off('webkitAnimationEnd oanimationend msAnimationEnd animationend');
        });
    });

    function setLayerDimensions() {
        var windowWidth = $(window).width(),
            windowHeight = $(window).height(),
            layerHeight, layerWidth;

        if( windowWidth/windowHeight > frameProportion ) {
            layerWidth = windowWidth;
            layerHeight = layerWidth/frameProportion;
        } else {
            layerHeight = windowHeight*1.2;
            layerWidth = layerHeight*frameProportion;
        }

        transitionBackground.css({
            'width': layerWidth*frames+'px',
            'height': layerHeight+'px',
        });

        resize = false;
    }

}
smokeeffect()

 
    
/*--------------------------------------------------
 Hero Section Height
---------------------------------------------------*/	
     function homeh() {
        var hometext = $('.main')

        hometext.css({
            "height": $(window).height() + "px"
        });
    }
    homeh();
    $(window).resize(homeh);


    $( ".page-menu li:not(.social) a, .portfolio_filter ul li a").append( "<span></span>" );

    $('.nav-icon').on("click", function(){
            $(this).toggleClass('modal-close');
    });
 
 
     
}); // document load end 




  
</script>

    </div>  
    
    </body>
</html>