<?php

session_start();

include 'inc/header.php';
include '../koneksi.php';

?>

       
                <!-- Begin Page Content -->
                <div class="container-fluid">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Tambah Kriteria</h1>
                <!-- Halaman Tabel kriteria -->
                <a href="kriteria.php" class="btn btn-info btn-sm my-3">Lihat Tabel Kriteria</a>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-body">
                <form action="simpan_kriteria.php" method="post">
                      <div class="form-group">
                        <label for="nama_kriteria">Nama Kriteria</label>
                        <input type="text" class="form-control" id="" name="nama_kriteria" required oninvalid="this.setCustomValidity('Nama Kriteria belum diisi')" oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group">
                        <label for="jenis">Jenis Kriteria</label>
                        <select class="form-control" name="jenis_kriteria" id="jenis">
                          <option value="">Pilih Tipe</option>
                          <option value="Cost">Cost</option>
                          <option value="Benefit">Benefit</option>
                        </select>
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