<?php

session_start();

include 'inc/header.php';
include '../koneksi.php';

?>

       
                <!-- Begin Page Content -->
                <div class="container-fluid">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Tambah Laptop</h1>
                         <!-- Halaman Tambah Data -->
                <a href="laptop.php" class="btn btn-info btn-sm my-3">Lihat Tabel Laptop</a>
                </div>

              
                 <!-- table siswa-->
                <div class="card shadow mb-4">
                    <div class="card-body">
               
            

                <form action="simpan_laptop.php" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Merk Laptop</label>
                        <input type="text" class="form-control" id="" name="merk_laptop" required oninvalid="this.setCustomValidity('Merk Laptop belum diisi')" oninput="setCustomValidity('')">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Harga Laptop</label>
                        <input type="number" class="form-control" id="" name="harga_laptop" required oninvalid="this.setCustomValidity('Harga Laptop belum diisi')" oninput="setCustomValidity('')">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Gaming Laptop</label>
                        <input type="text" class="form-control" id="" name="gaming_laptop" required oninvalid="this.setCustomValidity('Gaming Laptop belum diisi')" oninput="setCustomValidity('')">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Desain Laptop</label>
                        <input type="text" class="form-control" id="" name="desain_laptop" required oninvalid="this.setCustomValidity('Desain Laptop belum diisi')" oninput="setCustomValidity('')">
                      </div>
                    </div>

                     <div class="col-md-6">
                      <div class="form-group">
                        <label>Coding Laptop</label>
                        <input type="text" class="form-control" id="" name="coding_laptop" required oninvalid="this.setCustomValidity('Coding Laptop belum diisi')" oninput="setCustomValidity('')">
                      </div>
                    </div>

                     <div class="col-md-6">
                      <div class="form-group">
                        <label>Office Laptop</label>
                        <input type="text" class="form-control" id="" name="office_laptop" required oninvalid="this.setCustomValidity('Office Laptop belum diisi')" oninput="setCustomValidity('')">
                      </div>
                    </div>

                     <div class="col-md-6">
                      <div class="form-group">
                        <label>Deskripsi Laptop</label>
                        <textarea name="deskripsi_laptop" id="" cols="30" rows="7" class="form-control"></textarea>
                      </div>
                    </div>
                    
                     <div class="col-md-6">
                      <div class="form-group">
                        <label>Link Laptop</label>
                        <input type="text" class="form-control" id="" name="link_laptop" required oninvalid="this.setCustomValidity('Link Laptop belum diisi')" oninput="setCustomValidity('')">
                      </div>
                    </div>


                     <div class="col-md-6">
                      <div class="form-group">
                        <label>Status Laptop</label>
                        <select name="status_laptop" class="form-control" id="">
                          <option value="">--Pilih Status--</option>
                          <option value="Laptop Tersedia">1. Laptop Tersedia</option>
                          <option value="Laptop Tidak Tersedia">2. Laptop Tidak Tersedia</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Foto Laptop</label>
                        <input type="file" class="form-control" id="" name="foto_laptop" required oninvalid="this.setCustomValidity('Foto Laptop belum diupload')" oninput="setCustomValidity('')">
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