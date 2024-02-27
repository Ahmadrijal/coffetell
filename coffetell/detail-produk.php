<?php 
	error_reporting(0);
	include 'db.php';
    $produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_id = '".$_GET['id']."' ");
	$p = mysqli_fetch_object($produk);

    $kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 3");
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
	<link rel="stylesheet" href="shop.css">
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
	    		<li><a href="shop.php"class="active">Shop</a></li>
	    		<li><a href="about.php">About</a></li>
				</ul>
	    	</nav>
    	</header>
    </section>
	<div class="text-teng">
		<div class="container">
      <h1 class="display-4">" Bercerita tentang <span>kopi</span> <br>dan arti <span>seni</span> dari kopi "</h1>
    </div>
	</div>
	<!-- Container -->
	<div class="container">
    <!-- Panel -->
    <div class="panel">
    <h3>Kategori</h3>
				<?php 
					$kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
					if(mysqli_num_rows($kategori) > 0){
						while($k = mysqli_fetch_array($kategori)){
				?>
					<a href="shop.php?kat=<?php echo $k['category_id'] ?>">
						<div class="col-5">
							<img src="img/shopping-bag.png" width="50px" style="margin-bottom:5px;">
							<p><?php echo $k['category_name'] ?></p>
						</div>
					</a>
				<?php }}else{ ?>
					<p>Kategori tidak ada</p>
				<?php } ?>
                </div>
    <!-- Akhir Panel -->
  </div>
  <!-- Akhir Container -->

  <!-- search -->
	<div class="search">
		<div class="container">
			<form action="shop.php">
				<input type="text" name="search" placeholder="Cari Produk" value="<?php echo $_GET['search'] ?>">
				<input type="hidden" name="kat" value="<?php echo $_GET['kat'] ?>">
				<input type="submit" name="cari" value="Cari Produk">
			</form>
		</div>
	</div>

  <!-- Produk -->
<!-- product detail -->
<div class="section">
		<div class="container">
			<h3>Detail Produk</h3>
			<div class="box1">
					<img src="produk/<?php echo $p->product_image ?>" width="40%">
				<div class="col-2">
					<h3><?php echo $p->product_name ?></h3>
					<h4>Rp. <?php echo number_format($p->product_price) ?></h4>
					<p>Deskripsi :<br>
						<?php echo $p->product_description ?>
					</p>
					<p><a href="https://api.whatsapp.com/send?phone=<?php echo $a->admin_telp ?>&text=Hai, saya tertarik dengan produk Anda." target="_blank">
						<i class="fa fa-whatsapp"> Pesan Sekarang</i></a>
					</p>
				</div>
			</div>
		</div>
	</div>

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