<!-- Begin Page Content -->
<div class="container-fluid">
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Move Data Example</title>
        <!-- Include Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- Include jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Include Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>

    <body>
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><?= $title;  ?></h1>

        <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
        <?php endif; ?>
        <?= $this->session->flashdata('message'); ?>

        <div class="row">
            <div class="col-lg">


                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NO Handphone</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Tanggal Order</th>
                            <th scope="col">Komen</th>
                            <th scope="col">Harga Layanan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($order_pending as $op) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $op['nama']; ?></td>
                                <td><?= $op['no_handphone']; ?></td>
                                <td><?= $op['alamat']; ?></td>
                                <td><?= $op['tanggal']; ?></td>
                                <td><?= $op['komen']; ?></td>
                                <td>Rp <?= number_format($op['id_layanan']);  ?></td>
                                <td colspan="2">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        Ambil Orderan
                                    </button>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Order</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="additionalDataForm" action="<?= base_url("order_pekerja/ambilorder/" . $op['id']); ?>" method="post">
                            <div class="form-group">
                                <label for="nama_pekerja">Nama pekerja yang mengambil orderan</label>
                                <input type="text" class="form-control" id="nama_pekerja" name="nama_pekerja">
                            </div>
                            <!-- Add more input fields as needed -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </body>

    </html>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Button trigger modal -->

<!-- Modal -->

</div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->