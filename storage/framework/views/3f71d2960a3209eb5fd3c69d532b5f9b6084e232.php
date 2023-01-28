

<?php $__env->startSection('content'); ?>
    <div class="customer mt-3">
        <ul>
            <li>Tên khách hàng: <strong><?php echo e($customer->name); ?></strong></li>
            <li>Số điện thoại: <strong><?php echo e($customer->phone); ?></strong></li>
            <li>Địa chỉ: <strong><?php echo e($customer->address); ?></strong></li>
            <li>Email: <strong><?php echo e($customer->email); ?></strong></li>
        </ul>
    </div>

    <div class="carts">
        <?php $total = 0; ?>
        <table class="table">
            <tbody>
            <tr class="table_head">
                <th class="column-1">IMG</th>
                <th class="column-2">Product</th>
                <th class="column-3">Price</th>
                <th class="column-4">Quantity</th>
                <th class="column-5">Total</th>
            </tr>

            <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $price = $cart->price * $cart->qty;
                    $total += $price;
                ?>
                <tr>
                    <td class="column-1">
                        <div class="how-itemcart1">
                            <img src="<?php echo e($cart->product->thumb); ?>" alt="IMG" style="width: 100px">
                        </div>
                    </td>
                    <td class="column-2"><?php echo e($cart->product->name); ?></td>
                    <td class="column-3"><?php echo e(number_format($cart->price, 0, '', '.')); ?></td>
                    <td class="column-4"><?php echo e($cart->qty); ?></td>
                    <td class="column-5"><?php echo e(number_format($price, 0, '', '.')); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td colspan="4" class="text-right">Tổng Tiền</td>
                    <td><?php echo e(number_format($total, 0, '', '.')); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\learn-laravel\resources\views/admin/carts/details.blade.php ENDPATH**/ ?>