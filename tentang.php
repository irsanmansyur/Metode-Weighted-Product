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
    <title>Tentang</title>
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

<!-- Jumbotron -->
<div class="p-4 shadow-4 rounded-3 mt-5" style="background-color: #7b7bd1;">
  
  <h2 class="text-center mt-4" style="color: #ffffff;">Tentang Website</h2>
  <div class="container">
  <img src="assets/img/tentang.png" class="rounded-circle mx-auto img-responsive" style="background-color: black;" width="120px" height="120px" alt="laptop">
  
  </div>
 
  <hr class="my-4" style="font-weight: bold;" />

</div><br>
<!-- Jumbotron -->


 <!-- Tentang-->
        <section class="page-section bg-light">
            <div class="container">
                <div class="text-center">
                	<h3>Informasi terkait Website</h3>
                    <br>
                	<p class="text-muted">Laptop atau notebook / powerbook, merupakan komputer portable (kecil dan dapat dibawa kemana-mana dengan mudah) yang terintegrasi pada sebuah casing. Laptop biasa digunakan dalam kebutuhan sehari-hari untuk keperluan kebutuhan user seperti bekerja, belajar, bermain game ataupun editing video dan foto.
                    <hr class="mb-4"></p>
                    <p class="text-muted">Sistem Pendukung Keputusan (SPK) merupakan sebuah sistem yang mampu menghasilkan pemecahan maupun penanganan masalah. Sistem pendukung keputusan tidak dimaksudkan untuk mengganti peran pengambil keputusan, akan tetapi untuk membantu dan mendukung pengambil keputusan.
                    <hr class="mb-4"></p>
                    <p>Website Ver Laptop adalah sebuah website informasi mengenai produk laptop. Pada website ini pengguna bisa mencari informasi mengenai produk laptop yang dijual pada toko <i>bhinneka.com</i>. Fitur utama pada website ini adalah pengguna dapat mencari laptop berdasarkan kriteria <i>
                      harga, tipe laptop gaming, desain, office, dan laptop coding</i>.</p>
                    <p>Kriteria yang dimasukkan oleh pengguna akan dihitung oleh sistem menggunakan metode <i>Weighted Product</i> dan akan menampilkan hasil pencarian terbaik kepada pengguna. Dengan adanya pencarian dengan metode ini diharapkan dapat menemukan laptop yang sesuai dengan kriteria pengguna.</p>
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