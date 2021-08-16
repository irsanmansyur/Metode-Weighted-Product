<?php

session_start();

include 'inc/header.php';
include '../koneksi.php';

if ($_SESSION['statuslogin'] != true) {
  echo '<script>window.location="../login.php"</script>';
}

// mengecek apakah di url ada nilai get id
if (isset($_GET['bobot'])) {
  // ambil nilai no admin dari url dan disimpan dalam variabel $no_admin
  $id = ($_GET["bobot"]);

  // menampilkan data dari database yang mempunyai no_admin=$id
  $query = "SELECT * FROM bobot_kriteria WHERE bobot='$id'";
  $result = mysqli_query($koneksi, $query);
  // jika data gagal diambil maka akan tampil error berikut
  if (!$result) {
    die("Query Error: " . mysqli_errno($koneksi) .
      " - " . mysqli_error($koneksi));
  }
  // mengambil data dari database
  $data = mysqli_fetch_assoc($result);
  // apakah data tidak ada pada database maka akan dijalankan perintah ini
  if (!count($data)) {
    echo "<script>alert('Data tidak ditemukan pada database'); window.location.href='tabel_bobot.php';</script>";
  }
} else {
  // apabila tidak ada data GET no admin pada akan di redirect ke profile.php
  echo "<script>alert('Masukkan data bobot.');window.location='tabel_bobot.php';</script>";
}

?>


<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Bobot</h1>
    <!-- Halaman Tambah Data -->
    <a href="tabel_bobot.php" class="btn btn-info btn-sm my-3">Tabel Bobot Kriteria</a>
  </div>


  <!-- table siswa-->
  <div class="card shadow mb-4">
    <div class="card-body">



      <form action="update_bobot.php" method="post">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Bobot</label>
              <input type="hidden" name="bobot" value="<?php echo $data['bobot'] ?>">
              <input type="text" class="form-control" name="bobot" required oninvalid="this.setCustomValidity('Bobot belum diisi')" oninput="setCustomValidity('')" value="<?php echo $data['bobot'] ?>">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Harga</label>
              <input class="form-control" name="bobot_harga" required oninvalid="this.setCustomValidity('Harga Laptop belum diisi')" oninput="setCustomValidity('')" value="<?php echo $data['bobot_harga'] ?>">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Gaming</label>
              <input type="text" class="form-control" name="bobot_gaming" required oninvalid="this.setCustomValidity('Gaming belum diisi')" oninput="setCustomValidity('')" value="<?php echo $data['bobot_gaming'] ?>">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Desain</label>
              <input type="text" class="form-control" name="bobot_desain" required oninvalid="this.setCustomValidity('Desain Laptop belum diisi')" oninput="setCustomValidity('')" value="<?php echo $data['bobot_desain'] ?>">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Coding</label>
              <input type="text" class="form-control" id="" name="bobot_coding" required oninvalid="this.setCustomValidity('Coding Laptop belum diisi')" oninput="setCustomValidity('')" value="<?php echo $data['bobot_coding'] ?>">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Office</label>
              <input type="text" class="form-control" id="" name="bobot_office" required oninvalid="this.setCustomValidity('Office Laptop belum diisi')" oninput="setCustomValidity('')" value="<?php echo $data['bobot_office'] ?>">
            </div>
          </div>

        </div>
        <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
      </form>

    </div>
  </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php

include 'inc/footer.php';

?>