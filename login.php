<?php
require_once "config/config.php";
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Sistem Informasi Kepegawaian">
  <meta name="author" content="kayla">

  <title>SIMPEG - Login</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

  <link href="../assets/styles.css" rel="stylesheet">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800;900&display=swap');

    body {
      font-family: 'Rubik', sans-serif;
    }

    .bx{
      font-size: 180px;
      margin-left: 100px;
    }
  </style>
</head>

<body>

  <body class="bg-gradient-primary">

    <div class="container">

      <!-- Outer Row -->
      <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

          <div class="card o-hidden border-0 shadow-lg" style="margin-top: 130px !important;">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row align-items-center">

                <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->

                <div class="col-lg-6">
                  <div class="p-5">
                    <div class="text-center mb-4">
                      <h1 class="h4 text-gray-900 font-weight-bold">LOGIN</h1>
                      <span class="text-muted">Sistem Informasi Pegawai</span>
                    </div>
                    <form class="akun" method="POST" action="<?= base_url('config/proses_log') ?>?login">
                      <div class="form-group mb-2">
                        <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" autocomplete="off" autofocus>
                      </div>
                      <div class="form-group mb-2">
                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                      </div>
                      <button type="submit" class="btn btn-primary btn-user btn-block"><i class="fas fa-fw fa-sign-in-alt"></i> Login</button>
                    </form>
                  </div>
                </div>

                <div class="col-lg-6 d-none d-lg-block">
                  <i class='bx bx-group'"></i>
                </div>

              </div>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= asset('_assets/vendor/jquery/jquery.min.js') ?> "></script>
    <script src="<?= asset('_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?> "></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= asset('_assets/vendor/jquery-easing/jquery.easing.min.js') ?> "></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= asset('_assets/js/sb-admin-2.min.js') ?> "></script>

    <!-- </body>
  <div class="container">
    <form class="akun" method="POST" action="<?= base_url('config/proses_log') ?>?login">
    <form class="akun" method="POST" action="<?= base_url('test_proses_log') ?>">
      <div class="mb-3">
        <label for="inputusername" class="form-label">Username</label>
        <input name="username" class="form-control" id="inputusername">
      </div>
      <div class="mb-3">
        <label for="inputpassword" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="inputpassword">
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
  </div>
</body> -->