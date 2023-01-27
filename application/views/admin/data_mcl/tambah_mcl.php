                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">Form Tambah Data MCL</h2>
                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="<?php echo base_url().'menu_admin/index'?>" class="breadcrumb-link">Tambah Data</a></li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?= $this->session->flashdata('Add'); ?>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Form Pengisian</h5>
                                    <div class="card-body">
                                        <form action="<?php echo base_url().'menu_admin/insert_data_mcl'?>" enctype="multipart/form-data" method="post" role="form">
                                            <div class="form-group">
                                                <label for="inputText3" name ="NIK" class="col-form-label">Gender</label>
                                                <select name="gender" required class="form-control">
                                                    <option value=" "> </option>
                                                    <option value="Laki - Laki">Laki - Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" name ="NIK" class="col-form-label">Woody</label>
                                                <select name="woody" required class="form-control">
                                                    <option value=" "> </option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" name ="NIK" class="col-form-label">Spicy</label>
                                                <select name="spicy" required class="form-control">
                                                    <option value=" "> </option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" name ="NIK" class="col-form-label">Floral</label>
                                                <select name="fiorat" required class="form-control">
                                                    <option value=" "> </option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" name ="NIK" class="col-form-label">Gourmand</label>
                                                <select name="gourmande" required class="form-control">
                                                    <option value=" "> </option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" name ="NIK" class="col-form-label">Akuatik</label>
                                                <select name="akuatik" required class="form-control">
                                                    <option value=" "> </option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" name ="NIK" class="col-form-label">Fruty</label>
                                                <select name="fruty" required class="form-control">
                                                    <option value=" "> </option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Predisksi Aromamu</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>