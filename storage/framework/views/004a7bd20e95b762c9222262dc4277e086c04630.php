

<?php $__env->startSection('content'); ?>
<form action="/admin/products/add" method="POST" enctype="multipart/form-data">
    <div class="card-body">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="category_id">Category</label>
            <select class="form-control" id="category_id" name="category_id">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea type="text" class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <div class="input-group w-25">
                <input type="number" class="form-control" id="price" name="price">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend2">$</span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" class="form-control" id="upload">
            <div id="image_show"></div>
            <input type="hidden" name="thumb" id="thumb">
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Create</button>
    </div>
    <?php echo csrf_field(); ?>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\learn-laravel\resources\views/admin/products/add.blade.php ENDPATH**/ ?>