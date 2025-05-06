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
                                <td><?= $om->nama; ?></td>
                                <td><?= $om->no_handphone; ?></td>
                                <td><?= $om->alamat; ?></td>
                                <td><?= $om->tanggal; ?></td>
                                <td><?= $om->komen; ?></td>
                                <td>Rp <?= number_format($om->id_layanan); ?></td>
                                <td colspan="2">
                                    <a href="<?= base_url('order/lanjutorder/' . $om->id); ?>" class="badge badge-pill badge-success" onclick="return confirm('Yakin?');" style="font-size:1rem;">✓</a>
                                    <a href="<?= base_url('order/hapusorder/' . $om->id); ?>" class="badge badge-pill badge-danger" onclick="return confirm('Yakin?');" style="font-size:1rem;">X</a>
                                    <a class="badge badge-pill badge-primary" data-toggle="modal" data-target="#editOrderModal<?= $om->id ?>" style="font-size:1rem;">i</a>
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

    <?php foreach ($order_masuk as $order) : ?>
        <!-- Modal -->
        <div class="modal fade" id="editOrderModal<?= $order->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel<?= $order->id ?>" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel<?= $order->id ?>">Edit Orderan Masuk</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?= base_url('order/ubahOrder'); ?>" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="hidden" name="id" value="<?= $order->id ?>">
                                <input type="text" class="form-control" name="nama" value="<?= $order->nama ?>" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <label for="no_handphone">No Handphone</label>
                                <input type="text" class="form-control" name="no_handphone" value="<?= $order->no_handphone ?>" placeholder="No Handphone">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="<?= $order->alamat ?>" placeholder="Alamat">
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" value="<?= $order->tanggal ?>" placeholder="Tanggal Order">
                            </div>
                            <div class="form-group">
                                <label for="komen">Komen</label>
                                <input type="text" class="form-control" name="komen" value="<?= $order->komen ?>" placeholder="Komen">
                            </div>
                            <div class="form group">
                                <label for="id_layanan">Layanan</label>
                                <select name="id_layanan" id="id_layanan" class="form-control">
                                    <option value="">Pilih Layanan</option>
                                    <?php foreach ($layanan as $l) : ?>
                                        <option value="<?= $l['harga']; ?>"><?= $l['nama']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<!-- End of Main Content -->