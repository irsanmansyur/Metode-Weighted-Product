<?php

include 'koneksi.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register - SPK Sekolah</title>

    <!-- Custom fonts for this template-->
    <link href="admin/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="admin/assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- icon -->
    <link rel="shortcut icon" href="admin/assets/img/Laptop.png">

</head>

<body class="bg-gradient-success">

   <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-7">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class=" card-body p-0">

                        <!-- Nested Row within Card Body -->
                        <div class="row justify justify-content-center">
                            <img src="admin/assets/img/Laptop.png" width="100px" class="col-lg-3 d-none d-lg-block mt-3">

                            <div class="col-lg-10">
                                <div class="p-3">
                                    <h1 class="h4 text-gray-900 mb-4 text-center">Registrasi - SPK Weighted Product</h1>
                          
                                      <form class="user">
                                        
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap">

                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username">

                                        </div>

                                       
                                        <div class="form-group">
                                           <input type="password" class="form-control form-control-user"
                                            id="password" name="password" placeholder="Password">
                                        </div>
                                        
                                      </form>
                                        

                                        <button class="btn btn-primary btn-register btn-block mt-3">Registrasi</button>
                                    
                                    <div class="text-center mt-3">
                                        <p><a href="login.php">Sudah memiliki akun? Silahkan Login!</a></p>
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

     <script>
      $(document).ready(function() {

        $(".btn-register").click( function() {
        
          var nama_lengkap = $("#nama_lengkap").val();
          var username = $("#username").val();
          var password = $("#password").val();

          if (nama_lengkap.length == "") {

            Swal.fire({
              type: 'warning',
              title: 'Oops...',
              text: 'Nama Lengkap Wajib Diisi !'
            });

          } else if(username.length == "") {

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

            //ajax
            $.ajax({

              url: "simpan-register.php",
              type: "POST",
              data: {
                  "nama_lengkap": nama_lengkap,
                  "username": username,
                  "password": password
              },

              success:function(response){

                if (response == "success") {

                  Swal.fire({
                    type: 'success',
                    title: 'Register Berhasil!',
                    text: 'silahkan login!'
                  });

                  $("#nama_lengkap").val('');
                  $("#username").val('');
                  $("#password").val('');

                } else {

                  Swal.fire({
                    type: 'error',
                    title: 'Register Gagal!',
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
              }

            })

          }

        }); 

      });
    </script>

</body>

</html>