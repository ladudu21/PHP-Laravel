

<?php $__env->startSection('content'); ?>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Description</th>
            <th>Price</th>
            <th>Update</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr id="row<?php echo e($product->id); ?>">
            <td><?php echo e($product->id); ?></td>
            <td><?php echo e($product->name); ?></td>
            <td><?php echo e($product->category->name); ?></td>
            <td><?php echo e($product->description); ?></td>
            <td><?php echo e($product->price); ?> $</td>
            <td><?php echo e($product->updated_at); ?></td>
            <td></td>
            <td>
                <a href="/admin/products/edit/<?php echo e($product->id); ?>">
                    <i class="fas fa-edit"></i></a>
                <a href="#" onclick="removeRow(<?php echo e($product->id); ?>, '/admin/products/delete')">
                    <i class="fas fa-trash" style="color:red"></i></a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php echo e($products->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\learn-laravel\resources\views/admin/products/list.blade.php ENDPATH**/ ?>