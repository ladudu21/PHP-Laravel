

<?php $__env->startSection('content'); ?>
<form action="" method="POST">
    <div class="card-body">
        <div class="form-group">
            <label for="name">Category name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo e($category->name); ?>">
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
    <?php echo csrf_field(); ?>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\learn-laravel\resources\views/admin/categories/edit.blade.php ENDPATH**/ ?>