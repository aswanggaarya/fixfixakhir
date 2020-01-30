<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Agentiket.com - Kereta</title>
  <link rel="icon" href="<?=base_url('assets/')?>img/logo.png" type="image/png">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" href="<?=base_url('assets/')?>css/component-chosen.css">
  

  <!-- Custom fonts for this template-->
  <link href="<?=base_url('assets/')?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this form-->  
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/')?>css/style.css">

  <!-- Custom styles for this template-->
  <link href="<?=base_url('assets/')?>css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom scripts for form-->
  <script src="<?=base_url('assets/')?>js/jquery-3.3.1.js"></script>
  <script src="<?=base_url('assets/')?>js/jquery-3.3.1.min.js"></script>

  

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <nav class="navbar navbar-light">
            <img src="<?=base_url('assets/')?>img/logo.png" width="30" height="30" class="d-inline-block align-top" href="<?=base_url('user/trains')?>">
            <a class="navbar-brand" href="<?=base_url('user/trains')?>" style="color: #434343; margin-top: 10%; font-size: 16px;"><p><b>AGENTIKET.COM</b></p></a>
          </nav>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-clipboard-list"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('user/pagekonfirmasiker');?>"><small>Status Tiket Kereta</small></a>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['namauser']; ?></span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?=base_url('auth/logout');?>" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Keluar
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="row">

            <div class="col-xl-8 col-lg-7">

              <!-- Area Chart -->
              <form action="<?= base_url('user/pesankereta'); ?>" method="post">
                <input type="hidden" name="penumpang" value="<?= $_GET['penumpang'] ?>">
                <input type="hidden" name="idrutekereta" value="<?= $idrutekereta ?>">
                <input type="hidden" name="harga" value="<?= $info->harga ?>">

                <!-- Form Pemesan -->

                <div class="card shadow mb-4">
                  <div class="card-body">
                    <div class="form-grup">
                      <b><label>Detail Kontak</label></b>
                    </div>

                    <div class="row">
                      <div class="col" style="margin-top: 1%;">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="namapemesan" required>
                      </div>
                      <div class="col" style="margin-top: 1%;">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" required>
                      </div>
                    </div>

                    <div class="form-grup" style="margin-top: 1%;">
                      <label>Alamat</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat" required></textarea>
                    </div>
                  </div>
                </div>
                <?php  
                  $jmlpenumpang = $_GET['penumpang'];
                  $no = 1;
                  for ($i=1; $i <= $jmlpenumpang ; $i++) { 
                ?>        
                  <div class="card shadow mb-4">
                    <div class="card-body">
                      <div class="form-grup">
                        <b><label>Penumpang <?php echo $no++; ?></label></b>
                      </div>

                      <div class="form-grup">
                        <label style="color: orange;">No. Identitas dari KTP/passport/SIM</label><br>
                        <label>No. Identitas</label>
                        <input type="text" class="form-control" name="noidentitas<?= $i ?>" required>
                      </div> 

                      <div class="form-grup" style="margin-top: 1%;">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="namapenumpang<?= $i ?>" required>
                      </div>

                      <div class="row">
                        <div class="col" style="margin-top: 1%;">
                          <label>Gerbong</label>
                          <select class="custom-select" name="gerbong<?= $i ?>" id="inputGroupSelect01">
                            <option selected>-- Pilih Gerbong --</option>
                            <option value="1">Gerbong 1</option>
                            <option value="2">Gerbong 2</option>
                            <option value="3">Gerbong 3</option>
                          </select>
                        </div>
                        <div class="col" style="margin-top: 1%;">
                          <label>Kursi</label>
                          <input type="text" class="form-control" name="kursi<?= $i ?>" placeholder="Contoh '1A'" required>
                        </div>
                      </div>

                    </div>
                  </div>
                <?php } ?>
                  <button type="submit" class="btn btn-warning" style="margin-bottom: 2%; width: 16%;">Lanjutkan</button>    
              </form>

            </div>
            <div class="col-xl-4">

              <div class="card shadow">
                <div class="card" style="width: 100%;">
                  <div class="card-header">
                    <p>Dari</p>
                    <p><b><?= $info->ruteawal ?></b></p>
                    <p>Menuju</p>
                    <p><b><?= $info->ruteakhir ?></b></p>  
                  </div>
                  <div class="card-body">
                    <p>Berangkat • <?php $date = $_GET['date']; echo "<b>".date('d F Y', strtotime($date))."</b>";?> </p>
                    <p>Kereta • <b><?= $info->kereta ?></b></p>
                  </div>
                  <div class="card-footer card-header">
                    <p style="margin-bottom: -0.5%;">Total Harga dari <b><?= $jmlpenumpang ?> Orang</b></p>
                  </div>
                  <div class="card-body text-right">
                    <b style="color: orange;">Rp <?php echo number_format($info->harga*$jmlpenumpang , 0,',','.') ?></b>
                  </div>
                </div>

              </div>
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="<?=base_url('assets/')?>img/gerbong1.png" class="d-block w-100" alt="Gerbong 1">
                  </div>
                  <div class="carousel-item">
                    <img src="<?=base_url('assets/')?>img/gerbong2.png" class="d-block w-100" alt="Gerbong 2">
                  </div>
                  <div class="carousel-item">
                    <img src="<?=base_url('assets/')?>img/gerbong3.png" class="d-block w-100" alt="Gerbong 3">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>  
              
            </div>
            
          </div>
          

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; AGENTIKET.COM 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?=base_url('auth/logout');?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url('assets/')?>vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url('assets/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?=base_url('assets/')?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?=base_url('assets/')?>js/sb-admin-2.min.js"></script>
  <script src="<?=base_url('assets/')?>js/chosen.jquery.min.js"></script>

</body>

</html>
