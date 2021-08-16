<?php
if (isset($_POST['submit']))
  include 'cek_metode_wp.php';
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
  <title>Hasil Cari</title>
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
            <a class="nav-link active" href="cari-laptop.php">Cari Laptop</a>
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
  </nav>
  <!-- akhir navbar -->

  <!-- Jumbotron -->
  <div class="p-4 shadow-4 rounded-3 mt-5" style="background-color: #7b7bd1;">

    <h2 class="text-center mt-4" style="color: #ffffff;">Hasil Pencarian Laptop</h2>
    <div class="container">
      <img src="assets/img/laptop-1.jpg" class="rounded-circle mx-auto img-responsive" width="120px" height="120px" alt="laptop">

    </div>

    <hr class="my-4" style="font-weight: bold;" />
  </div>
  <!-- Jumbotron -->


  <section id="hasil_cari">
    <div class="container">
      <center>
        <font size="6">Hasil Pencarian</font>
      </center>
      <hr>
      <div class="d-flex justify-content-evenly">

        <?php foreach ($laptops as $i => $laptop) : ?>
          <div class="card">
            <img src="admin/foto_laptop/LENOVO Notebook V14 Non Windows.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title">Peringkat #<?= $i + 1; ?></h4>
              <h6>Nilai Vektor V : <?= $laptop['vektor_v']; ?></h6>
              <p class="card-text"><?= $laptop['merk_laptop']; ?></p>
              <h5>Rp. <?= number_format($laptop['harga_laptop']); ?></h5>
            </div>
            <div class="card-body">
              <a href="detail_produk.php?no_laptop=<?= $laptop['no_laptop']; ?>" class="btn btn-detail my-auto">Detail</a>
              <a href="https://www.bhinneka.com/lenovo-notebook-v14-non-windows-82c4018tid-iron-grey-sku3337503542" target="_blank" class="btn btn-toko my-auto"><i class="fa fa-external-link"></i></a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <hr>
      <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action">
          <thead>
            <tr>
              <th>NO.</th>
              <th>Merk</th>
              <th>Harga</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <td>4</td>
              <td>ASUS A416EP-FHD5211</td>
              <td>Rp 10.999.000</td>
              <td>
                <a href="detail_produk.php?no_laptop=64" class="btn btn-detail btn-sm">Detail</a>
                <a href="https://www.bhinneka.com/asus-vivobook-a416ep-fhd5211-transparent-silver-sku0017488325" target="_blank" class="btn btn-toko my-auto"><i class="fa fa-external-link"></i></a>
              </td>
            </tr>

            <tr>
              <td>5</td>
              <td>HP 14s-cf2034TX</td>
              <td>Rp 11.799.000</td>
              <td>
                <a href="detail_produk.php?no_laptop=109" class="btn btn-detail btn-sm">Detail</a>
                <a href="https://www.bhinneka.com/hp-notebook-14s-cf2034tx-1a287pa-silver-sku3332529964" target="_blank" class="btn btn-toko my-auto"><i class="fa fa-external-link"></i></a>
              </td>
            </tr>

            <tr>
              <td>6</td>
              <td>ACER 5</td>
              <td>Rp 13.499.000</td>
              <td>
                <a href="detail_produk.php?no_laptop=115" class="btn btn-detail btn-sm">Detail</a>
                <a href="https://www.bhinneka.com/acer-aspire-5-a514-54g-78mw-core-i7-1165g7-8gb-512gb-ssd-silver-sku3337165109" target="_blank" class="btn btn-toko my-auto"><i class="fa fa-external-link"></i></a>
              </td>
            </tr>

            <tr>
              <td>7</td>
              <td>ASUS A413EP-VIPS752</td>
              <td>Rp 12.999.000</td>
              <td>
                <a href="detail_produk.php?no_laptop=112" class="btn btn-detail btn-sm">Detail</a>
                <a href="https://www.bhinneka.com/asus-notebook-a413ep-vips752-dreamy-silver-sku3336842487" target="_blank" class="btn btn-toko my-auto"><i class="fa fa-external-link"></i></a>
              </td>
            </tr>

            <tr>
              <td>8</td>
              <td>ASUS A413EP-VIPS753</td>
              <td>Rp 12.999.000</td>
              <td>
                <a href="detail_produk.php?no_laptop=113" class="btn btn-detail btn-sm">Detail</a>
                <a href="https://www.bhinneka.com/asus-notebook-a413ep-vips753-cobalt-blue-sku3336842584" target="_blank" class="btn btn-toko my-auto"><i class="fa fa-external-link"></i></a>
              </td>
            </tr>

            <tr>
              <td>9</td>
              <td>ASUS A413EP-VIPS751</td>
              <td>Rp 12.999.000</td>
              <td>
                <a href="detail_produk.php?no_laptop=114" class="btn btn-detail btn-sm">Detail</a>
                <a href="https://www.bhinneka.com/asus-notebook-a413ep-vips751-bespoke-black-sku3336847628" target="_blank" class="btn btn-toko my-auto"><i class="fa fa-external-link"></i></a>
              </td>
            </tr>

            <tr>
              <td>10</td>
              <td>ASUS A413EP</td>
              <td>Rp 13.799.000</td>
              <td>
                <a href="detail_produk.php?no_laptop=9" class="btn btn-detail btn-sm">Detail</a>
                <a href="https://www.bhinneka.com/asus-notebook-a413ep-vips753-cobalt-blue-sku3336842584" target="_blank" class="btn btn-toko my-auto"><i class="fa fa-external-link"></i></a>
              </td>
            </tr>
          <tbody>
        </table>
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


  <!-- Bootstrap JS -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>

</body>

</html>