<!DOCTYPE html>
<!--[if lt IE 7]><html class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html><!--<![endif]-->
<head>
<title>WISATA</title>
<meta charset="utf-8">
<link rel="stylesheet" href="<?=base_url();?>assets/css/foundation.min.css">
<link rel="stylesheet" href="<?=base_url();?>assets/css/superfish.css">
<link rel="stylesheet" href="<?=base_url();?>assets/css/stylesheet.css">
<link rel="stylesheet" href="<?=base_url();?>assets/js/slider/flexslider.css">
<link rel="stylesheet" href="<?=base_url();?>assets/js/slider/flexcar.css">
<link href='<?=base_url();?>assets/http://fonts.googleapis.com/css?family=Quando' rel='stylesheet' type='text/css'>
<link href='<?=base_url();?>assets/http://fonts.googleapis.com/css?family=Droid+Sans:400,300' rel='stylesheet' type='text/css'>
<script src="<?=base_url();?>assets/js/vendor/custom.modernizr.js"></script>
<script>
Modernizr.load({
    // test if browser understands media queries
    test: Modernizr.mq('only all'),
    // if not load ie8-grid
    nope: 'css/ie8-grid-foundation-4.css'
});
</script>
<!--[if lt IE 9]>
<link rel="stylesheet" href="css/ie-fixes.css">
<![endif]-->
</head>
<body>
<div class="header">
  <div class="row">
    <div class="columns large-12">
      <div class="row header-inner">
        <div class="columns large-4 small-12"> <a href="<?=base_url();?>assets/index.html"><img src="<?=base_url();?>assets/images/.png" alt="" class=""></a> </div>
        <div class="columns large-8">
          <nav>
            <section>
              <ul class="sf-menu large-12">
                <li class="active"><a href="<?=site_url('User/index');?>">Home</a></li>
                <li><a href="<?=base_url();?>assets/about.html">About us</a></li>
                <li><a href="<?=base_url();?>assets/gallery.html">Gallery</a></li>
                <li><a href="<?=base_url();?>assets/contact.html">Contact Us</a></li>
              </ul>
            </section>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="columns large-12 small-top-menu">
      <div class="row">
        <div class="columns large-12 plr0 top-nav">
          <form name="dropdown" class="dropdown" action="#">
            <nav>
              <section>
                <select name="selected" id="target" accesskey="E" onChange="goToNewPage(document.dropdown.selected)">
                  <option value="index.html">home</option>
                  <option value="about.html">about us</option>
                  <option value="gallery.html">gallery</option>
                  <option value="contact.html">contact us</option>
                </select>
              </section>
            </nav>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="slider">
    <div class="row">
      <div class="columns large-12">
        <div class="row flexslider-row">
          <div class="columns large-12">
            <div class="flexslider">
              <ul class="slides">
                <li> <img src="<?=base_url();?>assets/images/4.jpg" alt=""> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="tagline">
  <div class="row">
    <div class="columns large-12">
      <div class="center">
        <h1>PURA GOA RAJA</h1>
        <p> Goa Raja yang dikenal dengan nama Pura Goa Naga Raja di Desa Besakih, Kecamatan Rendang, Karangasem, konon menjadi tempat bertemunya Mpu Bekung atau Dang Hyang Sidhi Mantra dengan Sanghyang Naga Raja atau Naga Basuki.

Di Goa Raja juga dikisahkan telah terjadi pemotongan ekor Naga Basuki yang dilakukan putra Mpu Bekung, yakni Dang Hyang Bang Manik Angkeran, sehingga membuatnya dilebur. Seperti dituturkan pangempon yang juga Pemangku Pura Goa Raja, Gusti Mangku Varuna Kubayan Manik Mantra, belum lama ini, di tempat ini juga dipercaya masyarakat sebagai tempat pelebur mala, dan bagi pasangan suami-istri memohon manik atau keturunan.
Gusti Mangku Varuna menjelaskan, Goa Raja sudah ada sejak lama, bahkan tidak dapat diperkirakan sejak kapan goa itu terbentuk. Dia mengakui belum ada sumber-sumber atau catatan sejarah yang menceritakan persis soal tersebut. Hanya orang pada masa lampau membenarkan lokasi goa sangat angker, pingit, dan tak satupun yang berani turun ke area sekitar.</p>
      </div>
    </div>
  </div>
</div>
<footer class="footer">
  <div class="row">
    <div class="columns large-12 footer-inner">
      <div class="row">
        <div class="columns large-4 useful-links">
          <div>
            <h2 class="footer-title">Quick links</h2>
            <ul class="footer-list">
              <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Products</a></li>
              <li><a href="#">Gallery</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="columns large-4 contact">
          <div>
            <h2 class="footer-title">Contactus</h2>
            <ul class="footer-list">
              <li><span class="small-icon"><img src="<?=base_url();?>assets/images/address.png" alt=""></span>255, Willson Street,Caulfield, Melbourne</li>
              <li><span class="small-icon"><img src="<?=base_url();?>assets/images/phone.png" alt=""></span>Tel:(122)3456789, (121)3456079, (121)2341234</li>
              <li><span class="small-icon"><img src="<?=base_url();?>assets/images/fax.png" alt=""></span>(121)5647289, (122)34526589</li>
              <li><span class="small-icon"><img src="<?=base_url();?>assets/images/email.png" alt=""></span>email@domain.com</li>
              <li><span class="social-media"><a href="#">t</a></span><span class="social-media"><a href="#">f</a></span><span class="social-media"><a href="#">y</a></span><span class="social-media"><a href="#">g</a></span></li>
            </ul>
          </div>
        </div>
        <div class="columns large-4 about">
          <div>
            <h2 class="footer-title">Aboutus</h2>
            <p><img src="<?=base_url();?>assets/images/desa tajun.jpg" alt=""></p>
            <p>Anggota Komisi VI DPR RI, Gde Sumarjaya Linggih atau yang akrab disapa Demer ingin menjadikan Desa Tajun, Kecamatan Kubutambahan, Buleleng, menjadi desa wisata sebagai destinasi wisata baru sekaligus meningkatkan jumlah kunjungan wisata ke Bali.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<div class="credit-row">
  <div class="row">
    <div class="columns large-11 credit"> &copy; 2045 All rights reserved by <a href="#">Calisto.</a> Design by: <a href="http://topwebsitetemplates.org">topwebsitetemplates.org</a></div>
    <div class="columns large-1"> <img src="<?=base_url();?>assets/images/toparrow.png" alt="" class="scrollToTop"> </div>
  </div>
</div>
<script src="<?=base_url();?>assets/js/jquery.min.js"></script>
<script src="<?=base_url();?>assets/js/hoverIntent.js"></script>
<script src="<?=base_url();?>assets/js/superfish.js"></script>
<script src="<?=base_url();?>assets/js/slider/jquery.flexslider.js"></script>
<script>
Modernizr.load({
    test: Modernizr.placeholder,
    nope: 'js/placeholder.min.js'
});
function goToNewPage() {
    if (document.getElementById('target').value) {
        window.location.href = document.getElementById('target').value;
    }
}
</script>
<script>
$(document).ready(function () {
    $('ul.sf-menu').superfish({
        animation: {
            height: 'show'
        },
        delay: 400
    });
    $("img.scrollToTop").click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
    });
    $('.flexslider').flexslider();
    $('.flexcar').flexslider();
});
</script>
</body>
</html>