<?php 
  include "koneksi.php";
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
    <!-- FontAwesome -->
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- Style Css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Selamat Datang - SPK Laptop</title>
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
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cari-laptop.php">Cari Laptop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tampil_produk.php">Produk</a>
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
          <script>
            // Add active class to the current button (highlight it)
            var header = document.getElementById("navbarNavAltMarkup");
            var btns = header.getElementsByClassName("nav-link");
            for (var i = 0; i < btns.length; i++) {
              btns[i].addEventListener("click", function() {
              var current = document.getElementsByClassName("active");
              current[0].className = current[0].className.replace(" active", "");
              this.className += " active";
              });
            }
            </script>
      </nav>
    <!-- akhir navbar -->
  
    <!-- Home -->
      <section id="home">
        <h3 class="text-center">Cari Laptop Sesuai Kebutuhan Anda</h3>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/img/laptop-1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h4>ASUS Notebook A409FJ-EK752T</h5>
                  <a href="" class="btn_cek">Pilih Laptop</a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/img/ASUS Notebook A413EP-VIPS753.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h4>HP Notebook 14s-cf2076TU</h4><br>
                  <a href="" class="btn_cek">Pilih Laptop</a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/img/HP Notebook 14s-cf2076TU 36F70PA - Gold.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h4>HP Notebook 14s-cf2076TU 36F70PA - Gold</h4>
                  <a href="pemilihan.php" class="btn_cek">Pilih Laptop</a>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
      </section>
    <!-- akhir home -->

   <!-- Find -->
    <section id="find">
      <hr class="featurette-divider" />
      <div class="row featurette">
        <div class="col-md-5 order-md-2">
          <a href="cari-laptop.php">
          <img src="assets/img/logo_laptop.png" alt="laptop" class="img-responsive" />
          </a>
        </div>
        <div class="col-md-7 order-md-1" style="text-align: center">
          <h2 class="featurette-heading">Cari Laptop <span class="fw-bold">Impian Kebutuhanmu</span></h2>
          <p class="lead">Temukan laptop sesuai dengan kriteria anda sendiri.</p>
          <a href="cari-laptop.php" class="btn_cari_laptop">Cari</a>
        </div>
      </div>
    </section>
    <!-- Akhir Find -->


    <!-- card-modal -->
   <!--  <section id="tampil_produk">
        <h3 class="text-center">Data Laptop</h3>
        <div class="container">
          <p>Halaman 1 dari 2</p>
            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                <div class="col">
                  <div class="card p-3">
                    <a href="assets/img/laptop-1.jpg" target="_blank">
                    <img src="assets/img/laptop-1.jpg" class="card-img-top" alt="...">
                  </a>
                    <div class="card-body">
                      <h6 class="card-title">ASUS Notebook</h6>
                      <h5>Rp 12.220.000</h5><br>
                      <a class="btn_cek" data-bs-toggle="modal" href="#pilihanModal1">
                      <i class="fa fa-plus"> Lihat Data</i>
                    </a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card p-3">
                  <a href="assets/img/ASUS Notebook A413EP-VIPS753.jpg" target="_blank">
                    <img src="assets/img/ASUS Notebook A413EP-VIPS753.jpg" class="card-img-top" alt="...">
                  </a>  
                    <div class="card-body">
                      <h6 class="card-title">ASUS Notebook</h6>
                      <h5>Rp 12.220.000</h5><br>
                      <a class="btn_cek" data-bs-toggle="modal" href="#pilihanModal1">
                      <i class="fa fa-plus"> Lihat Data</i>
                    </a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card p-3">
                    <a href="assets/img/HP Notebook 14s-cf2076TU 36F70PA - Gold.jpg" target="_blank">
                    <img src="assets/img/HP Notebook 14s-cf2076TU 36F70PA - Gold.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                      <h6 class="card-title">HP Notebook</h6>
                      <h5>Rp. 6.499.000</h5><br>
                      <a class="btn_cek" data-bs-toggle="modal" href="#pilihanModal1">
                      <i class="fa fa-plus"> Lihat Data</i>
                    </a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card p-3">
                    <img src="assets/img/HP Notebook 14s-cf2076TU 36F70PA - Gold.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title">HP Notebook</h6>
                      <h5>Rp. 6.499.000</h5><br>
                      <a class="btn_cek" data-bs-toggle="modal" href="#pilihanModal1">
                      <i class="fa fa-plus"> Lihat Data</i>
                    </a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card p-3">
                    <img src="assets/img/ASUS Notebook A413EP-VIPS753.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title">Asus Notebook</h6>
                      <h5>Rp 11.100.000</h5><br>
                      <a class="btn_cek" data-bs-toggle="modal" href="#pilihanModal1">
                      <i class="fa fa-plus"> Lihat Data</i>
                    </a>
                    </div>
                  </div>
                </div>
              </div>
        </div> -->
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
        
<!-- Modal 1 -->
<div class="modal fade" id="pilihanModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">ASUS Notebook A409FJ-EK752T</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img class="img-fluid d-block mx-auto" src="assets/img/ASUS Notebook A413EP-VIPS753.jpg" width="300px" alt="" />
            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
            <ul>
                <li>Tipe: Laptop Office</li>
                <li>RAM: 4GB</li>
                <li>Harga: Rp.7.800.000</li>
                <li>Kebutuhan: Hanya mengoperasikan kebutuhan pekerjaan office saja seperti microsoft office.</li>
            </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
  
</body>
</html>