<?= $this->extend('layouts/home/main'); ?>
<?= $this->section('home-content'); ?>
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
        </div>
        <?php if ($pemasukan['data']) : ?>
            <h5 class="my-3"><?= $pemasukan['data'][0]['nama_event']; ?></h5>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td colspan="3" class="fw-bold">SUMBER DANA</td>
                        </tr>
                        <?php $total_pemasukan = 0;
                        foreach ($pemasukan['data'] as $i => $p) :
                            $total_pemasukan += $p['nominal']; ?>
                            <tr>
                                <td><?= $i + 1; ?></td>
                                <td><?= $p['nama_iuran']; ?></td>
                                <td><?= rupiah($p['nominal']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="2" class="text-center">Total Sumber Dana</td>
                            <td><?= rupiah($total_pemasukan); ?></td>
                        </tr>
                        <tr>
                            <td colspan="3">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="fw-bold">PENGELUARAN</td>
                        </tr>
                        <?php $total_pengeluaran = 0;
                        foreach ($pengeluaran['data'] as $k => $keluar) :
                            $total_pengeluaran += $keluar['nominal']; ?>
                            <tr>
                                <td><?= $k + 1; ?></td>
                                <td><?= $keluar['nama_iuran']; ?></td>
                                <td><?= rupiah($keluar['nominal']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="2" class="text-center">Total Pengeluaran</td>
                            <td><?= rupiah($total_pengeluaran); ?></td>
                        </tr>
                        <tr class="fw-bold">
                            <td colspan="2" class="text-center">Saldo</td>
                            <td><?= rupiah($total_pemasukan - $total_pengeluaran); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>
<?= $this->endSection(); ?>