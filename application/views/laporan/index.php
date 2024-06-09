<!-- Begin Page Content -->
<div class="container-fluid">

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

            <a href="<?= base_url('laporan/generatepdf'); ?>" class="btn btn-primary">Generate PDF</a>


            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Pemesan</th>
                        <th scope="col">Tanggal Order</th>
                        <th scope="col">Nama Pekerja</th>
                        <th scope="col">Harga layanan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($laporan as $l) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $l['nama']; ?></td>
                            <td><?= $l['tanggal']; ?></td>
                            <td><?= $l['nama_pekerja']; ?></td>
                            <td>Rp <?= number_format($l['id_layanan']);  ?></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>



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