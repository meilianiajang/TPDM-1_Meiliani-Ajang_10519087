            <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Data Hasil Pemeriksaaan</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"> Data Hasil Pemeriksaan</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Data Hasil Pemeriksaan</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr align="center">
                                                <th>No</th>
                                                <th>Gender</th>
                                                <th>Woody</th>
                                                <th>Spicy</th>
                                                <th>Floral</th>
                                                <th>Gourmand</th>
                                                <th>Akuatik</th>
                                                <th>Fruty</th>
                                                <th>Hasil</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $i = 1;
                                                foreach ($mcl as $key => $value) {
                                            ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $value['gender']; ?></td>
                                                <td><?php echo $value['woody']; ?></td>
                                                <td><?php echo $value['spicy']; ?></td>
                                                <td><?php echo $value['fiorat']; ?></td>
                                                <td><?php echo $value['gourmande']; ?></td>
                                                <td><?php echo $value['akuatik']; ?></td>
                                                <td><?php echo $value['fruty']; ?></td>
                                            <?php
                                                if ($value['total_nilai']<15) {
                                            ?>
                                                <td>Ciri aroma favorit  kmu lebih cenderung  ke feminim</td>
                                            <?php
                                                }else{
                                            ?>
                                                <td>Ciri aroma favorit  kmu lebih cenderung  ke maskulin</td>
                                            <?php    
                                                }
                                            ?>
                                            </tr>
                                            <?php
                                                $i++;
                                                }
                                            ?>
                                        </tbody>
                                         <tfoot>
                                            <tr align="center">
                                                <th>No</th>
                                                <th>Gender</th>
                                                <th>Woody</th>
                                                <th>Spicy</th>
                                                <th>Floral</th>
                                                <th>Gourmand</th>
                                                <th>Akuatik</th>
                                                <th>Fruty</th>
                                                <th>Hasil</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>  