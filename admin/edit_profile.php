<?php

session_start();

include 'inc/header.php';
include '../koneksi.php';

 if ($_SESSION['statuslogin'] != true) {
      echo '<script>window.location="../login.php"</script>';
  }

// mengecek apakah di url ada nilai get id
if (isset($_GET['no_admin'])) {
    // ambil nilai no admin dari url dan disimpan dalam variabel $no_admin
    $id = ($_GET["no_admin"]);

    // menampilkan data dari database yang mempunyai no_admin=$id
    $query = "SELECT * FROM admin WHERE no_admin='$id'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if (!$result) {
        die("Query Error: ".mysqli_errno($koneksi).
        " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
    // apakah data tidak ada pada database maka akan dijalankan perintah ini
    if (!count($data)) {
        echo "<script>alert('Data tidak ditemukan pada database'); window.location.href='profile.php';</script>";
    }
} else {
    // apabila tidak ada data GET no admin pada akan di redirect ke profile.php
    echo "<script>alert('Masukkan data no admin.');window.location='profile.php';</script>";
}

?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Update Admin</h1>
                </div>

              
                 <!-- table siswa-->
                <div class="card shadow mb-4">
                    <div class="card-body">
                <!-- Halaman Tambah Data -->
                <a href="profile.php" class="btn btn-info btn-sm my-3"><i class="fas fa-backward"></i> Kembali</a>
            

                <form action="update_profile.php" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="hidden" name="no_admin" value="<?php echo $data['no_admin'] ?>">
                        <input type="text" class="form-control" value="<?php echo $data['nama'] ?>" name="nama" required oninvalid="this.setCustomValidity('Nama belum diisi')" oninput="setCustomValidity('')">
                      </div>

                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" value="<?php echo $data['email'] ?>" name="email" required oninvalid="this.setCustomValidity('Email belum diisi')" oninput="setCustomValidity('')">
                      </div>

                      <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" name="password" value="<?php echo $data['password'] ?>">
                      </div>

                      <div class="form-group">
                        <label>No Hp</label>
                        <input type="number" class="form-control" name="no_hp" value="<?php echo $data['no_hp']?>" required oninvalid="this.setCustomValidity('No Hp belum diisi')" oninput="setCustomValidity('')">
                      </div>

                      <div class="form-group">
                        <label>Foto</label><br>
                        <img src="foto/<?php echo $data['foto']; ?>" width="120px"  alt="Foto User">
                        <input type="file" class="form-control" name="foto" value="<?php echo $data['foto']?>" >
                        <p style="color: red">Abaikan Jika Tidak merubah foto</p>
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