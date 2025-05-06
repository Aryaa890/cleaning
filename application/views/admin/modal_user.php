<!-- Modal -->
<div class="modal fade" id="tambahUserBaru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah User Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('admin/data_user'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama User">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email User">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Password User">
                    </div>

                    <div class="form group mb-3">
                        <select name="role_id" id="role_id" class="form-control">
                            <option value="">Piih Role</option>
                            <?php foreach ($role as $r) : ?>
                            <option value="<?= $r['id']; ?>"><?= $r['role']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="file" class="form-control" id="image" name="image" size="20" required>
                    </div>
                    <!-- <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active"
                                checked>
                            <label class="form-check-label" for="is_active">
                                Active?
                            </label>
                        </div>
                    </div> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> Tutup </button>
                    <button type="submit" class="btn btn-primary"> Simpan </button>
                </div>
            </form>
        </div>
    </div>
</div>