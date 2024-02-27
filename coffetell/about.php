<?php 
	error_reporting(0);
	include 'db.php';
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
	$a = mysqli_fetch_object($kontak);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Coffeetell.id</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
	  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
	<!-- Font Awesome 4.7 -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css   ">
	<!-- CSS -->
	<link rel="stylesheet" href="style.css">
	<title>Coffeetell</title>
  
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&family=Viga&display=swap" rel="stylesheet">
  
	<!-- Icons web -->
	<link rel="icon" href="img/logofixxxx.png">
</head>
<body>
    <section class="section-1">
    	<header>
    		<h2 class="logo">Coffeetell</h2>
			<div class="nav-toggle" id="navToggle">
              
              <img id="navClosed" class="navIcon" src="https://www.richardmiddleton.me/wp-content/themes/richardcodes/assets/img/hamburger.svg" alt="hamburger menu">
              <img id="navOpen" class="navIcon hidden" src="https://www.richardmiddleton.me/wp-content/themes/richardcodes/assets/img/close.svg" alt="close hamburger">
            </div>
	    	<nav>
				<ul>
	    		<li><a href="index.php">Home</a></li>
	    		<li><a href="shop.php">Shop</a></li>
	    		<li><a href="about.php"class="active">About</a></li>
				</ul>
	    	</nav>
    	</header>
    </section>
	<div class="text-teng1">
		<div class="container">
		<h1 class="display-4"><span>ABOUT</span></h1>
		<h1 class="display-4">Sebuah startup yang dibuat oleh 3 orang mahasiswa untuk membantu mensejahterakan petani kopi.</h1>
      </div>
	</div>
	
  <!-- Footer -->
<div class="footer1">
  <img src="img/logofixxxx.png" alt="">
  <h4>Kontak Kami</h4>
  <div class="container">
  <div class="row">
    <div class="col">JL. Al Amanah Raya</div>
    <div class="col-left">+62 853-2529-7523</div>
  </div>
  <div class="row">
    <div class="col">RT/RW 009/010</div>
    <div class="col-left">coffetell.id@gmail.com</div>
  </div>
  <div class="row">
    <div class="col">11460, DKI Jakarta</div>
  </div>
  
  <p>Copyright &copy; 2022 - Coffeetell.</p>
</div>
</div>
<!-- Akhir Footer -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="script.js"></script>
</body>
</html>