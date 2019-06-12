<?php $__env->startSection('title'); ?>
Ubah Data buku
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<a href="<?php echo e(url('buku')); ?>" class="btn btn-success btn-sm">
	Daftar buku
</a>
<form method="post" action="<?php echo e(url('buku/'.$mhs->id)); ?>">
	<?php echo e(csrf_field()); ?>

	<input type="hidden" name="_method" value="PUT">
	<div class="form-group">
		<label>judul</label>
		<input type="text" name="judul" value="<?php echo e($mhs->judul); ?>"class="form-control">
	</div>
	<div class="form-group">
		<label>nama pengarang</label>
		<input type="text" name="nama_pengarang" value="<?php echo e($mhs->nama_pengarang); ?>" class="form-control">
	</div>
	<div class="form-group">
		<label>penerbit</label>
		<input type="text" name="penerbit" value="<?php echo e($mhs->penerbit); ?>" class="form-control">
	</div>
	<div class="form-group">
		<label>tahun terbit</label>
		<input type="text" name="tahunterbit" value="<?php echo e($mhs->tahunterbit); ?>" class="form-control">
	</div>
	<button type="submit" class="btn btn-warning btn-block">
		Ubah Data
	</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('buku.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\laragon\tes\web_laravel\resources\views/buku/ubah.blade.php */ ?>