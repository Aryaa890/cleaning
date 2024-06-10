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
                            <th scope="col">Password</th>
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
                                <td><?= $ds['password']; ?></td>
                                <td class="d-flex justify-content-center align-items-center">
                                    <img style="width: 8vw; height: auto;" src="<?= base_url('assets/images/userProfile/') . $ds['image']; ?> ?>" alt="<?= $ds['nama'] ?>">
                                </td>
                                <td><?= $ds['role_id']; ?></td>
                                <td><?= $ds['is_active']; ?></td>
                                <td colspan="2">
                                    <a class="badge badge-pill badge-success" data-toggle="modal" data-target="#editUser<?= $ds['id'] ?>">Edit</a>
                                    <a href="<?= base_url('admin/deleteUser/') . $ds['id']; ?>" class="badge badge-pill badge-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Loop through data and generate modal for each order -->
    <?php foreach ($data_user as $ds) : ?>
        <!-- Modal -->
        <div class="modal fade" id="editUser<?= $ds['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('admin/ubahUser'); ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <!-- Populate form fields with user data -->
                            <input type="hidden" name="id" value="<?= $ds['id']; ?>"> <!-- Hidden input for user ID -->
                            <div class="form-group">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama User" value="<?= $ds['nama']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email User" value="<?= $ds['email']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="password" name="password" placeholder="Password User" value="<?= $ds['password']; ?>">
                            </div>
                            <div class="form group mb-3">
                                <select name="role_id" id="role_id" class="form-control">
                                    <option value="">Pilih Role</option>
                                    <?php foreach ($role as $r) : ?>
                                        <option value="<?= $r['id']; ?>" <?= ($ds['role_id'] == $r['id']) ? 'selected' : ''; ?>><?= $r['role']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="image">Gambar User</label>
                                <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
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