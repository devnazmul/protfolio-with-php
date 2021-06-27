<?php include('./db/conn.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
        <meta name="author" content="Creative Tim">
        <title>Four Arms Tech-Dashboard</title>
        <!-- Favicon -->
        <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <!-- Icons -->
        <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
        <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
        <!-- Page plugins -->
        <!-- Argon CSS -->
        <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
    </head>
    <body class=" d-flex justify-content-center align-items-center  bg-light">
        <div class="container">
        <div class="col-lg-5 col-md-8 mx-auto ">
            <div class="card bg-secondary shadow border-0">
                <div class="card-body px-lg-5 py-lg-5">
                    <div class="text-center text-muted mb-3">
                        <img class="mb-3" src="./assets/img/brand/logo.png" width='100%' height='auto' alt="" srcset="">
                        <h1 class="mt-3 text-warning">Admin Login</h1>
                    </div>



                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <input required class="form-control" name="email" placeholder="Email" type="email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input required class="form-control" name="password" placeholder="Password" type="password">
                    </div>
                </div>
                
                <div class="text-center">
                    <input type="submit" name="submit" placeholder="Login" class="btn btn-warning my-4"></input>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>



        <!-- Core -->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Optional JS -->
    <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
    <!-- Argon JS -->
    <script src="assets/js/argon.js?v=1.2.0"></script>
    </body>
</html>