<?php

session_start();

include 'inc/header.php';
include '../koneksi.php';

?>


<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Bobot Kriteria</h1>
  </div>


  <!-- table siswa-->
  <div class="card shadow mb-4">
    <div class="card-body">
      <!-- Halaman Tambah Data -->
      <a href="bobot_kriteria.php" class="btn btn-primary btn-sm my-3"><i class="fas fa-plus"></i> Tambah Data</a>
      <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%">
          <thead>
            <tr>
              <th>Bobot</th>
              <th>Harga</th>
              <th>Gaming</th>
              <th>Desain</th>
              <th>Coding</th>
              <th>Office</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>

            <?php
            // jalankan query untuk menampilkan semua data diurutkan berdasarkan no admin
            $query = "SELECT * FROM bobot_kriteria order by bobot ASC";
            $result = mysqli_query($koneksi, $query);
            // mengecek apakah ada error ketika menjalankan query

            if (!$result) {
              die("Query Error: " . mysqli_errno($koneksi) .
                " - " . mysqli_error($koneksi));
            }

            // hasil query akan disimpan dalam variabel $data dalam bentuk array
            // kemudian di cetak dengan perulangan while
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
              <tr>
                <td><?php echo $row['bobot']; ?></td>
                <td><?php echo $row['bobot_harga'] ?></td>
                <td><?php echo $row['bobot_gaming'] ?></td>
                <td><?php echo $row['bobot_desain'] ?></td>
                <td><?php echo $row['bobot_coding'] ?></td>
                <td><?php echo $row['bobot_office'] ?></td>
                <td>
                  <a href="edit_bobot.php?bobot=<?php echo $row['bobot'] ?>" class='btn btn-warning btn-sm'><span class="fa fa-edit" aria-hidden="true"> Edit</span></a>
                  <a href="hapus_bobot.php?bobot=<?php echo $row["bobot"] ?>" onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm"><span class="fa fa-trash" aria-hidden="true"> Hapus</span></a>
                </td>
              </tr>
            <?php } ?>

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