<?php 
	error_reporting(0);
	include 'db.php';
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
	$a = mysqli_fetch_object($kontak);
?>


<!DOCTYPE html>
<html>
<head>
	<title>coffetell</title>
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
	    		<li><a href="index.php"class="active">Home</a></li>
	    		<li><a href="shop.php">Shop</a></li>
	    		<li><a href="about.php">About</a></li>
				</ul>
	    	</nav>
    	</header>
    </section>
	<div class="text-teng">
		<div class="container">
      <h1 class="display-4">" Bercerita tentang <span>kopi</span> <br>dan arti <span>seni</span> dari kopi "</h1>
      <div class="search">
		<div class="container">
			<form action="shop.php">
				<input type="text" name="search" placeholder="Cari Produk">
				<input type="submit" name="cari" value="Cari Produk">
			</form>
		</div>
	</div>
    </div>
	</div>
	<!-- Container -->
	<div class="container">
    <!-- Panel -->
    <div class="row justify-content-center">
      <div class="col-10 panel">
        <div class="row">
          <div class="col-lg">
            <img src="img/halal.png" alt="halal" class="float-left">
            <h4>Halal</h4>
            <p>Sudah Tersertifikat Halal MUI</p>
          </div>
          <div class="col-lg">
            <img src="img/cash-on-delivery.png" alt="cod" class="float-left">
            <h4>Cash on Delivery</h4>
            <p>Pembayaran hanya melalui COD</p>
          </div>
          <div class="col-lg">
            <img src="img/pack.png" alt="pack" class="float-left">
            <h4>Pengiriman</h4>
            <p>Barang dijamin aman 100%</p>
          </div>
        </div>
      </div>

    </div>
    <!-- Akhir Panel -->
  </div>
  <!-- Akhir Container -->

  <!-- Produk -->
<!-- new product -->
<div class="produk">
<div class="section">
		<div class="container">
			<h3>Produk Terbaru</h3>
			<div class="box">
				<?php 
					$produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_status = 1 ORDER BY product_id DESC LIMIT 8");
					if(mysqli_num_rows($produk) > 0){
						while($p = mysqli_fetch_array($produk)){
				?>	
					<a href="detail-produk.php?id=<?php echo $p['product_id'] ?>">
						<div class="col-4">
							<img src="produk/<?php echo $p['product_image'] ?>">
							<p class="nama"><?php echo substr($p['product_name'], 0, 30) ?></p>
							<p class="harga">Rp. <?php echo number_format($p['product_price']) ?></p>
						</div>
					</a>
				<?php }}else{ ?>
					<p>Produk tidak ada</p>
				<?php } ?>
			</div>
		</div>
	</div>
  </div>
  <!-- akhir produk -->

  <!-- Footer -->
<div class="footer">
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