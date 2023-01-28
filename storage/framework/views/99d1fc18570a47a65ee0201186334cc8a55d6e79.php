

<?php $__env->startSection('content'); ?>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Update</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr id="row<?php echo e($category->id); ?>">
            <td><?php echo e($category->id); ?></td>
            <td><?php echo e($category->name); ?></td>
            <td><?php echo e($category->updated_at); ?></td>
            <td>
                <a href="/admin/categories/edit/<?php echo e($category->id); ?>">
                    <i class="fas fa-edit"></i></a>
                <a href="#" onclick="removeRow(<?php echo e($category->id); ?>, '/admin/categories/delete')">
                    <i class="fas fa-trash" style="color:red"></i></a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\learn-laravel\resources\views/admin/categories/list.blade.php ENDPATH**/ ?>