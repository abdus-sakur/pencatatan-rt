<?= $this->extend('layouts/templates'); ?>
<?= $this->section('content'); ?>
<div class="card">
    <div class="card-body">
        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inputIuran">
            Add Iuran
        </button> -->
        <div class="d-flex justify-content-between align-items-center">
            <form action="">
                <div class="input-group">
                    <input type="month" class="form-control" name="bulan" id="bulan" value="<?= $bulan; ?>">
                    <button class="btn btn-outline-primary" type="submit">Submit</button>
                </div>
            </form>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#importExcel">
                Import Excel
            </button>
        </div>
        <div class="table-responsive mt-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th colspan="2">Uraian</th>
                        <th>jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($pemasukan['data']) : ?>
                        <?php
                        $rowspan_awal = $pemasukan['count'] + $jimpitan['count'] + 3;
                        $saldo_awal = $pemasukan['data'][0]['saldo_awal'];
                        $total_pemasukan = 0;
                        ?>
                        <tr>
                            <td width="125px" class="align-top"><?= $pemasukan['data'][0]['bulan'] . '-01'; ?></td>
                            <td colspan="2" class="fw-bold">Saldo</td>
                            <td width="200px" class="align-top"><?= rupiah($saldo_awal); ?></td>
                        </tr>
                        <tr>
                            <td rowspan="<?= $rowspan_awal; ?>"></td>
                            <td class="fw-bold" colspan="2">Penerimaan :</td>
                            <td rowspan="<?= $rowspan_awal; ?>"></td>
                        </tr>
                        <?php foreach ($pemasukan['data'] as $masuk) :
                            $total_pemasukan += $masuk['nominal']; ?>
                            <tr>
                                <td class="ps-5"><?= $masuk['nama_iuran']; ?></td>
                                <td><?= rupiah($masuk['nominal']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="2">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="fw-bold">Jimpitan dan Keamanan Rp.0,-</td>
                        </tr>
                        <?php foreach ($jimpitan['data'] as $jimpitan) :
                            $total_pemasukan += $jimpitan['nominal']; ?>
                            <tr>
                                <td class="ps-5"><?= $jimpitan['nama_iuran']; ?></td>
                                <td><?= rupiah($jimpitan['nominal']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td rowspan="2"></td>
                            <td colspan="2" class="fw-bold">Total Pemasukan</td>
                            <td><?= rupiah($total_pemasukan); ?></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="fw-bold">Saldo</td>
                            <td><?= rupiah($saldo_awal + $total_pemasukan); ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php $total_pengeluaran = 0;
                    if ($pengeluaran['data']) : ?>
                        <tr>
                            <td rowspan="<?= $pengeluaran['count'] + 2; ?>"></td>
                            <td colspan="2" class="fw-bold">Pengeluaran :</td>
                            <td rowspan="<?= $pengeluaran['count'] + 1; ?>"></td>
                        </tr>
                        <?php foreach ($pengeluaran['data'] as $pengeluaran) :
                            $total_pengeluaran += $pengeluaran['nominal']; ?>
                            <tr>
                                <td class="ps-5"><?= $pengeluaran['nama_iuran']; ?></td>
                                <td><?= rupiah($pengeluaran['nominal']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="2" class="fw-bold">Total Pengeluaran</td>
                            <td><?= rupiah($total_pengeluaran); ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php if ($pemasukan['data']) : ?>
                        <tr>
                            <td><?= date($pemasukan['data'][0]['bulan'] . '-t'); ?></td>
                            <td colspan="2" class="fw-bold">Saldo</td>
                            <td><?= rupiah($saldo_awal + $total_pemasukan - $total_pengeluaran); ?></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
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
                <a href="<?= base_url('download-format-excel/iuran-kas'); ?>" class="d-block mb-4">Download Contoh Format Import Excel</a>
                <form action="<?= base_url('iuran-kas/import-excel'); ?>" enctype="multipart/form-data" method="post">
                    <div class="form-group row">
                        <label for="" class="col-md-4">File Excel</label>
                        <div class="col-md-8">
                            <input type="file" name="excel" id="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-4">Bulan</label>
                        <div class="col-md-8">
                            <input type="month" name="bulan" id="" class="form-control" required>
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

<div class="modal fade" id="inputIuran" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="inputIuranLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="inputIuranLabel">Input Iuran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group row">
                        <label for="" class="col-md-4">Jenis</label>
                        <div class="col-md-8">
                            <select name="jenis" id="" class="form-control" required>
                                <option value="1">Pemasukan</option>
                                <option value="2">Pemasukan - Jimpitan & Keamanan</option>
                                <option value="3">Pengeluaran</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-4">Nominal</label>
                        <div class="col-md-8">
                            <input type="text" name="nominal" id="" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-4">Saldo Awal</label>
                        <div class="col-md-8">
                            <input type="text" name="saldo_awal" id="" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-4">Bulan</label>
                        <div class="col-md-8">
                            <input type="month" name="bulan" id="" class="form-control" required>
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