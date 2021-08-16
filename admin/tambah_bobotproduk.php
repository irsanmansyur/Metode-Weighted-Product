<?php

session_start();

include 'inc/header.php';
include '../koneksi.php';

?>


<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Bobot Produk</h1>
    <!-- Halaman Tambah Data -->
    <a href="bobot_produk.php" class="btn btn-info btn-sm my-3">Lihat Tabel Bobot</a>
  </div>


  <!-- table siswa-->
  <div class="card shadow mb-4">
    <div class="card-body">



      <form action="simpan_bobotproduk.php" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Merk</label>
              <input type="text" class="form-control" id="" name="merk" required oninvalid="this.setCustomValidity('Merk belum diisi')" oninput="setCustomValidity('')">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Nama Alternatif</label>
              <input type="text" class="form-control" id="" name="nama_alternatif" required oninvalid="this.setCustomValidity('Nama Alternatif belum diisi')" oninput="setCustomValidity('')">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Bobot Harga</label>
              <input type="text" class="form-control" id="" name="bobot_harga" required oninvalid="this.setCustomValidity('Bobot Harga belum diisi')" oninput="setCustomValidity('')">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Bobot Gaming</label>
              <input type="text" class="form-control" id="" name="bobot_gaming" required oninvalid="this.setCustomValidity('Bobot Gaming belum diisi')" oninput="setCustomValidity('')">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Bobot Desain</label>
              <input type="text" class="form-control" id="" name="bobot_desain" required oninvalid="this.setCustomValidity('Bobot Desain belum diisi')" oninput="setCustomValidity('')">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Bobot Coding</label>
              <input type="text" class="form-control" id="" name="bobot_coding" required oninvalid="this.setCustomValidity('Office Laptop belum diisi')" oninput="setCustomValidity('')">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Bobot Office</label>
              <input type="text" class="form-control" id="" name="bobot_office" required oninvalid="this.setCustomValidity('Bobot Office belum diisi')" oninput="setCustomValidity('')">
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