<!-- pdf_view.php -->
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