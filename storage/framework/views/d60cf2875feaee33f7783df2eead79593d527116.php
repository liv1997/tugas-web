<?php $__env->startSection('title'); ?>
buku
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<a href="<?php echo e(url('buku/create')); ?>" class="btn btn-success btn-sm">
    Tambah buku
</a>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>judul</th>
            <th>nama_pengarang</th>
            <th>penerbit</th>
             <th>tahunterbit</th>
            <th>Tools</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($i+1); ?></td>
            <td><?php echo e($value->judul); ?></td>
            <td><?php echo e($value->nama_pengarang); ?></td>
            <td><?php echo e($value->penerbit); ?></td>
            <td><?php echo e($value->tahunterbit); ?></td>
            
            <td>
                <a href="<?php echo e(url('buku/'.$value->id.'/edit')); ?>" class="btn btn-warning btn-sm">Ubah</a>
                <form action="<?php echo e(url('buku/'.$value->id)); ?>" method="POST">
                 <?php echo e(csrf_field()); ?>

                 <input type="hidden" name="_method" value="DELETE">
                 <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">
                     Hapus
                 </button>
             </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('buku.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\laragon\tes\web_laravel\resources\views/buku/index.blade.php */ ?>