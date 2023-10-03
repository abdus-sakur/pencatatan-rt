<?= $this->extend('layouts/templates'); ?>
<?= $this->section('content'); ?>
<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <form action="">
                <div class="input-group">
                    <input type="month" class="form-control" name="bulan" id="bulan" value="<?= $bulan; ?>">
                    <button class="btn btn-outline-primary" type="submit">Submit</button>
                </div>
            </form>
            <button type="button" class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Import Excel
            </button>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Qty</th>
                        <th>Iuran Wajib</th>
                        <th>Agustusan</th>
                        <th>Sosial Besuk</th>
                        <th>Arisan</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $i => $data) : ?>
                        <tr class="<?= $data->qty > 1 ? 'bg-warning' : ''; ?>">
                            <td><?= $i + 1; ?></td>
                            <td><?= $data->nama; ?></td>
                            <td><?= $data->qty; ?></td>
                            <td><?= rupiah($data->iuran_wajib); ?></td>
                            <td><?= rupiah($data->agustusan); ?></td>
                            <td><?= rupiah($data->sosial_besuk); ?></td>
                            <td><?= rupiah($data->arisan); ?></td>
                            <td><span style="cursor: pointer;" class="keterangan" data-bs-target="#formKeterangan" data-bs-toggle="modal" data-id="<?= $data->id_iuran; ?>" data-ket="<?= $data->keterangan; ?>"><?= $data->keterangan; ?> <i class="bi bi-pencil-square"></i></span></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('dashboard/import-excel'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="" class="fw-bold">Bulan</label>
                        <input type="month" name="bulan" class="form-control" id="" required>
                    </div>
                    <label for="" class="fw-bold">File Excel</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="file" id="inputGroupFile02" required>
                        <button class="btn btn-primary"><i class="bi bi-upload"></i> Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="formKeterangan" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('dashboard/simpan-keterangan'); ?>" method="POST">
                    <input type="hidden" name="id" id="id" value="">
                    <label for="" class="fw-bold">Keterangan</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="keterangan" id="keterangan">
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(".keterangan").on("click", function() {
            $("#id").val($(this).data('id'))
            $("#keterangan").val($(this).data('ket'))
        })
    })
</script>
<?= $this->endSection(); ?>