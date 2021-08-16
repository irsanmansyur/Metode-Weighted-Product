<?php

 session_start();
include "inc/header.php";
include '../koneksi.php';
 
   if ($_SESSION['statuslogin'] != true) {
      echo '<script>window.location="../login.php"</script>';
  }

?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                   

                    <!-- Content Row -->
                    <div class="row">


                    </div>

                    <!-- Content Row -->

                    <div class="row">
                       

                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-lg-12 mb-4">

                           <!-- Dashboard Admin -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Dashboard Admin</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4"
                                            src="assets/img/logo.png" width="200px" height="200px" alt="">
                                    </div>
                                    <h5 class="text-center">Sistem Pendukung Keputusan Metode Weighted Product <br> Universitas Gunadarma </h5>
                                    
                                   
                                </div>
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