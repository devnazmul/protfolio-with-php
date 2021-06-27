
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

<body >
  <!-- Sidenav -->
  <nav style="z-index: 100000;" class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="assets/img/brand/logo.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="./index.php">
                <i class="ni ni-single-02 text-blue"></i>
                <span class="nav-link-text">Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./protfolio.php">
                <i class="ni ni-books text-orange"></i>
                <span class="nav-link-text">Protfolio</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./education.php">
                <i class="ni ni-hat-3 text-purple"></i>
                <span class="nav-link-text">Education</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./experience.php">
                <i class="ni ni ni-ruler-pencil text-yellow"></i>
                <span class="nav-link-text">Work Experience</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./services.php">
                <i class="ni ni-settings text-pink"></i>
                <span class="nav-link-text">Services</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./stats.php">
                <i class="ni ni-sound-wave text-green"></i>
                <span class="nav-link-text">Stats</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./message.php">
                <i class="ni ni-chat-round text-gray"></i>
                <span class="nav-link-text">F&Q</span>
              </a>
            </li>
            <li class="nav-item">
              <a class=" nav-link" href="./logout.php">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">LogOut</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner" style="z-index: 100001;">
                  <i class="sidenav-toggler-line" style="background:black"></i>
                  <i class="sidenav-toggler-line" style="background:black"></i>
                  <i class="sidenav-toggler-line" style="background:black"></i>
                </div>
              </div>
            </li>
                       
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
<!-- =================PUT YOUR PROFILE PIC HERE ===================== -->
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="assets/img/theme/profile.jpg">
                  </span>

<!-- =================PUT YOUR NAME HERE ===================== -->
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Md Nazmul Islam</span>
                  </div>

                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="./profile.php" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="./logout.php" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->











    <!-- Page content -->
    <div class="container-fluid mt--6">

      <div class="row mb-5">

        <?php
          if ($page == 'dashboard') {
            include('./theme_parts/dashboard.php');
          } elseif ($page == 'profile_edit') {
            include('./theme_parts/profile_edit.php');
          } elseif ($page == 'protfolio') {
            include('./theme_parts/protfolio.php');
          } elseif ($page == 'protfolio_edit') {
            include('./theme_parts/protfolio_edit.php');
          } elseif ($page == 'education') {
            include('./theme_parts/education.php');
          } elseif ($page == 'education_edit') {
            include('./theme_parts/education_edit.php');
          } elseif ($page == 'experience') {
            include('./theme_parts/experience.php');
          } elseif ($page == 'experience_edit') {
            include('./theme_parts/experience_edit.php');
          } elseif ($page == 'services') {
            include('./theme_parts/services.php');
          } elseif ($page == 'services_edit') {
            include('./theme_parts/services_edit.php');
          } elseif ($page == 'stats') {
            include('./theme_parts/stats.php');
          } elseif ($page == 'message') {
            include('./theme_parts/message.php');
          }else {
            include('./theme_parts/404.php');
          }
          
        ?>
      </div>













      <!-- Footer -->
      <footer class="footer" style="position: fixed; bottom:0; width:100%; height:50px; display:flex; align-items:center">
        <div class="row align-items-center justify-content-lg-between" style="width:100%;">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>




  <!-- Argon Scripts -->
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
