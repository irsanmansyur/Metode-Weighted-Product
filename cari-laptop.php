<?php
include 'koneksi.php';
include 'bobot_kriteria.php';
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

    <h2 class="text-center mt-4" style="color: #ffffff;">Cari Laptop</h2>
    <div class="container">
      <img src="assets/img/laptop-1.jpg" class="rounded-circle mx-auto img-responsive" width="120px" height="120px" alt="laptop">

    </div>

    <hr class="my-4" style="font-weight: bold;" />
  </div>
  <!-- Jumbotron -->



  <!-- form pemilihan -->
  <section id="area_input">
    <h4>Cari Laptop Berdasarkan :</h4>

    <form action="hasil_cari.php" name="cari" method="POST">
      <div class="item form-group pt-2">
        <label for="prosesor" class="form-label">Harga</label>
        <div class="col-md-6">
          <select class="form-select" name="hargaLaptop" required>
            <option value="">Pilih Rentang Harga</option>
            <option value="1000000 AND 5999999">Rp 3.000.000 - 5.999.999</option>
            <option value="6000000 AND 8999999">Rp 6.000.000 - 8.999.999</option>
            <option value="9000000 AND 11999999">Rp 9.000.000 - 11.999.999</option>
            <option value="12000000 AND 14999999">Rp 12.000.000 - 14.999.999</option>
            <option value="15000000 AND 66999999">> Rp 15.000.000</option>
          </select>
        </div>
      </div>

      <div class="item form-group pt-2">
        <label for="gaming" class="form-label">Gaming</label>
        <div class="col-md-6">
          <select class="form-select" name="gaming" required>
            <option disabled>Pilih Gaming</option>
            <?php foreach ($bobot_game as $bobot => $val) : ?>
              <option value="<?= $bobot; ?>"><?= $val; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>

      <div class="item form-group pt-2">
        <label for="desain" class="form-label">Desain</label>
        <div class="col-md-6">
          <select class="form-select" name="desain" required>
            <option disabled>Pilih Desain</option>
            <?php foreach ($bobot_desain as $bobot => $val) : ?>
              <option value="<?= $bobot; ?>"><?= $val; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>

      <div class="item form-group pt-2">
        <label for="coding" class="form-label">Coding</label>
        <div class="col-md-6">
          <select class="form-select" name="coding" required>
            <option disabled>Pilih Coding</option>
            <?php foreach ($bobot_coding as $bobot => $val) : ?>
              <option value="<?= $bobot; ?>"><?= $val; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>

      <div class="item form-group pt-2">
        <label for="office" class="form-label">Office</label>
        <div class="col-md-6">
          <select class="form-select" name="office" required>
            <option disabled>Pilih Office</option>
            <?php foreach ($bobot_office as $bobot => $val) : ?>
              <option value="<?= $bobot; ?>"><?= $val; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>

      <div class="item form-group">
        <div class="col-md-6 col-sm-6 pt-2">
          <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
        </div>
      </div>

    </form>
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