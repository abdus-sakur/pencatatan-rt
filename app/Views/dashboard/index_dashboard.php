<?= $this->extend('layouts/templates'); ?>
<?= $this->section('content'); ?>
<div class="col-6 col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body px-4 py-4-5">
            <div class="row">
                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                    <div class="stats-icon blue mb-2">
                        <i class="iconly-boldProfile"></i>
                    </div>
                </div>
                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                    <h6 class="text-muted font-semibold">Followers</h6>
                    <h6 class="font-extrabold mb-0">183.000</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
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
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>