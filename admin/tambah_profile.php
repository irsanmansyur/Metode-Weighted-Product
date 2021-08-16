<?php

session_start();

include 'inc/header.php';
include '../koneksi.php';

?>

       
                <!-- Begin Page Content -->
                <div class="container-fluid">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Tambah Akun</h1>
                      <a href="profile.php" class="btn btn-info btn-sm my-3">Lihat Tabel Admin</a>
                </div>
                 <!-- table siswa-->
                <div class="card shadow mb-4">
                    <div class="card-body">
                <!-- Halaman Tambah Data -->
                <form action="simpan_profile.php" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="" name="nama" required oninvalid="this.setCustomValidity('Nama belum diisi')" oninput="setCustomValidity('')">
                      </div> 
                       <div class="form-group">
                        <label for="nama">Email Address</label>
                        <input type="email" class="form-control" id="" name="email" required oninvalid="this.setCustomValidity('Email belum diisi')" oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group">
                        <label for="nama">Password</label>
                        <input type="text" class="form-control" id="" name="password" required oninvalid="this.setCustomValidity('Password belum diisi')" oninput="setCustomValidity('')">
                      </div>
                        <div class="form-group">
                            <label for="">No Hp</label>
                            <input type="number" class="form-control" name="no_hp" required oninvalid="this.setCustomValidity('No Hp belum diisi')" oninput="setCustomValidity('')">
                        </div>
                         <div class="form-group">
                            <label for="">foto</label>
                            <input type="file" class="form-control" name="foto" required oninvalid="this.setCustomValidity('Foto belum Diupload')" oninput="setCustomValidity('')">
                            <p style="color: red;">Ekstensi yang diperbolehkan .png | .jpg | .JPG | .jpeg | .gif</p>
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