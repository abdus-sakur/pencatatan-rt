<?= $this->extend('layouts/templates'); ?>
<?= $this->section('content'); ?>
<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
            <form action="">
                <div class="input-group">
                    <select class="form-control" name="event" id="">
                        <?php foreach ($events as $e) : ?>
                            <option value="<?= $e->id_event; ?>" <?= $e->id_event == $event ? 'selected' : ''; ?>><?= $e->nama_event; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <button class="btn btn-outline-primary" type="submit">Submit</button>
                </div>
            </form>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#importExcel">
                Import Excel
            </button>
        </div>
        <?php if ($pemasukan['data']) : ?>
            <h5 class="my-3"><?= $pemasukan['data'][0]['nama_event']; ?></h5>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td colspan="4" class="fw-bold">SUMBER DANA</td>
                        </tr>
                        <?php $total_pemasukan = 0;
                        foreach ($pemasukan['data'] as $i => $p) :
                            $total_pemasukan += $p['nominal']; ?>
                            <tr>
                                <td><?= $i + 1; ?></td>
                                <td><?= $p['nama_iuran']; ?></td>
                                <td><?= rupiah($p['nominal']); ?></td>
                                <td><?= $p['keterangan']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="3" class="text-center">Total Sumber Dana</td>
                            <td><?= rupiah($total_pemasukan); ?></td>
                        </tr>
                        <tr>
                            <td colspan="4">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="fw-bold">PENGELUARAN</td>
                        </tr>
                        <?php $total_pengeluaran = 0;
                        foreach ($pengeluaran['data'] as $k => $keluar) :
                            $total_pengeluaran += $keluar['nominal']; ?>
                            <tr>
                                <td><?= $k + 1; ?></td>
                                <td><?= $keluar['nama_iuran']; ?></td>
                                <td><?= rupiah($keluar['nominal']); ?></td>
                                <td><?= $keluar['keterangan']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="3" class="text-center">Total Pengeluaran</td>
                            <td><?= rupiah($total_pengeluaran); ?></td>
                        </tr>
                        <tr class="fw-bold">
                            <td colspan="3" class="text-center">Saldo</td>
                            <td><?= rupiah($total_pemasukan - $total_pengeluaran); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>
<!-- Modal import-->
<div class="modal fade" id="importExcel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="importExcelLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="importExcelLabel">import excel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <a href="<?= base_url('download-format-excel/iuran-event'); ?>" class="d-block mb-4">Download Contoh Format Import Excel</a>
                <form action="<?= base_url('iuran-event/import-excel'); ?>" enctype="multipart/form-data" method="post">
                    <div class="form-group row">
                        <label for="" class="col-md-4">File Excel</label>
                        <div class="col-md-8">
                            <input type="file" name="excel" id="" required>
                        </div>
                    </div>
                    <div class="text-end">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>