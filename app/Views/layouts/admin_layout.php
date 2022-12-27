<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title ?> - Pengisian KRS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url() ?>/assets/NiceAdmin/assets/img/favicon.png" rel="icon">
  <link href="<?= base_url() ?>/assets/NiceAdmin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>/assets/NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/NiceAdmin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/NiceAdmin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/NiceAdmin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/NiceAdmin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/NiceAdmin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/NiceAdmin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>/assets/NiceAdmin/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Sistem KRS</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        

        

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <!-- <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> -->
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Admin</h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?= base_url('admin/logout')?>">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

 <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav " id="sidebar-nav">

      <li class="nav-item nav-side">
        <a class="nav-link collapsed" href="<?= base_url('/admin/dashboard') ?>">
          <i class="ri-map-pin-3-fill"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <!-- Nav Item - Pages Collapse Menu -->

      <li class="nav-item nav-side">
        <a class="nav-link collapsed" data-bs-target="#components-mahasiswa" data-bs-toggle="collapse" href="#">
          <i class="ri-file-list-2-fill"></i>
          <span>Data Mahasiswa</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-mahasiswa" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= base_url('/admin/mahasiswa') ?>" class="a ">
              <i class="ri-drizzle-fill"></i><span>List Mahasiswa</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('/admin/mahasiswa/tambah') ?>" class="a ">
              <i class="ri-drizzle-fill"></i><span>Tambah Mahasiswa</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item nav-side">
        <a class="nav-link collapsed" data-bs-target="#components-fakultas" data-bs-toggle="collapse" href="#">
          <i class="ri-file-list-3-fill"></i>
          <span>Data Fakultas</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-fakultas" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= base_url('/admin/fakultas') ?>" class="a ">
              <i class="ri-drizzle-fill"></i><span>List Fakultas</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('/admin/fakultas/tambah') ?>" class="a ">
              <i class="ri-drizzle-fill"></i><span>Tambah Fakultas</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item nav-side">
        <a class="nav-link collapsed" data-bs-target="#components-jurusan" data-bs-toggle="collapse" href="#">
          <i class="ri-file-list-fill"></i>
          <span>Data Jurusan</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-jurusan" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= base_url('/admin/jurusan') ?>" class="a ">
              <i class="ri-drizzle-fill"></i><span>List Jurusan</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('/admin/jurusan/tambah') ?>" class="a ">
              <i class="ri-drizzle-fill"></i><span>Tambah Jurusan</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item nav-side">
        <a class="nav-link collapsed" data-bs-target="#components-semester" data-bs-toggle="collapse" href="#">
          <i class="ri-file-list-2-fill"></i>
          <span>Data Semester</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-semester" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= base_url('/admin/semester') ?>" class="a ">
              <i class="ri-drizzle-fill"></i><span>List Semester</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('/admin/semester/tambah') ?>" class="a ">
              <i class="ri-drizzle-fill"></i><span>Tambah Semester</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item nav-side">
        <a class="nav-link collapsed" data-bs-target="#components-matkul" data-bs-toggle="collapse" href="#">
          <i class="ri-file-list-3-fill"></i>
          <span>Data Mata Kuliah</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-matkul" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= base_url('/admin/matkul') ?>" class="a ">
              <i class="ri-drizzle-fill"></i><span>List Mata Kuliah</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('/admin/matkul/tambah') ?>" class="a ">
              <i class="ri-drizzle-fill"></i><span>Tambah Mata Kuliah</span>
            </a>
          </li>
        </ul>
      </li>


      <!-- End Components Nav -->
    </ul>

  </aside>
  <!-- End Sidebar-->

  <?= $this->renderSection('content') ?>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>/assets/NiceAdmin/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?= base_url() ?>/assets/NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>/assets/NiceAdmin/assets/vendor/chart.js/chart.min.js"></script>
  <script src="<?= base_url() ?>/assets/NiceAdmin/assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?= base_url() ?>/assets/NiceAdmin/assets/vendor/quill/quill.min.js"></script>
  <script src="<?= base_url() ?>/assets/NiceAdmin/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?= base_url() ?>/assets/NiceAdmin/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?= base_url() ?>/assets/NiceAdmin/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>/assets/NiceAdmin/assets/js/main.js"></script>

  <script src="<?= base_url() ?>/assets/js/jquery.min.js"></script>
  <script src="<?= base_url() ?>/assets/js/main.js"></script>
</body>

</html>