<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Siakad SMK Paramita Mojokerto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      /*-webkit-filter: grayscale(90%);
      filter: grayscale(90%);*/ /* make all photos black and white */ 
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }
  #googleMap {
      width: 100%;
      height: 400px;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
  }  
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 15px !important;
      letter-spacing: 4px;
      opacity: 0.9;

  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  footer {
      background-color: #000000;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url('index.php/web') ?>">HOME</a></li>
        <li><a href="#profil">PROFIL</a></li>
        <li><a href="#pengumuman">PENGUMUMAN</a></li>
        <li><a href="#login">LOGIN</a></li>
        
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="<?php echo base_url(); ?>assets/images/COVER1A.png" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <h3>WELCOME</h3>
          <p>Sekolah Menengah Kejuruan Paramita Mojokerto</p>
        </div>      
      </div>

      <div class="item">
        <img src="<?php echo base_url(); ?>assets/images/COVER2.png" alt="Chicago" width="1200" height="700">     
      </div>
    
      <div class="item">
        <img src="<?php echo base_url(); ?>assets/images/COVER3A.png" alt="Los Angeles" width="1200" height="700">     
      </div>

      <div class="item">
        <img src="<?php echo base_url(); ?>assets/images/COVER4.png" alt="Los Angeles" width="1200" height="700">     
      </div>
    </div>
    

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) -->
<div id="profil" class="container text-center">
  <h3>PROFIL</h3>
  <p><em>SMK Paramita Mojokerto</em></p>
  <p>SMK PARAMITA MOJOKERTO adalah sekolah SMK Swasta yang terletak di Provinsi Jawa Timur, Kota Mojokerto. SMK ini mempunyai 3 program keahlian yaitu, AKUNTANSI, ADMINISTRASI PERKANTORAN, TEKNIK KOMPUTER & JARINGAN. </p>
  <br>
  <h3 class="text-center">Info</h3>

      <p><span class="glyphicon glyphicon-map-marker"></span> JL. EMPU NALA NO. 15 - 17, RT/RW 2/4, Dsn. BALONGSARI, Ds./Kel Balongsari, Kec. Magersari, Kota Mojokerto, Prov. Jawa Timur</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: 0321 322543</p>
      <p><span class="glyphicon glyphicon-phone"></span>Fax.: 0321 322543</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email:  smkparamita@gmail.com</p>
    </div>
  </div>

  

<!-- Container (TOUR Section) -->
<div id="pengumuman" class="bg-1">
  <div class="container">
    <h3 class="text-center">PENGUMUMAN</h3>
    <p class="text-center">Acara penting <br> Tata tertib baru</p>
    <div class="row text-center">
      <?php $id=1; foreach ($pengu_list as $key) : ?>
      <div class="col-sm-4">
        <div class="thumbnail">
          <a href="<?php echo base_url("index.php/pengumuman/pengu/").$key['id_pengumuman'] ; ?>">
          <br>
          <p><strong><?php echo $key['judul'] ?></strong></p>
          <p><?php echo $key['tgl_pengumuman'] ?></p>
          <button class="btn" data-target="<?php echo base_url("index.php/pengumuman/pengu/").$key['id_pengumuman'] ; ?>">Lihat Detail</button>
        </div>
      </div>
      <?php $id++; endforeach?>
      
    </div>
  </div>
  
  
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>www.smkparamitamojokerto.com</a></p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
