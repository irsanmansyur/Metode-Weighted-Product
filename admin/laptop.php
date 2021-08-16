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
                    <h1 class="h3 mb-0 text-gray-800">Data Tabel Produk</h1>
                </div>
                    
              
                 <!-- table siswa-->
                <div class="card shadow mb-4">
                    <div class="card-body">
                <!-- Halaman Tambah Data -->
                <a href="tambah_laptop.php" class="btn btn-primary btn-sm my-3"><i class="fas fa-plus"></i> Tambah Data</a>
                 <?php 
                    if(isset($_GET['alert'])){
                        if($_GET['alert']=='gagal_ekstensi'){
                            ?>
                            <div class="alert alert-warning alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
                                Ekstensi Tidak Diperbolehkan
                            </div>                              
                            <?php
                        }elseif($_GET['alert']=="gagal_ukuran"){
                            ?>
                            <div class="alert alert-warning alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-check"></i> Peringatan !</h4>
                                Ukuran File terlalu Besar
                            </div>                              
                            <?php
                        }elseif($_GET['alert']=="berhasil"){
                            ?>
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-check"></i> Success</h4>
                                Berhasil Disimpan
                            </div>                              
                            <?php
                        }
                    }
                ?> 
                
                <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Merk Laptop</th>
                            <th>Harga Laptop</th>
                            <th>Gaming</th>
                            <th>Desain</th>
                            <th>Coding</th>
                            <th>Office</th>
                            <th>Status Laptop</th>
                            <th>Foto Laptop</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                       <?php
                        // jalankan query untuk menampilkan semua data diurutkan berdasarkan no admin
                        $query = "SELECT * FROM laptop order by no_laptop ASC";
                        $result = mysqli_query($koneksi, $query);
                        // mengecek apakah ada error ketika menjalankan query

                        if (!$result) {
                            die("Query Error: ".mysqli_errno($koneksi).
                            " - ".mysqli_error($koneksi));
                        }

                        // buat perulangan untuk element tabel dari data admin
                        $no = 1; // variabel untuk membuat nomor urut

                        // hasil query akan disimpan dalam variabel $data dalam bentuk array
                        // kemudian di cetak dengan perulangan while
                        while ($data = mysqli_fetch_assoc($result)) {
                        ?>                           
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $data['merk_laptop'];?></td>
                            <td><?php echo number_format($data['harga_laptop']);?></td>
                            <td><?php echo $data['gaming_laptop'];?></td>
                            <td><?php echo $data['desain_laptop'];?></td>
                            <td><?php echo $data['coding_laptop'];?></td>
                            <td><?php echo $data['office_laptop'];?></td>
                            <td><?php echo $data['status_laptop'];?></td>
                            <td><img src="<?php echo 'foto_laptop/'.$data['foto_laptop'] ?>" width="100px" alt="Foto Laptop"></td>
                            <input type="hidden" name="foto" value="<?php echo $data['foto_laptop'] ?>">
                            <td><a href="edit_laptop.php?no_laptop=<?php echo $data['no_laptop'];?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                <a href="hapus_laptop.php?no_laptop=<?php echo $data['no_laptop'];?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>    
                        </tr>

                       <?php $no++; } ?>

                    </tbody>
                </table>
             </div>
                   
            </div>
        </div>
                   

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php

include 'inc/footer.php';

?>