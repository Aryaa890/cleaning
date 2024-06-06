<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

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
                    <?php if (!empty($order_masuk)) : ?>
                        <?php $i = 1; ?>
                        <?php foreach ($order_masuk as $om) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $om['nama']; ?></td>
                                <td><?= $om['no_handphone']; ?></td>
                                <td><?= $om['alamat']; ?></td>
                                <td><?= $om['tanggal']; ?></td>
                                <td><?= $om['komen']; ?></td>
                                <td>Rp <?= number_format($om['id_layanan']); ?></td>
                                <td colspan="2">
                                    <a href="<?= base_url('order/lanjutorder/' . $om['id']); ?>" class="badge badge-pill badge-success" onclick="return confirm('Yakin?');" style="font-size:1rem;">✓</a>
                                    <a href="<?= base_url('order/deleteorder/' . $om['id']); ?>" class="badge badge-pill badge-danger" onclick="return confirm('Yakin?');" style="font-size:1rem;">X</a>
                                    <a class="badge badge-pill badge-primary" data-toggle="modal" data-target="#exampleModal" style="font-size:1rem;">i</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="8">No data available</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <!-- Modal content -->
    </div>
</div>
<!-- End of Main Content -->