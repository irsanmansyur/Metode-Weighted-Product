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
    <!-- FontAwesome -->
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- Style Css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Bantuan</title>
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
                <a class="nav-link" href="tampil_produk.php?halaman=1">Produk</a>
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

    <!-- Jumbotron -->
<div class="p-4 shadow-4 rounded-3 mt-5" style="background-color: #7b7bd1;">
  
  <h2 class="text-center mt-4" style="color: #ffffff;">Bantuan</h2>
  <div class="container">
  <img src="assets/img/bantuan.png" class="rounded-circle mx-auto img-responsive" width="120px" height="120px" alt="laptop">
  
  </div>
 
  <hr class="my-4" style="font-weight: bold;" />
</div>
<!-- Jumbotron -->

        <!-- Bantuan -->
    <section id="bantuan" class="bg-light">
        <h3 class="text-center">Bantuan untuk memilih Laptop</h3>
        <hr>
        <div class="container">
            <h4>Cara penggunaan Website</h4>
            <h5>Mencari laptop dengan Kriteria</h5>
            <p class="text-muted">Mencari laptop dengan kriteria adalah fitur yang dimiliki oleh website, fitur ini memungkinkan pengguna untuk mencari laptop berdasarkan kriteria harga, gaming, desain, coding, office. Berikut cara menggunakan fitur ini :</p>
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <p class="text-muted mb-0">1. Pilih Menu Cari Laptop</p>
            </div>
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <p class="text-muted mb-0">2. Pilih kriteria anda berdasarkan keinginan kebutuhan anda saat memilih laptop.</p>
            </div>
            
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <p class="mb-0 section-heading text-muted">3. Klik Tombol Simpan</p></div>
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <p class="mb-0 section-heading text-muted">4. Selanjutnya sistem akan menampilkan detail produk laptop dengan 3 rangking laptop terbaik dan tabel laptop sesuai kebutuhan anda.</p></div>
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