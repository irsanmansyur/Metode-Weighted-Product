<?php

session_start();

include 'inc/header.php';
include '../koneksi.php';

?>


                <!-- Begin Page Content -->
                <div class="container-fluid">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Data Tabel Admin</h1>
                </div>
                 <!-- table siswa-->
                <div class="card shadow mb-4">
                    <div class="card-body">
                <!-- Halaman Tambah Data -->
                    <a href="tambah_profile.php" class="btn btn-primary btn-sm my-3"><i class="fas fa-plus"></i> Tambah Akun</a>
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
                            <th width="50px">No.</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Password</th>
                            <th class="text-center">No Hp</th>
                            <th class="text-center">Foto</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // jalankan query untuk menampilkan semua data diurutkan berdasarkan no admin
                        $query = "SELECT * FROM admin order by no_admin ASC";
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
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>                           
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $row['nama'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['password'] ?></td>  
                                <td><?php echo $row['no_hp'] ?></td>
                                <td><img src="foto/<?php echo $row['foto'] ?>" width="50px" height="50px" alt="Foto User"></td>
                            <td>
                                <a href="edit_profile.php?no_admin=<?php echo $row['no_admin']?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"> Edit</i></a>
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