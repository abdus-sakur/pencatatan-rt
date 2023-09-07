<a href="javascript:;" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#addRole">Tambah Role</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama Role</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($roles as $i => $role) : ?>
            <tr>
                <td><?= $i + 1; ?></td>
                <td><?= $role->name; ?></td>
                <td>
                    <a href="javascript:;" class="me-2" data-bs-toggle="modal" data-bs-target="#editRole<?= $i; ?>">Ubah</a>
                    <?php if ($role->id != 1) : ?>
                        <a href="" class="text-success">Menu Access</a>
                    <?php endif; ?>
                    <a href="javascript:;" class="ms-2 text-danger delete" data-id="<?= $role->id; ?>" data-url="<?= base_url("user-setting/delete-role"); ?>">Hapus</a>
                </td>
            </tr>
            <?= view('settings/user/_edit_role', ['index' => $i, 'id' => $role->id, 'role' => $role->name]); ?>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- create  -->
<div class="modal fade" id="addRole" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="addRoleLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addRoleLabel">Tambah Role</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url("user-setting/store-role"); ?>" method="POST">
                    <?= csrf_field(); ?>
                    <div>
                        <label for="">Nama Role</label>
                        <input type="text" class="form-control" name="role" required>
                    </div>
                    <div class="text-end mt-2">
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>