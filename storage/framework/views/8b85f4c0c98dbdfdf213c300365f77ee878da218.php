<!doctype html>
<html>
<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <?php echo $__env->yieldContent('css'); ?>
</head>
<body>

<div class="container">
    <div class="alert alert-info">
        <h2>Data Mahasiswa</h2>
    </div>

    <hr>

    <?php echo $__env->yieldContent('content'); ?>

</div>

<script src="js/app.js"></script>
</body>
</html>
<?php /* C:\laragon\tes\web_laravel\resources\views/Mahasiswa/layout.blade.php */ ?>