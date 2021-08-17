<?php
include "controller/data_laptop.php"
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
  <title>Tampil Produk</title>
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



  <!-- card-modal -->
  <section id="tampil_produk">
    <h3 class="text-center">Data Laptop/Notebook</h3>
    <div class="container">
      <p>Halaman <?= $halaman; ?> dari <?= $total_halaman; ?></p>
      <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
        <?php foreach ($laptops  as $i => $laptop) : ?>
          <div class="col">
            <div class="card p-3">
              <a href="assets/img/<?= $laptop['foto_laptop']; ?>" target="_blank">
                <img src="assets/img/<?= $laptop['foto_laptop']; ?>" class="card-img-top" alt="...">
              </a>
              <div class="card-body">
                <h6 class="card-title"><?= $laptop['merk_laptop']; ?></h6>
                <h5>Rp <?= number_format($laptop['harga_laptop']); ?></h5><br>
                <a class="btn_cek" data-bs-toggle="modal" href="#pilihanModal<?= $laptop['no_laptop']; ?>">
                  <i class="fa fa-search"> Detail</i>
                </a>
              </div>
            </div>
          </div>

        <?php endforeach; ?>
      </div><br>

      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <?php if ($total_halaman > 1) : ?>
            <?php for ($x = 1; $x <= $total_halaman; $x++) : ?>
              <?php if ($x == $halaman) : ?>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <?php else :; ?>
                <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
              <?php endif; ?>
            <?php endfor ?>
          <?php endif; ?>
        </ul>
      </nav>
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
          <img src="admin/foto/<?php echo $data['foto'] ?>" alt="Vieri Satria Ardiansyah" width="120px" height="120px" class="rounded-circle" />
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
  <?php foreach ($laptops as $i => $laptop) : ?>
    <div class="modal fade" id="pilihanModal<?= $laptop['no_laptop']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-center" id="exampleModalLabel"><?= $laptop['merk_laptop']; ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <img class="img-fluid d-block mx-auto" src="assets/img/ASUS Notebook A413EP-VIPS753.jpg" width="300px" alt="" />
            <p><?= $laptop['deskripsi_laptop']; ?></p>
            <ul>
              <li>Harga: Rp. <?= number_format($laptop['harga_laptop']); ?></li>
              <li>Kebutuhan: <?= $laptop['gaming_laptop'] . ", " . $laptop['desain_laptop'] . ", " . $laptop['office_laptop']; ?>.</li>
            </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
  <!-- Bootstrap JS -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>

</body>

</html>