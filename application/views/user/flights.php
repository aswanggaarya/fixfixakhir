<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Agentiket.com - Pesawat</title>
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
    
    <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url('user/trains')?>">
              <img src="<?=base_url('assets/')?>img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
              Agentiket.com
          </a>

          <!-- Divider -->
          <hr class="sidebar-divider my-0">
          <!-- Divider -->
          <hr class="sidebar-divider">

          <!-- Heading -->
          <div class="sidebar-heading">
            Menu
          </div>

          <!-- Nav Item - Charts -->
          <li class="nav-item active">
            <a class="nav-link" href="<?=base_url('user/flights')?>">
              <i class="fas fa-plane"></i>
              <span>Pesawat</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('user/trains')?>">
              <i class="fas fa-subway"></i>
              <span>Kereta</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">

          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('auth/logout');?>" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt"></i>
              <span>Keluar</span>
            </a>
          </li>
          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>

        </ul>
    <!-- End of Sidebar -->

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
                  Riwayat Transaksi
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">November 13, 2019</div>
                    IDR 2.500.000 has been paid!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">November 14, 2019</div>
                    IDR 840.000 has been paid!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">November 16, 2019</div>
                    <b>You've unpaid bills.</b>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All</a>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('user/pagekonfirmasipes');?>"><small>Status Tiket Pesawat</small></a>
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
              <div class="card shadow mb-4">
                <div class="card-body">
                  <div class="chart-area">
                    
                    <form name="rute" class="" method="get" action="<?= base_url('user/listflight') ?>">
                      <div class="row">
                        <div class="col">
                          <fieldset>
                            <label for="basic-url" style="color: black;"><b>Dari</b></label>
                            <div class="field input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3"><i class="fas fa-plane-departure"></i></span>
                              </div>
                                <select class="form-control form-control-chosen" name="ruteawal">
                                  <option value="">-- Pilih Bandara --</option>
                                <?php                                
                                  foreach ($ruteawal as $row) {  
                                  echo "<option value='".$row->ruteawal."'>".$row->ruteawal."</option>";
                                  }
                                  echo"
                                    </select>"
                                ?>
                            </div>
                          </fieldset>
                        </div>
                        <div class="col">
                          <fieldset>
                            <label for="basic-url" style="color: black;"><b>Ke</b></label>
                            <div class="field input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3"><i class="fas fa-plane-arrival"></i></span>
                              </div>
                              <select class="form-control form-control-chosen" name="ruteakhir">
                                  <option value="">-- Pilih Bandara --</option>
                                <?php                                
                                  foreach ($ruteakhir as $row) {  
                                  echo "<option value='".$row->ruteakhir."'>".$row->ruteakhir."</option>";
                                  }
                                  echo"
                                    </select>"
                                ?>
                              </select>
                            </div>
                          </fieldset>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col">
                          <fieldset>
                            <label for="basic-url" style="color: black;"><b>Tanggal Berangkat</b></label>
                            <div class="field input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3"><i class="far fa-calendar-alt"></i></span>
                              </div>
                              <input type="date" name="date" value="" min="<?php echo date('Y-m-d') ?>" class="form-control" id="basic-url" required>
                            </div>
                          </fieldset>
                        </div>
                        <div class="col">
                          <fieldset>
                            <label for="basic-url" style="color: black;"><b>Jumlah Penumpang</b></label>
                            <div class="field input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3"><i class="fas fa-user-alt"></i></span>
                              </div>
                              <input type="number" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="penumpang" value="1" min="1" max="3">
                            </div>
                          </fieldset>
                        </div>
                      </div>
                      <div class="actions">
                        <input type="submit" class="btnadd btn btn-warning" name="btnadd" value="Selanjutnya" style="margin-top: 2%; margin-bottom: 2%;">
                      </div>
                    </form>
              

                  </div>
                </div>
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
  <script type="text/javascript">
    $('.form-control-chosen').chosen();
  </script>

</body>

</html>
