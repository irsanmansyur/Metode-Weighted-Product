<?php

session_start();

include 'inc/header.php';
include '../koneksi.php';

 if ($_SESSION['statuslogin'] != true) {
      echo '<script>window.location="../login.php"</script>';
  }

// mengecek apakah di url ada nilai get id
if (isset($_GET['no_laptop'])) {
    // ambil nilai no admin dari url dan disimpan dalam variabel $no_admin
    $id = ($_GET["no_laptop"]);

    // menampilkan data dari database yang mempunyai no_admin=$id
    $query = "SELECT * FROM bobot_produk WHERE no_laptop='$id'";
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
        echo "<script>alert('Data tidak ditemukan pada database'); window.location.href='bobot_produk.php';</script>";
    }
} else {
    // apabila tidak ada data GET no admin pada akan di redirect ke profile.php
    echo "<script>alert('Masukkan data bobot.');window.location='bobot_produk.php';</script>";
}

?>


       
                <!-- Begin Page Content -->
                <div class="container-fluid">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Edit Bobot Produk</h1>
                         <!-- Halaman Tambah Data -->
                <a href="bobot_produk.php" class="btn btn-info btn-sm my-3">Lihat Tabel Bobot</a>
                </div>

              
                 <!-- table siswa-->
                <div class="card shadow mb-4">
                    <div class="card-body">
               
            

                <form action="update_bobotproduk.php" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Merk</label>
                        <input type="hidden" name="no_laptop" value="<?php echo $data['no_laptop'] ?>">
                        <input type="text" class="form-control" value="<?php echo $data['merk']?>" name="merk" required oninvalid="this.setCustomValidity('Merk belum diisi')" oninput="setCustomValidity('')">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Nama Alternatif</label>
                        <input type="text" class="form-control" value="<?php echo $data['nama_alternatif']?>" name="nama_alternatif" required oninvalid="this.setCustomValidity('Nama Alternatif belum diisi')" oninput="setCustomValidity('')">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Bobot Harga</label>
                        <input type="text" class="form-control" value="<?php echo $data['bobot_harga']?>" name="bobot_harga" required oninvalid="this.setCustomValidity('Bobot Harga belum diisi')" oninput="setCustomValidity('')">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Bobot Gaming</label>
                        <input type="text" class="form-control" value="<?php echo $data['bobot_gaming']?>" name="bobot_gaming" required oninvalid="this.setCustomValidity('Bobot Gaming belum diisi')" oninput="setCustomValidity('')">
                      </div>
                    </div>

                     <div class="col-md-6">
                      <div class="form-group">
                        <label>Bobot Desain</label>
                        <input type="text" class="form-control" value="<?php echo $data['bobot_desain']?>" name="bobot_desain" required oninvalid="this.setCustomValidity('Bobot Desain belum diisi')" oninput="setCustomValidity('')">
                      </div>
                    </div>

                     <div class="col-md-6">
                      <div class="form-group">
                        <label>Bobot Coding</label>
                        <input type="text" class="form-control" value="<?php echo $data['bobot_coding']?>" name="bobot_coding" required oninvalid="this.setCustomValidity('Office Laptop belum diisi')" oninput="setCustomValidity('')">
                      </div>
                    </div>

                     <div class="col-md-6">
                      <div class="form-group">
                        <label>Bobot Office</label>
                        <input type="text" class="form-control" value="<?php echo $data['bobot_office']?>" name="bobot_office" required oninvalid="this.setCustomValidity('Bobot Office belum diisi')" oninput="setCustomValidity('')">
                      </div>
                    </div>
                    
                  
                  </div>
                      <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
                      <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-lock"></i> Reset</button>
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