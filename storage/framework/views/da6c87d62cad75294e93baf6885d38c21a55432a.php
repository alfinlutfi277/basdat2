<!-- menggunakan kerangka dari master.blade.php -->


<?php $__env->startSection('header'); ?>
<h2>
    <center>List Data</center>
</h2>
<?php if($message = Session::get('success')): ?>
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title', 'Halaman Khusus Admin'); ?>

<?php $__env->startSection('main'); ?>
<div class="col-md-12 bg-white p-4">
    <a href="/add"><button class="btn btn-primary mb-3">Tambah data</button></a>
    <table class="table table-responsive table-bordered table-hover table-stripped">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama depan</th>
                <th>Nama belakang</th>
                <th> Alamat</th>
                <th> Pekerjaan</th>
                <th> Riwayat</th>
                <th> Lokasi</th>
                <th>tanggal </th>
                <th width="15%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e(++$i); ?></td>
                <td><?php echo e($article->nama_depan); ?></td>
                <td><?php echo e($article->nama_belakang); ?></td>
                <td><?php echo e($article->alamat); ?></td>
                <td><?php echo e($article->pekerjaan); ?></td>
                <td><?php echo e($article->riwayat); ?></td>
                <td><?php echo e($article->lokasi); ?></td>
                <td><?php echo e($article->tanggal); ?></td>
                <td>
                    <a href="/edit/<?php echo e($article->id); ?>"><button class="btn btn-success">Edit</button></a>
                    <a href="/delete/<?php echo e($article->id); ?>"><button class="btn btn-danger">Hapus</button></a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamp\htdocs\basdat\basdat\resources\views/adminshow.blade.php ENDPATH**/ ?>