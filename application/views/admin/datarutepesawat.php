<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - Entry Data</title>
  <link rel="icon" href="<?=base_url('assets/')?>img/logo.png" type="image/png">

  <!-- Custom fonts for this template-->
  <link href="<?=base_url('assets/')?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this form-->  
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/')?>css/style.css">

  <!-- Custom styles for this template-->
  <link href="<?=base_url('assets/')?>css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom scripts for form-->
  <script src="https://code.jquery.com/jquery-2.1.0.js" integrity="sha256-D6d1KSapXjq2tfZ6Ie9AYozkRHyB3fT2ys9mO2+4Wvc=" crossorigin="anonymous"></script>
  <script src="<?=base_url('assets/')?>js/jquery-3.3.1.js"></script>
  <script src="<?=base_url('assets/')?>js/jquery-3.3.1.min.js"></script>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    
    <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url('admin/')?>">
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

          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item active">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#colpetugas" aria-expanded="true" aria-controls="colpetugas">
              <i class="fas fa-save"></i>
              <span>Data</span>
            </a>
            <div id="colpetugas" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?=base_url('admin/datapetugas')?>">Petugas</a>
                <a class="collapse-item" href="<?=base_url('admin/datarutekereta')?>">Rute Kereta</a>
                <a class="collapse-item active" href="<?=base_url('admin/datarutepesawat')?>">Rute Pesawat</a>
                <a class="collapse-item" href="<?=base_url('admin/datauser')?>">User</a>
              </div>
            </div>
          </li>

          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#colpemesanan" aria-expanded="true" aria-controls="colpemesanan">
              <i class="fas fa-shopping-cart"></i>
              <span>Pemesanan</span>
            </a>
            <div id="colpemesanan" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?=base_url('admin/pmsnkereta')?>">Kereta</a>
                <a class="collapse-item" href="<?=base_url('admin/pmsnpesawat')?>">Pesawat</a>
              </div>
            </div>
          </li>

          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#colpembayaran" aria-expanded="true" aria-controls="colpembayaran">
              <i class="fas fa-money-bill-wave"></i>
              <span>Pembayaran</span>
            </a>
            <div id="colpembayaran" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?=base_url('admin/pmyrnkereta')?>">Kereta</a>
                <a class="collapse-item" href="<?=base_url('admin/pmyrnpesawat')?>">Pesawat</a>
              </div>
            </div>
          </li>

          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#colkonfirmasi" aria-expanded="true" aria-controls="colkonfirmasi">
              <i class="fas fa-check"></i>
              <span>Konfirmasi</span>
            </a>
            <div id="colkonfirmasi" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?=base_url('admin/pembayaranker')?>">Pembayaran Kereta</a>
                <a class="collapse-item" href="<?=base_url('admin/pembayaranpes')?>">Pembayaran Pesawat</a>
              </div>
            </div>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">

          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('admin/logout');?>" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt"></i>
              <span>Logout</span>
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

            
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php foreach ($petugas as $p) {?>
                   <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $p->namapetugas ?></span>
                <?php }?>
               
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  MyProfile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?=base_url('admin/logout');?>" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="row">

            <div class="col-xl-12 col-lg-8">

              <!-- Area Chart -->
                <div class="card-body">
                  <div class="chart-area">
                    
                    <h3>Data Rute Pesawat</h3>
                    <button type="button" class="btn btn-primary" style="margin-bottom: 2%;" data-toggle="modal" data-target="#adddatapesawat">Tambah Data</button>
                    <table class="table" style="margin-left: -5%; width: 180vh;">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Rute Awal</th>
                          <th scope="col">Rute Akhir</th>
                          <th scope="col">Berangkat</th>
                          <th scope="col">Tiba</th>
                          <th scope="col">Maskapai</th>
                          <th scope="col">Harga</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <?php 
                        $no = 1;
                        foreach($datarutepesawat as $k){ 
                        ?>
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $k->ruteawal ?></td>
                          <td><?php echo $k->ruteakhir ?></td>
                          <td><?php echo $k->jamberangkat ?></td>
                          <td><?php echo $k->jamtiba ?></td>
                          <td><?php echo $k->maskapai ?></td>
                          <td><?php echo $k->harga ?></td>
                          <td>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#updatedatapesawat<?php echo $k->idrutepesawat ?>">Ubah</button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deletedatapesawat<?php echo $k->idrutepesawat ?>">Hapus</button>
                          </td>
                        </tr>
                      <?php } ?>
                    </table>

                  </div>
                </div>

                <!-- Modal Tambah Pesawat -->
                <div class="modal fade" id="adddatapesawat" tabindex="-1" role="dialog" aria-labelledby="adddatapesawatLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="adddatapesawatLabel" style="color: black;">Tambah Data Pesawat</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      
                      <form action="<?php echo base_url(). 'admin/tambahpesawat'; ?>" method="post" id="form-barang">
                        <div class="modal-body">
                          <div class="form-group">
                            <p style="color: black; margin-bottom: -0.3%;"><b>Rute Awal</b></p>
                            <input type="text" class="form-control" id="ruteawal" name="ruteawal" value="<?= set_value('ruteawal'); ?>">
                            <?= form_error('ruteawal', '<small class="text-danger pl-3">', '</small>'); ?>
                          </div>
                          <div class="form-group">
                            <p style="color: black; margin-bottom: -0.3%;"><b>Rute Akhir</b></p>
                            <input type="text" class="form-control" id="ruteakhir" name="ruteakhir" value="<?= set_value('ruteakhir'); ?>">
                            <?= form_error('ruteakhir', '<small class="text-danger pl-3">', '</small>'); ?>
                          </div>
                          <div class="form-group">
                            <p style="color: black; margin-bottom: -0.3%;"><b>Jam Berangkat</b></p>
                            <input type="time" class="form-control" id="jamberangkat" name="jamberangkat" value="<?= set_value('jamberangkat'); ?>">
                            <?= form_error('jamberangkat', '<small class="text-danger pl-3">', '</small>'); ?>
                          </div>
                          <div class="form-group">
                            <p style="color: black; margin-bottom: -0.3%;"><b>Jam Tiba</b></p>
                            <input type="time" class="form-control" id="jamtiba" name="jamtiba" value="<?= set_value('jamtiba'); ?>">
                            <?= form_error('jamtiba', '<small class="text-danger pl-3">', '</small>'); ?>
                          </div>
                          <div class="form-group">
                            <p style="color: black; margin-bottom: -0.3%;"><b>Maskapai</b></p>
                            <input type="text" class="form-control" id="maskapai" name="maskapai" value="<?= set_value('maskapai'); ?>">
                            <?= form_error('maskapai', '<small class="text-danger pl-3">', '</small>'); ?>
                          </div>
                          <div class="form-group">
                            <p style="color: black; margin-bottom: -0.3%;"><b>Harga</b></p>
                            <input type="number" class="form-control" id="harga" name="harga" value="<?= set_value('harga'); ?>">
                            <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                          <input class="btn btn-success" type="submit" value="Tambah">
                        </div>
                        </td>
                        </div>
                      </form>
                      
                    </div>
                  </div>
                </div>

                <!-- Modal Hapus Pesawat -->
                <?php foreach($datarutepesawat as $k){ ?>
                  <div class="modal fade" id="deletedatapesawat<?php echo $k->idrutepesawat ?>" tabindex="-1" role="dialog" aria-labelledby="adddatapesawatLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="adddatapesawatLabel" style="color: black;">Hapus Data Rute Pesawat</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        
                          <form action="<?php echo base_url().'admin/hapuspesawat'?>" method="post">
                            <div class="modal-body">
                                <p>Anda yakin ingin menghapus  <b><?php echo $k->ruteawal;?></b> menuju <b><?php echo $k->ruteakhir;?></b>?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                <?php echo anchor('admin/hapuspesawat/'.$k->idrutepesawat,'<button type="button" class="btn btn-danger">Hapus</button>'); ?>
                            </div>
                          </form>
                        
                      </div>
                    </div>
                  </div>
                <?php } ?>

                <!-- Modal Update Pesawat -->
                <?php foreach($datarutepesawat as $k){ ?>
                  <div class="modal fade" id="updatedatapesawat<?php echo $k->idrutepesawat ?>" tabindex="-1" role="dialog" aria-labelledby="updatedatapesawatLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="updatedatapesawatLabel" style="color: black;">Ubah Data Rute Pesawat</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                          
                          <form action="<?php echo base_url(). 'admin/updatepesawat'; ?>" method="post">
                            <div class="modal-body">
                              <div class="form-group">
                                <p style="color: black; margin-bottom: -0.3%;"><b>Rute Awal</b></p>
                                <input type="hidden" class="form-control" id="idrutepesawat" name="idrutepesawat" value="<?php echo $k->idrutepesawat ?>">
                                <input type="text" class="form-control" id="ruteawal" name="ruteawal" value="<?php echo $k->ruteawal ?>">
                              </div>
                              <div class="form-group">
                                <p style="color: black; margin-bottom: -0.3%;"><b>Rute Akhir</b></p>
                                <input type="text" class="form-control" id="ruteakhir" name="ruteakhir" value="<?php echo $k->ruteakhir ?>">
                              </div>
                              <div class="form-group">
                                <p style="color: black; margin-bottom: -0.3%;"><b>Berangkat</b></p>
                                <input type="time" class="form-control" id="jamberangkat" name="jamberangkat" value="<?php echo $k->jamberangkat ?>">
                              </div>
                              <div class="form-group">
                                <p style="color: black; margin-bottom: -0.3%;"><b>Tiba</b></p>
                                <input type="time" class="form-control" id="jamtiba" name="jamtiba" value="<?php echo $k->jamtiba ?>">
                              </div>
                              <div class="form-group">
                                <p style="color: black; margin-bottom: -0.3%;"><b>Rute Akhir</b></p>
                                <input type="text" class="form-control" id="maskapai" name="maskapai" value="<?php echo $k->maskapai ?>">
                              </div>
                              <div class="form-group">
                                <p style="color: black; margin-bottom: -0.3%;"><b>Harga</b></p>
                                <input type="number" class="form-control" id="harga" name="harga" value="<?php echo $k->harga ?>">
                              </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                <input class="btn btn-success" type="submit" value="Ubah">
                            </div>
                          </form>

                      </div>
                    </div>
                  </div>
                <?php } ?>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <!-- <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer> -->
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
          <a class="btn btn-primary" href="<?=base_url('admin/logout');?>">Logout</a>
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

</body>

</html>
