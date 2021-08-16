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
    $query = "SELECT * FROM laptop WHERE no_laptop='$id'";
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
        echo "<script>alert('Data tidak ditemukan pada database'); window.location.href='laptop.php';</script>";
    }
} else {
    // apabila tidak ada data GET no admin pada akan di redirect ke profile.php
    echo "<script>alert('Masukkan data no laptop.');window.location='laptop.php';</script>";
}

?>

       
                <!-- Begin Page Content -->
                <div class="container-fluid">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Edit Laptop</h1>
                         <!-- Halaman Tambah Data -->
                <a href="laptop.php" class="btn btn-info btn-sm my-3">Lihat Tabel Laptop</a>
                </div>

              
                 <!-- table siswa-->
                <div class="card shadow mb-4">
                    <div class="card-body">
               
            

                <form action="update_laptop.php" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Merk Laptop</label>
                        <input type="hidden" name="no_laptop" value="<?php echo $data['no_laptop'] ?>">
                        <input type="text" class="form-control" name="merk_laptop" required oninvalid="this.setCustomValidity('Merk Laptop belum diisi')" oninput="setCustomValidity('')" value="<?php echo $data['merk_laptop']?>">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Harga Laptop</label>
                        <input type="number" class="form-control" name="harga_laptop" required oninvalid="this.setCustomValidity('Harga Laptop belum diisi')" oninput="setCustomValidity('')" value="<?php echo $data['harga_laptop']?>">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Gaming Laptop</label>
                        <input type="text" class="form-control" name="gaming_laptop" required oninvalid="this.setCustomValidity('Gaming Laptop belum diisi')" oninput="setCustomValidity('')" value="<?php echo $data['gaming_laptop']?>">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Desain Laptop</label>
                        <input type="text" class="form-control" name="desain_laptop" required oninvalid="this.setCustomValidity('Desain Laptop belum diisi')" oninput="setCustomValidity('')" value="<?php echo $data['desain_laptop']?>">
                      </div>
                    </div>

                     <div class="col-md-6">
                      <div class="form-group">
                        <label>Coding Laptop</label>
                        <input type="text" class="form-control" id="" name="coding_laptop" required oninvalid="this.setCustomValidity('Coding Laptop belum diisi')" oninput="setCustomValidity('')" value="<?php echo $data['coding_laptop']?>" >
                      </div>
                    </div>

                     <div class="col-md-6">
                      <div class="form-group">
                        <label>Office Laptop</label>
                        <input type="text" class="form-control" id="" name="office_laptop" required oninvalid="this.setCustomValidity('Office Laptop belum diisi')" oninput="setCustomValidity('')" value="<?php echo $data['office_laptop']?>">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Deskripsi Laptop</label>
                        <textarea name="deskripsi_laptop" cols="30" rows="7" class="form-control"><?php echo $data['deskripsi_laptop']?></textarea>
                      </div>
                    </div>

                     <div class="col-md-6">
                      <div class="form-group">
                        <label>Link Laptop</label>
                        <input type="text" class="form-control" name="link_laptop" required oninvalid="this.setCustomValidity('Link Laptop belum diisi')" oninput="setCustomValidity('')" value="<?php echo $data['link_laptop']?>">
                      </div>
                    </div>
                

                     <div class="col-md-6">
                      <div class="form-group">
                        <label>Status Laptop</label>
                        <select name="status_laptop" class="form-control">
                          <option value="<?php echo $data['status_laptop']; ?>"><?php echo $data['status_laptop'] ?></option>
                          <option value="Laptop Tersedia">1. Laptop Tersedia</option>
                          <option value="Laptop Tidak Tersedia">2. Laptop Tidak Tersedia</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Foto Laptop</label>
                        <img src="foto_laptop/<?php echo $data['foto_laptop'];?>" width="120px" alt="Foto Laptop">
                        <input type="file" class="form-control" name="foto_laptop">
                        <p style="color: red;">Ekstensi yang diperbolehkan .png | .jpg | .JPG | .jpeg | .gif</p>
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