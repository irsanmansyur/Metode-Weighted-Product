<?php

session_start();

include 'inc/header.php';
include '../koneksi.php';

$id = $_GET['id_kriteria'];
  
  $query = "SELECT * FROM kriteria WHERE id_kriteria = $id LIMIT 1";

  $result = mysqli_query($koneksi, $query);

  $dt = mysqli_fetch_array($result);

?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Update Kriteria</h1>
                </div>

              
                 <!-- table siswa-->
                <div class="card shadow mb-4">
                    <div class="card-body">
                <!-- Halaman Tambah Data -->
                <a href="kriteria.php" class="btn btn-info btn-sm my-3"><i class="fas fa-backward"></i> Kembali</a>
            

                <form action="../admin/update_kriteria.php" method="post">
                      <div class="form-group">
                        <label for="">Nama Data</label>
                        <input type="hidden" name="id_kriteria" value="<?php echo $dt['id_kriteria'] ?>">
                        <input type="text" class="form-control" value="<?php echo $dt['namadata'] ?>" name="namadata" required oninvalid="this.setCustomValidity('Nama Data belum diisi')" oninput="setCustomValidity('')">
                      </div>

                      <div class="form-group">
                        <label for="nama_kriteria">Nama Kriteria</label>
                        <input type="text" class="form-control" value="<?php echo $dt['nama_kriteria'] ?>" name="nama_kriteria" required oninvalid="this.setCustomValidity('Nama Kriteria belum diisi')" oninput="setCustomValidity('')">
                      </div>


                      <div class="form-group">
                        <label for="tipe">Tipe</label>
                        <select class="form-control" name="tipe_kriteria"> Pilih Tipe
                          <option value="<?php echo $dt['tipe_kriteria'] ?>"><?php echo $dt['tipe_kriteria'] ?></option>
                          <option value="<?php echo $dt['tipe_kriteria'] ?>">Cost</option>
                          <option value="<?php echo $dt['tipe_kriteria'] ?>">Benefit</option>
                        </select>
                      </div>
                      
                      <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Update</button>
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