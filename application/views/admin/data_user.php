<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title;  ?></h1>
    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message') ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <a class="btn btn-primary mb-4" data-toggle="modal" data-target="#tambahUserBaru">Tambah User Baru</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Role</th>
                            <th scope="col">Aktif</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($data_user as $ds) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $ds['nama']; ?></td>
                            <td><?= $ds['email']; ?></td>
                            <!-- <td><?= $ds['password']; ?></td> -->
                            <td class="d-flex justify-content-center align-items-center">
                                <img style="width: 8vw; height: auto;"
                                    src="<?= base_url('assets/images/userProfile/') . $ds['image']; ?> ?>"
                                    alt="<?= $ds['nama'] ?>">
                            </td>
                            <td><?= $ds['role_id']; ?></td>
                            <td><?= $ds['is_active']; ?></td>
                            <td colspan="2">
                                <a href="" class="badge badge-pill badge-success">Edit</a>
                                <a href="<?= base_url('admin/deleteUser/') . $ds['id']; ?>"
                                    class="badge badge-pill badge-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Buat ngilangin notifikasi session message -->
<script type="text/javascript">
window.setTimeout(function() {
    $(".col-lg-6").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
    });
}, 1500);
</script>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->