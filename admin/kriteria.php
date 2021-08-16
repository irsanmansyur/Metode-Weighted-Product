<?php

session_start();

include 'inc/header.php';
include '../koneksi.php';

?>


                <!-- Begin Page Content -->
                <div class="container-fluid">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Kriteria</h1>
                </div>
                    
              
                 <!-- table siswa-->
                <div class="card shadow mb-4">
                    <div class="card-body">
                <!-- Halaman Tambah Data -->
                <a href="tambah_kriteria.php" class="btn btn-primary btn-sm my-3"><i class="fas fa-plus"></i> Tambah Kriteria</a>
                <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%">
                    <thead>
                        <tr>
                            <th>ID Kriteria</th>
                            <th>Nama Kriteria</th>
                            <th>Jenis Kriteria</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                       <?php
                        include "../koneksi.php";    
                        $query = mysqli_query($koneksi, "SELECT * FROM kriteria order by no_kriteria ASC");
                        while ($row = mysqli_fetch_array($query)) {
                        echo "                            
                            <tr>
                                <td>$row[no_kriteria]</td>
                                <td>$row[nama_kriteria]</td>
                                <td>$row[jenis_kriteria]</td>
                            <td>
                                <a href='edit_kriteria.php?no_kriteria=$row[no_kriteria]' class='btn btn-warning btn-sm'><span class='fa fa-edit'aria-hidden='true'> Edit</span></a>
                                <a href='hapus_kriteria.php?no_kriteria=$row[no_kriteria]' onclick='return confirm('Yakin ingin menghapus data ini?')' class='btn btn-danger btn-sm'><span class='fa fa-trash'aria-hidden='true'> Hapus</span></a>
                            </td>
                        </tr>
                         ";} ?>    
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