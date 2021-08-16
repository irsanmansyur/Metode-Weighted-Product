<?php

session_start();

include 'inc/header.php';
include '../koneksi.php';

if ($_SESSION['statuslogin'] != true) {
  echo '<script>window.location="../login.php"</script>';
}

?>


<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Bobot Kriteria</h1>
    <a href="tabel_bobot.php" class="btn btn-info btn-sm my-3">Tabel Bobot Kriteria</a>
  </div>
  <div class="card shadow mb-4">
    <div class="card-body">
      <!-- Halaman Tambah Data -->
      <form action="simpan_bobot.php" method="post">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Bobot</label>
              <input type="text" name="bobot" class="form-control">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Bobot Harga</label>
              <input type="text" name="bobot_harga" class="form-control">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Bobot Gaming</label>
              <input type="text" name="bobot_gaming" class="form-control">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Bobot Desain</label>
              <input type="text" name="bobot_desain" class="form-control">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Bobot Coding</label>
              <input type="text" name="bobot_coding" class="form-control">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Bobot Office</label>
              <input type="text" name="bobot_office" class="form-control">
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