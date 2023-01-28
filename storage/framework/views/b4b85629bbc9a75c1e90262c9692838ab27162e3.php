<div class="wrap-header-cart js-panel-cart">
    <div class="s-full js-hide-cart"></div>

    <div class="header-cart flex-col-l p-l-65 p-r-25">
        <div class="header-cart-title flex-w flex-sb-m p-b-8">
            <span class="mtext-103 cl2">
                Your Cart
            </span>

            <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                <i class="zmdi zmdi-close"></i>
            </div>
        </div>

        <div class="header-cart-content flex-w js-pscroll">
            <?php
            $totalPrice = 0;
            ?>
            <ul class="header-cart-wrapitem w-full">
                <?php if(count($productss) > 0): ?>
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
                <?php else: ?>
                <div class="text-center mb-5">
                    <h2>Empty</h2>
                </div>
                <?php endif; ?>
            </ul>

            <div class="w-full">
                <div class="header-cart-total w-full p-tb-40">
                    Total: <?php echo e(number_format($totalPrice, 0, '', '.')); ?> $
                </div>

                <div class="header-cart-buttons flex-w w-full">
                    <a href="/cart"
                        class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                        View Cart
                    </a>

                    <a href="/cart" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                        Check Out
                    </a>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\laravel\learn-laravel\PHP-Laravel\resources\views/cart.blade.php ENDPATH**/ ?>