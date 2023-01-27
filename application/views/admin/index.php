<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        .imgcenter {
              display: block;
              margin: 0px auto;
              text-align: center;
              width: 400px;
              height: 300px;
            }
    </style>
</head>
<body>
<h1 align="Center">Selamat Datang</h1><br>
<h2 align="Center">Sistem Informasi List Document</h2><br>
<tr>
<tr>
<tr>
<tr>
<tr>
<tr>
<tr>
<tr>
                    <div class="row">
                          <!-- ============================================================== -->
                          <!-- four widgets   -->
                          <!-- ============================================================== -->
                          <!-- ============================================================== -->
                          <!-- total views   -->
                          <!-- ============================================================== -->
                          <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="card">
                                  <div class="card-body">
                                      <div class="d-inline-block">
                                            <?php
                                                // $i = 1;
                                                // foreach ($document as $key => $value) {
                                            ?>
                                          <h5 class="text-muted">Jumlah Dokumen</h5>
                                          <h2 class="mb-0"><?php// echo $value['total']; ?></h2>
                                          <a href="<?php echo base_url().'menu_admin/data_document'?>">Lihat Detail</a>
                                            <?php
                                                // $i++;
                                                // }
                                            ?>
                                      </div>
                                      <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                          <i class="fa fa-eye fa-fw fa-sm text-info"></i>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- ============================================================== -->
                          <!-- end total views   -->
                          <!-- ============================================================== -->
                          <!-- ============================================================== -->
                          <!-- total followers   -->
                          <!-- ============================================================== -->
                          <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="card">
                                  <div class="card-body">
                                      <div class="d-inline-block">
                                            <?php
                                                // $i = 1;
                                                // foreach ($doc as $key => $value) {
                                            ?>
                                          <h5 class="text-muted">No Expired Doc</h5>
                                          <h2 class="mb-0"><?php //echo $value['total']; ?></h2>
                                          <a href="<?php echo base_url().'menu_admin/data_no_exp'?>">Lihat Detail</a>
                                            <?php
                                                // $i++;
                                                // }
                                            ?>
                                      </div>
                                      <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                                          <i class="fa fa-user fa-fw fa-sm text-primary"></i>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="card">
                                  <div class="card-body">
                                      <div class="d-inline-block">
                                            <?php
                                                // $i = 1;
                                                // foreach ($doc1 as $key => $value) {
                                            ?>
                                          <h5 class="text-muted">Expired Doc</h5>
                                          <h2 class="mb-0"><?php// echo $value['total']; ?></h2>
                                          <a href="<?php echo base_url().'menu_admin/data_exp'?>">Lihat Detail</a>
                                            <?php
                                                // $i++;
                                                // }
                                            ?>
                                      </div>
                                      <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                                          <i class="fa fa-user fa-fw fa-sm text-primary"></i>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- ============================================================== -->
                          <!-- end total followers   -->
                          <!-- ============================================================== -->
                          <!-- ============================================================== -->
                          <!-- partnerships   -->
                          <!-- ============================================================== -->
                          <!-- ============================================================== -->
                          <!-- end total earned   -->
                          <!-- ============================================================== -->
                      </div>


</body>
</html>