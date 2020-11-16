<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Top Navigation</title>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="/" class="navbar-brand">
        <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light"><b>SIMKO</b></span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="homepage" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="kas" class="nav-link">Uang Kas Anggota</a>
          </li>
          <li class="nav-item">
            <a href="anggota" class="nav-link">Anggota</a>
          </li>
          <li class="nav-item">
            <a href="pendapatan" class="nav-link">Pendapatan Lain</a>
          </li>
          <li class="nav-item">
            <a href="pengeluaran" class="nav-link">Pengeluaran</a>
          </li>
        </ul>
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
          <img src="/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle">
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="profil" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Akun Profil
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Detail</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>Online</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
      </ul>
    </div>
  </nav>
 
  <div class="col-md align-content-md-between">

<!-- Profile Image -->
<div class="card card-primary card-outline">
  <div class="card-body box-profile">
    <div class="text-center">
      <img class="profile-user-img img-fluid img-circle" src="/dist/img/user1-128x128.jpg" alt="User profile picture">
    </div>

    <h3 class="profile-username text-center">Nina Mcintire</h3>

    <p class="text-muted text-center">Software Engineer</p>

    <ul class="list-group list-group-unbordered mb-3">
      <li class="list-group-item">
        <b>Followers</b> <a class="float-right">1,322</a>
      </li>
      <li class="list-group-item">
        <b>Following</b> <a class="float-right">543</a>
      </li>
      <li class="list-group-item">
        <b>Friends</b> <a class="float-right">13,287</a>
      </li>
    </ul>

    <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

<!-- About Me Box -->
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">About Me</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <strong><i class="fas fa-book mr-1"></i> Education</strong>

    <p class="text-muted">
      B.S. in Computer Science from the University of Tennessee at Knoxville
    </p>

    <hr>

    <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

    <p class="text-muted">Malibu, California</p>

    <hr>

    <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

    <p class="text-muted">
      <span class="tag tag-danger">UI Design</span>
      <span class="tag tag-success">Coding</span>
      <span class="tag tag-info">Javascript</span>
      <span class="tag tag-warning">PHP</span>
      <span class="tag tag-primary">Node.js</span>
    </p>

    <hr>

    <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
  
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>