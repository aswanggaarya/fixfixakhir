<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Agentiket.com - Print Tiket Pesawat</title>
  <link rel="icon" href="<?=base_url('assets/')?>img/logo.png" type="image/png">

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url('assets/'); ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/');?>css/sb-admin-2.css" rel="stylesheet">
  <link href="<?= base_url('assets/');?>css/datatables.css" rel="stylesheet">

</head>

<!-- <body    class="bg-gradient-primary"> -->
  <body id="page-top" class="bg-gradient-primary" >

  <!-- Page Wrapper -->
  <div id="wrapper">
        <div class="container-fluid">
          <div class="row">
            <!-- <div class="col-md-2"></div> -->
            <div class="col-md-12" >
              <div class="card">
                <div class="card-body">
                  <h1 class="text-center text-primary" style="font-size: 80px;"><b>AGENTIKET.COM</b></h1>

                  <hr>

                  <center>
                    <h4>Booking Code</h4>
                      <h1><b class="text-warning"><?= $detail->nomortiket?></b></h1>
                  </center>

                 <hr>
                  
                  <b class="text-success"  style="font-size: 30px;">Detail Pemesan</b><br><br>
                 <div class="row" style="font-size: 20px;">
                   <div class="col-md-6">
                     <p><b>Nama Pemesan  </b><br><?= $detail->namapemesan?></p>
                     <p><b>Email</b> <br><?= $detail->email?></p>
                   </div>
                   <div class="col-md-6">
                      <p><b>Alamat </b> <br> <?= $detail->alamat ?></p>
                   </div>
                 </div>

                 <hr>

                 <b class="text-success" style="font-size: 30px;">Detail Keberangkatan</b><br><br>

                  <div class="row" style="font-size: 20px;">
                   <div class="col-md-6">
                     <p><b>Rute</b> <br> <?= $detail->ruteawal?> <i class="fas fa-arrow-right" style="font-size: 13px;"></i> <?= $detail->ruteakhir?></p>

                   </div>
                   <div class="col-md-6">
                      <p><b>Maskapai</b> <br> <?= $detail->maskapai?></p>
                      <p><b>Durasi Perjalanan</b> <br> <?= $detail->jamberangkat?> <i class="fas fa-arrow-right" style="font-size: 13px;"></i> <?= $detail->jamtiba?></p>
                   </div>
                 </div>

                 <hr>
                  
                    <b class="text-success" style="font-size: 30px;">Payment Details</b><br><br>
                 <div class="row" style="font-size: 20px;">
                   <div class="col-md-6">
                     <p><b>Total Price</b> <br> Rp <?= number_format($detail->harga*$jml_penumpang,0,',','.')?></p>
                   </div>
                   <div class="col-md-6">
                      <p><b>Status</b> <br> <button class="btn btn-success">Lunas</button></p>
                   </div>
                 </div>

                </div>
              </div>
            </div>
          </div>
        </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/'); ?>js/sb-admin-2.js"></script>

  <script>
   window.print();
  </script>

</body>
  

</html>