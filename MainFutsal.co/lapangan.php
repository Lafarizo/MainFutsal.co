<?php
require 'koneksi.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Daftar Lapangan</title>

    <!-- Style -->
    <!-- <link rel="stylesheet" href="css/universal.css"/> -->
    <link rel="stylesheet" href="css/lapangan.css"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- SVG Icons -->
    <svg xmlns="http://www.w3.org/2000/svg"></svg>
  </head>

  <body>
    <!-- NavBar Start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo"><span>Main</span>Futsal.co</a>

      <div class="navbar-a">
        <a href="index.html">Home</a>
        <a href="lapangan.html">Lapangan</a>
        <a href="tentang_kami.html">Tentang Kami</a>
        <a href="kontak.html">Kontak</a>
      </div>

      <div class="navbar-b">
        <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- NavBar End -->

    <!-- Beranda Section Start -->
    <div class="container">
      <div class="header">
        <h1>Pilih lapangan favoritmu dan mainlah bersama tim terbaikmu</h1>
      </div>

      <!-- Produk -->
      <?php $get_lapangan = $conn->query("SELECT * FROM lapangan"); ?>
      <?php while ($lapangan = $get_lapangan->fetch_assoc()) { ?>
      <div class="product">
        <div class="image">
          <img src="images/bg.jpg" alt="">
        </div>
        <div class="namePrice">
          <h3><?php echo $lapangan['nama_lapangan'] ?></h3>
          <span>Rp. <?php echo $lapangan['harga'] ?></span>
          <div class="stars">
          <i class="bi bi-star"></i>
          <i class="bi bi-star"></i>
          <i class="bi bi-star"></i>
          <i class="bi bi-star"></i>
          <i class="bi bi-star"></i>
          </div>
          <p><?php echo $lapangan['alamat'] ?></p>
        </div>
        <div class="sewa">
          <button>Sewa</button>
        </div>
      </div>
      <?php  }  ?>

    </div>
    <!-- Beranda Section End -->

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

    <!-- Javascript -->
    <script src="js/script.js"></script>
    
  </body>
</html>
