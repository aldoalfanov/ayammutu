<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8" />
		 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		 <!-- BOOTSTRAP STYLES-->
		 <link href="assets/css/bootstrap.css" rel="stylesheet" />
		 <!-- FONTAWESOME STYLES-->
		 <link href="assets/css/font-awesome.css" rel="stylesheet" />
		  <!-- CUSTOM STYLES-->
		 <link href="assets/css/custom.css" rel="stylesheet" />
		  <!-- GOOGLE FONTS-->
	 	 <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
		  <title>TOKO Ayam </title>
</head>
<body>
<?php include'menu.php'; ?>    
<center>
 	<h2>TOKO AYAM MUTU</h2> <hr>
 	
 </center>
<br>
<section class="konten">
	<div class="container">

<!-- konten -->
<section class="konten">
	<div class="container">
		<center><h3>Tersedia Ayam</h3></center>
		<br>
		<div class="row">
			<?php $ambil= $koneksi->query("SELECT * FROM ayam"); ?>
			<?php while ($perayam = $ambil->fetch_assoc()){ ?>
		
			<div class="col-md-3">
				<div class="thumbnail">
					<img src="Foto_ayam/<?php echo $perayam['foto_ayam']; ?>" alt="">
					<div class="caption">
						<h3><?php echo $perayam['nama_ayam']; ?></h3>
						<h5>Rp. <?php echo number_format($perayam['harga_ayam']); ?></h5>
								<a href="beli.php?id=<?php echo $perayam['id_ayam']; ?>" class="btn btn-primary btn-xs"><i class="fa fa-shopping-cart"></i> Beli</a>
								<a href="detail.php?id=<?php echo $perayam["id_ayam"]; ?>"  class=" btn btn-default btn-xs"><i class="fa fa-eye"></i> Detail</a>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
		
	</div>
	
</section>

</body>
</html>