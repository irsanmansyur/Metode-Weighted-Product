<?php 
  include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- My Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
     <!-- FontAwesome -->
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- Style Css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Cari Laptop</title>
</head>
<body>
   
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top" style="background-color: #ffffff;">
        <div class="container">
          <a class="navbar-brand" href="#"> VR <span>Laptop</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cari-laptop.php">Cari Laptop</a>
              </li>

              <li class="nav-item">
                <a  class="nav-link active" href="tampil_produk.php">Produk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tentang.php">Tentang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="bantuan.php">Bantuan</a>
              </li>
             
            </ul>
        </div>
          </div>
      </nav>
    <!-- akhir navbar -->

<!-- Jumbotron -->
<div class="p-4 shadow-4 rounded-3 mt-5" style="background-color: #7b7bd1;">
  
  <h2 class="text-center mt-4" style="color: #ffffff;">Detail Produk</h2>
  <div class="container">
  <img src="assets/img/search.png" class="rounded-circle mx-auto img-responsive" width="120px" height="120px" alt="laptop">
  
  </div>
 
  <hr class="my-4" style="font-weight: bold;" />
</div>
<!-- Jumbotron -->

<section id="detail_produk">
      <div class="container">
        <div class="card">
          <img src="assets/img/APPLE MacBook Air MWTK2IDA - Silver.jpg" class="card-img-top" alt="...">
        </div>
        <div class="body">
          <h1 style="font-size: 25px;">
            APPLE MacBook Air Inch MWTK2ID-A - Silver</h1>
          <h2>Rp 12.999.000</h2>
          <hr>
          <div class="row row-detail">
            <div class="col">
              <b>
              <p>Game</p>
              <p>Desain</p>
              <p>Coding</p>
              <p>Office</p>
              </b>
            </div>
            <div class="col">
              <p>Game Kompetisi</p>
              <p>Desain Grafis</p>
              <p>Coding Web</p>
              <p>Pekerjaan Tugas Kuliah/Sekolah</p>
            </div>
          </div>
          <hr>
          <a href="https://www.blibli.com/p/apple-macbook-air-2020-256gb-mwtk2id-a-intel-core-i3-dual-core-1-1-ghz-8gb-ram-256gb-ssd-intel-iris-plus-graphics-13-inch-macos-silver/ps--VOO-60025-00254?ds=VOO-60025-00254-00001&source=SEARCH&sid=8168fe50254efc62&cnc=true&pickupPointCode=PP-3051015&pid=VOO-60025-00254" target="_blank" class="btn btn-toko-1">Cek Toko</a>
        </div>
      </div>
    </section>
    <section id="deskripsi-produk">
      <div class="container">
        <div class="deskripsi">
          <h6>DESKRIPSI</h6>
          <hr>
          <div class="row row-deskripsi">
            <div class="col">
              <p>Spesifikasi</p>
              <p>Kebutuhan</p>            
            </div>
            <div class="col">
              <p>RAM : 8 GB, Harddisk : SSD 256 GB
              </p>  
              <p>Tipe Laptop dengan harga murah dan sesuai dengan kebutuhan yang anda pilih</p>        
            </div>
          </div>
        </div>
      </div>
    </section>
    

 
<!-- Awal Footer -->
<section id="footer">
    <footer class="footer_main">
      <?php 
      $query = mysqli_query($koneksi, "SELECT * FROM admin order by no_admin ASC");
      while ($data = mysqli_fetch_array($query)) {
      ?>
      <div class="footer-left">
        <img src="admin/foto/<?php echo $data['foto']?>" alt="Vieri Satria Ardiansyah" width="120px" height="120px" class="rounded-circle" />
        <p class="author"><?php echo $data['nama'] ?></p>
        <p class="jurusan">Sistem Informasi</p>
      </div>

      <div class="footer-center">
        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>Talaga Bestari</span> Kabupaten Tangerang, Indonesia</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><?php echo $data['email'] ?></p>
        </div>
      </div>

      <div class="footer-right">
        <p class="footer-company-about">
          <span>Universitas Gunadarma</span>
          Fakultas Ilmu Komputer dan Teknologi Informasi
        </p>

        <div class="footer-icons">
          <a href="https://www.facebook.com/vierisatria.ardiansyah.98"><i class="fa fa-facebook"></i></a>
          
          <a href="https://www.instagram.com/vierisatria/"><i class="fa fa-instagram"></i></a>
          
        </div>
      </div>
      <hr />
      <div class="copy-right">
        <p>&copy; <?php echo date('Y') ?>. All rights reserved.</p>
      </div>
    <?php } ?>
    </footer>
  </section>    
  <!-- akhir Footer --> 
        

<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
  
</body>
</html>