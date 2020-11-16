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
 <p> </p>
<br> <br>
 <div class="row justify-content-center">
  <div class="column">
  <div class="card" style="background-color:#00AAAA; width: 20rem;">
              <div class="card-body">
              <h5 class="card-title"style="color:white">Anggota Entrepreuner</h5>
                <p class="card-text"style="color:white">
                  50 Anggota
                </p>
              </div>
            </div>
  </div>&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="column">
  <div class="card" style="background-color:#00AAAA; width: 20rem;">
              <div class="card-body">
              <h5 class="card-title"style="color:white">Anggota HRD</h5>
                <p class="card-text"style="color:white">
                  50 Anggota
                </p>
              </div>
              
            </div>
  </div>&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="column">
  <div class="card" style="background-color:#00AAAA; width: 20rem;">
              <div class="card-body">
              <h5 class="card-title"style="color:white">Total Jumlah Anggota</h5>
                <p class="card-text"style="color:white">
                  100 Anggota
                </p>
              </div>
            </div>
  </div>
</div>&nbsp;&nbsp;&nbsp;&nbsp;
            
            

            



  <div class="row">
          <div class="col-12">
            <div class="card">
            
          
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
   <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <button type="button" class="btn btn-primary " style="float: right;"data-toggle="modal" data-target="#modal-primary2">+Add Anggota Baru</button>
    </ul>
  </nav>


              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Nama Anggota</th>
                      <th>Nim</th>
                      <th>Angkatan</th>
                      <th>Departemen</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Ahmad Purnawan</td>
                      <td>1202184567</td>
                      <td>2016</td>
                      <td><span class="tag tag-success">Entrepreuner</span></td>
                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">Edit</button></td>
                      <td><a class="nav-link" href="#" aria-expanded="false"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <tr>
                    <td>Ahmad Purnawan</td>
                      <td>1202184567</td>
                      <td>2016</td>
                      <td><span class="tag tag-success">Entrepreuner</span></td>
                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">Edit</button></td>
                      <td><a class="nav-link" href="#" aria-expanded="false"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <tr>
                    <td>Ahmad Purnawan</td>
                      <td>1202184567</td>
                      <td>2016</td>
                      <td><span class="tag tag-success">Entrepreuner</span></td>
                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">Edit</button></td>
                      <td><a class="nav-link" href="#" aria-expanded="false"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <tr>
                    <td>Ahmad Purnawan</td>
                      <td>1202184567</td>
                      <td>2016</td>
                      <td><span class="tag tag-success">Entrepreuner</span></td>
                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">Edit</button></td>
                      <td><a class="nav-link" href="#" aria-expanded="false"><i class="fa fa-trash"></i></a></td>
                    </tr>
                  </tbody>
                </table>
                
              </div>
              
              <!-- /.card-body -->
            </div>
            
            <!-- /.card -->
          </div>
        </div>
        <div class="modal fade" id="modal-primary">
        <div class="modal-dialog">
          <div class="modal-content bg-light">
            <div class="modal-header">
              <h4 class="modal-title">Edit</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
            <div class="card-primary">
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1" style="color:black">Nama Anggota</label>
                    <input type="Nama" class="form-control" id="exampleInputNama" placeholder="Nama Anggota">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1"style="color:black">Nim</label>
                    <input type="Nim" class="form-control" id="exampleInputNim" placeholder="Nim">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1" style="color:black">Angkatan</label>
                    <p> </p>
   <input type="radio" id="qq[]" name="nama_radio"/>&nbsp; 2016 &nbsp;
   <input type="radio" id="qq[]" name="nama_radio"/>&nbsp; 2017 &nbsp;
   <input type="radio" id="qq[]" name="nama_radio"/>&nbsp; 2018 &nbsp;
   <input type="radio" id="qq[]" name="nama_radio"/>&nbsp; 2019 &nbsp;
   <input type="radio" id="qq[]" name="nama_radio"/>&nbsp; 2020 &nbsp;
                  </div>
                  <div class="form-group">
                  <label for="exampleInputPassword1">Departemen</label>
                    <select class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
    <option selected="">Choose...</option>
    <option value="1">Entrepreuner</option>
    <option value="2">Manajemen</option>
    <option value="3">Pemrograman</option>
  </select>
                  </div>                  
                </div>
                
              </form>
            </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-info" data-dismiss="modal"style="color:black">Close</button>
              <button type="button" class="btn btn-outline-info"style="color:black">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <div class="modal fade" id="modal-primary2">
        <div class="modal-dialog">
          <div class="modal-content bg-light">
            <div class="modal-header">
              <h4 class="modal-title">input</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
            <div class="card-primary">
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1" style="color:black">Nama Anggota</label>
                    <input type="Nama" class="form-control" id="exampleInputNama" placeholder="Nama Anggota">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1"style="color:black">Nim</label>
                    <input type="Nim" class="form-control" id="exampleInputNim" placeholder="Nim">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1" style="color:black">Angkatan</label>
                    <p> </p>
   <input type="radio" id="qq[]" name="nama_radio"/>&nbsp; 2016 &nbsp;
   <input type="radio" id="qq[]" name="nama_radio"/>&nbsp; 2017 &nbsp;
   <input type="radio" id="qq[]" name="nama_radio"/>&nbsp; 2018 &nbsp;
   <input type="radio" id="qq[]" name="nama_radio"/>&nbsp; 2019 &nbsp;
   <input type="radio" id="qq[]" name="nama_radio"/>&nbsp; 2020 &nbsp;
                  </div>
                  <div class="form-group">
                  <label for="exampleInputPassword1">Departemen</label>
                    <select class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
    <option selected="">Choose...</option>
    <option value="1">Entrepreuner</option>
    <option value="2">HRD</option>
    <option value="3">Pemrograman</option>
  </select>
                  </div>                  
                </div>
                
              </form>
            </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-info" data-dismiss="modal"style="color:black">Close</button>
              <button type="button" class="btn btn-outline-info"style="color:black">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
