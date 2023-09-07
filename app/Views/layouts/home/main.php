<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Pencatatan RT'; ?></title>
    <link rel="stylesheet" href="<?= base_url('public/assets/css/main/app.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/assets/css/main/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url("public/assets/css/main/loading.css"); ?>">
    <link rel="shortcut icon" href="<?= base_url('public/assets/images/logo/favicon.png'); ?>" type="image/png">
    <script src="<?= base_url('public/assets/plugins/jquery/jquery.min.js'); ?>"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <div class="col-md-8 col-12">
                <?= $this->include('components/alert'); ?>
                <?= $this->renderSection('home-content'); ?>
                <?= $this->include('layouts/footer'); ?>
            </div>
        </div>
    </div>

    <script src="<?= base_url("public/assets/js/bootstrap.js"); ?>"></script>
</body>

</html>