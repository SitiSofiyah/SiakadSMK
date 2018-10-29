<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href= "<?php echo base_url ('assets/images/apple-icon.png') ?>">
  <link rel="icon" type="image/png" href="https://cdn2.iconfinder.com/data/icons/seo-web-optomization-ultimate-set/512/custom_settings-512.png"></link>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin Siakad
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href= "<?php echo base_url ('assets/css/material-dashboard.css?v=2.1.0') ?>" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url ('assets/demo/demo.css') ?>" rel="stylesheet" />
 
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange" data-background-color="white" data-image="<?php echo base_url ('assets/images/sidebar-1.jpg') ?>">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Administrator
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url('index.php/dashboard') ?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('index.php/data_guru') ?>">
              <i class="material-icons">assignment_ind</i>
              <p>Data Guru</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url('index.php/data_siswa') ?>">
              <i class="material-icons">account_box</i>
              <p>Data Siswa</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url('index.php/data_kelas') ?>">
              <i class="material-icons">class</i>
              <p>Data Kelas</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url('index.php/data_jurusan') ?>">
              <i class="material-icons">description</i>
              <p>Data Jurusan</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url('index.php/data_mapel') ?>">
              <i class="material-icons">assignment</i>
              <p>Data Mapel</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url('index.php/data_pengumuman') ?>">
              <i class="material-icons">speaker_notes</i>
              <p>Data Pengumuman</p>
            </a>
          </li>
          
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Data Guru</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            
            <ul class="navbar-nav">
              <li class="nav-item">
                
                </a>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a> -->
                
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                  <li><a href="<?php echo base_url('index.php/Auth_admin/logout') ?>">Logout</a></li>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title ">Tambah Data Guru</h4>
                </div>
                <div class="card-body">
                
                <?php echo form_open_multipart('data_guru/create'); ?>
                <?php echo validation_errors(); ?>
                  <div class="form-group">
                          <label class="bmd-label-floating">NIP</label>
                          <input type="text" class="form-control" name="nip">
                  </div>
                  <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" class="form-control" name="username">
                  </div>
                  <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="text" class="form-control" name="password">
                  </div>
                  <div class="form-group">
                          <label class="bmd-label-floating">Nama</label>
                          <input type="text" class="form-control" name="nama">
                  </div>
                  <div class="form-group">
                          <label class="bmd-label-floating">Tempat Lahir</label>
                          <input type="text" class="form-control" name="tempat">
                  </div>
                  <div class="form-group">
                          <label>Tanggal Lahir</label>
                          <input type="date" class="form-control" name="tanggalLahir">
                  </div>
                   <div class="form-group">
                          <label class="bmd-label-floating">Jenis Kelamin</label><br><br>
                          <input value="Perempuan"  type="radio" name="jenisKel" selected> Perempuan 
                          &nbsp; &nbsp; &nbsp;
                          <input value="Laki-laki" type="radio" name="jenisKel"> Laki-Laki
                           <!-- <select class="form-control" name="jenisKel">
                            <option value="Perempuan">Perempuan</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                          </select> -->
                  </div>
                  <div class="form-group">
                          <label class="bmd-label-floating">Alamat</label>
                          <input type="text" class="form-control" name="alamat">
                  </div>
                  <div class="form-group">
                          <label class="bmd-label-floating">Agama</label>
                           <select name="agama" class="form-control" name="agama">
                            <option value="Islam" >Islam</option>
                            <option value="Budha" >Budha</option>
                            <option value="Hindu" >Hindu</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Kong Hu Chu">Kong Hu Chu</option>
                          </select>
                  </div>
                  <div class="form-group">
                          <label class="bmd-label-floating">Status</label>
                          <input type="text" class="form-control" name="status">
                  </div>
                  <div class="form-group">
                          <label class="bmd-label-floating">Golongan</label>
                          <input type="text" class="form-control" name="gol">
                  </div>
                  <div class="form-group">
                          <label class="bmd-label-floating">Jabatan</label>
                          <input type="text" class="form-control" name="jabatan">
                  </div>
                  
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

                <?php echo form_close(); ?>
                  
                </div>
              </div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
</script>

            </div>

          
      <footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>www.smkparamitamojokerto.com</a></p> 
</footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="<?php echo base_url ('assets/js/core/jquery.min.js') ?>" type="text/javascript"></script>
  <script src="<?php echo base_url ('assets/js/core/popper.min.js') ?>" type="text/javascript"></script>
  <script src="<?php echo base_url ('assets/js/core/bootstrap-material-design.min.js') ?>" type="text/javascript"></script>
  <script src="<?php echo base_url ('assets/js/plugins/perfect-scrollbar.jquery.min.js') ?>"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="<?php echo base_url ('assets/js/plugins/chartist.min.js') ?>" ></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo base_url ('assets/js/plugins/bootstrap-notify.js') ?>"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url ('assets/js/material-dashboard.min.js?v=2.1.0') ?>" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src= "<?php echo base_url ('assets/demo/demo.js') ?>"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>