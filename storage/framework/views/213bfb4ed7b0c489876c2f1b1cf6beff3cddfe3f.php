<?php
$totalPrice = 0;
?>
<h2>Chào <?php echo e($name); ?>, bạn có đơn hàng tại shop Ladudu</h2>
<ul class="header-cart-wrapitem w-full">
    <?php $__currentLoopData = $productss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
    $totalPrice += $product->price * $carts[$product->id];
    ?>
    <li class="header-cart-item flex-w flex-t m-b-12">
        <div class="header-cart-item-img">
            <img src="<?php echo e($product->thumb); ?>" alt="<?php echo e($product->name); ?>">
        </div>

        <div class="header-cart-item-txt p-t-8">
            <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                <?php echo e($product->name); ?>

            </a>

            <span class="header-cart-item-info">
                $ <?php echo e($product->price); ?> * <?php echo e($carts[$product->id]); ?>

            </span>
        </div>
    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<div class="header-cart-total w-full p-tb-40">
    Total: <?php echo e(number_format($totalPrice, 0, '', '.')); ?> $
</div><?php /**PATH C:\xampp\htdocs\laravel\learn-laravel\resources\views/mail/success.blade.php ENDPATH**/ ?>