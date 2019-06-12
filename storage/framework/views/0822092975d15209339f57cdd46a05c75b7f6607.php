<?php $__env->startSection('title'); ?>
Tambah Data buku
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<a href="<?php echo e(url('buku')); ?>" class="btn btn-success btn-sm">
	Daftar buku
</a>
<form method="post" action="<?php echo e(url('buku')); ?>">
	<?php echo e(csrf_field()); ?>

	<div class="form-group">
		<label>judul</label>
		<input type="text" name="judul" class="form-control">
	</div>
	<div class="form-group">
		<label>nama pengarang</label>
		<input type="text" name="nama_pengarang" class="form-control">
	</div>
	<div class="form-group">
		<label>penerbit</label>
		<textarea name="penerbit" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<label>tahun terbit</label>
		<textarea name="tahunterbit" class="form-control"></textarea>
	</div>
	<button type="submit" class="btn btn-success btn-block">
		Tambah Data
	</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('buku.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\laragon\tes\web_laravel\resources\views/buku/tambah.blade.php */ ?>