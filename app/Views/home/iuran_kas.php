<?= $this->extend('layouts/home/main'); ?>
<?= $this->section('home-content'); ?>
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
<?= $this->endSection(); ?>