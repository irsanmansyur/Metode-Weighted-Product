<?php
include "koneksi.php";

?>

 

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - SPK Laptop</title>

    <!-- Custom fonts for this template-->
    <link href="admin/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="admin/assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- icon -->
    <link rel="shortcut icon" href="admin/assets/img/Laptop.png">

</head>

<body style="background-color: #22668a;">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                         <div class="row justify-content-center mt-4">
                               <img src="assets/img/laptop-1.jpg" class="img-responsive rounded-circle" width="100px" alt=""> 
                            </div>
                        <div class="row">
                           
                            <div class="col-lg-9 m-auto">
                                <div class="p-3">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login Admin</h1>
                                    </div>
                                      
                                     <form action="cek_login.php" method="POST" class="user">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="text" id="email" name="email" class="form-control form-control-user" required oninvalid="this.setCustomValidity('Email wajib diisi')" oninput="setCustomValidity('')">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Password</label>
                                            <input type="password" id="password" name="password" class="form-control form-control-user" required oninvalid="this.setCustomValidity('Password wajib diisi')" oninput="setCustomValidity('')">
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-login btn-block mt-3">Login</button>
                                       </form>
                                        <hr>
                                     
                                    <div class="text-center">
                                       <i class="fa fa-globe"></i> <a class="small" href="index.php">Website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="admin/assets/vendor/jquery/jquery.min.js"></script>
    <script src="admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin/assets/js/sb-admin-2.min.js"></script>

    <!-- CKEditor -->
    <script src="admin/assets/vendor/ckeditor/ckeditor.js"></script>
 
    <!-- Sweet Alert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>

   <!-- <script>
      $(document).ready(function() {

        $(".btn-login").click( function() {
        
          var username = $("#username").val();
          var password = $("#password").val();

          if(username.length == "") {

            Swal.fire({
              type: 'warning',
              title: 'Oops...',
              text: 'Username Wajib Diisi !'
            });

          } else if(password.length == "") {

            Swal.fire({
              type: 'warning',
              title: 'Oops...',
              text: 'Password Wajib Diisi !'
            });

          } else {

            $.ajax({

              url: "cek_login.php",
              type: "POST",
              data: {
                  "username": username,
                  "password": password
              },

              success:function(response){

                if (response == "success") {

                  Swal.fire({
                    type: 'success',
                    title: 'Login Berhasil!',
                    text: 'Anda akan di arahkan dalam 3 Detik',
                    timer: 3000,
                    showCancelButton: false,
                    showConfirmButton: false
                  })
                  .then (function() {
                    window.location.href = "admin/index.php";
                  });

                } else {

                  Swal.fire({
                    type: 'error',
                    title: 'Login Gagal!',
                    text: 'silahkan coba lagi!'
                  });

                }

                console.log(response);

              },

              error:function(response){

                  Swal.fire({
                    type: 'error',
                    title: 'Opps!',
                    text: 'server error!'
                  });

                  console.log(response);

              }

            });

          }

        });

      });
    </script> -->
</body>

</html>