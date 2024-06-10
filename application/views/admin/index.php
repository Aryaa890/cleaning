                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Order Masuk</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $count3 ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Order Siap Diambil</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $count2 ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Order Dikerjakan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $count1 ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Laporan Selesai</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $count ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="sidebar-divider"> <!-- row table-->
                    <div class="row">
                        <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
                            <div class="page-header"> <span class="fas fa-users text-primary mt-2 "> Data Anggota</span> <a class="text-danger" href="<?php echo base_url('admin/data_user'); ?>"><i class="fas fa-search mt-2 float-right"> Tampilkan</i></a> </div>
                            <table class="table mt-3">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Anggota</th>
                                        <th>Email</th>
                                        <th>Role ID</th>
                                    </tr>
                                </thead>
                                <tbody> <?php $i = 1;
                                        foreach ($data_user as $a) { ?> <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $a['nama']; ?></td>
                                            <td><?= $a['email']; ?></td>
                                            <td><?= $a['role_id']; ?></td>
                                        </tr> <?php } ?> </tbody>
                            </table>
                        </div>
                        <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
                            <div class="page-header"> <span class="fas fa-book text-warning mt-2"> Orderan Masuk</span> <a href="<?= base_url('order'); ?>"><i class="fas fa-search text-primary mt-2 float-right">
                                        Tampilkan</i></a> </div>
                            <div class="table-responsive">
                                <table class="table mt-3" id="table-datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tanggal</th>
                                            <th>Nama</th>
                                            <th>No Handphone</th>
                                            <th>Alamat</th>
                                            <th>Total Harga</th>
                                            <th>Komen</th>
                                        </tr>
                                    </thead>
                                    <tbody> <?php $i = 1;
                                            foreach ($order_masuk as $b) { ?> <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $b['tanggal']; ?></td>
                                                <td><?= $b['nama']; ?></td>
                                                <td><?= $b['no_handphone']; ?></td>
                                                <td><?= $b['alamat']; ?></td>
                                                <td><?= $b['id_layanan']; ?></td>
                                                <td><?= $b['komen']; ?></td>
                                            </tr> <?php } ?> </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end of row table-->
                    </div> <!-- /.container-fluid -->
                    </div> <!-- End of Main Content -->