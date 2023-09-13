<?= $this->extend('layouts/home/main'); ?>
<?= $this->section('home-content'); ?>
<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-center align-items-end" style="gap: 15px;">
            <img src="<?= base_url('public/assets/images/logo/logo.png'); ?>" height="75px" alt="">
            <h3 class="text-center text-primary d-md-block d-none">APLIKASI PENCATATAN RT</h3>
        </div>
        <div class="d-md-flex d-block justify-content-center">
            <div class="col-md-4">
                <form action="">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="keyword" value="<?= $keyword; ?>" placeholder="Masukkan Nama">
                        <span class="input-group-text"><i class="bi bi-search"></i></span>
                    </div>
                </form>
            </div>
        </div>

        <?php if ($data) : ?>
            <div class="table-responsive mt-3">
                <div class="text-end">Bulan : <?= date('F Y'); ?></div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Qty</th>
                            <th>Iuran Wajib</th>
                            <th>Agustusan</th>
                            <th>Sosial Besuk</th>
                            <th>Arisan</th>
                            <th>Total</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $data->nama; ?></td>
                            <td><?= $data->qty; ?></td>
                            <td><?= rupiah($data->iuran_wajib); ?></td>
                            <td><?= rupiah($data->agustusan); ?></td>
                            <td><?= rupiah($data->sosial_besuk); ?></td>
                            <td><?= rupiah($data->arisan); ?></td>
                            <td><?= rupiah($data->iuran_wajib + $data->agustusan + $data->sosial_besuk + $data->arisan); ?></td>
                            <td><?= $data->keterangan; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>
<?= $this->endSection(); ?>