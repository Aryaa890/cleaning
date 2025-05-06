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


            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NO Handphone</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Tanggal Order</th>
                        <th scope="col">Komen</th>
                        <th scope="col">Nama Pekerja</th>
                        <th scope="col">Harga layanan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($order_diambil as $od) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $od['nama']; ?></td>
                            <td><?= $od['no_handphone']; ?></td>
                            <td><?= $od['alamat']; ?></td>
                            <td><?= $od['tanggal']; ?></td>
                            <td><?= $od['komen']; ?></td>
                            <td><?= $od['nama_pekerja']; ?></td>
                            <td>Rp <?= number_format($od['id_layanan']);  ?></td>
                            <td colspan="2">
                                <a href="<?= base_url('order_pekerja/laporan/' . $od['id']); ?>" class="badge badge-pill badge-success" onclick="return confirm('Yakin?');" style="font-size:1rem;">✓</a>
                            </td>
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