

<?php $__env->startSection('content'); ?>
<div class="m-t-100">
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="/all-products" class="stext-109 cl8 hov-cl1 trans-04">
                All Products
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <a href="/category/<?php echo e($product->category_id); ?>-<?php echo e(Str::slug($product->category->name, '-')); ?>.html"
                class="stext-109 cl8 hov-cl1 trans-04">
                <?php echo e($product->category->name); ?>

                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
                <?php echo e($product->name); ?>

            </span>
        </div>
    </div>
    <section class="sec-product-detail bg0 p-t-65 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 p-b-30">
                    <img src="<?php echo e($product->thumb); ?>" alt="">
                </div>

                <div class="col-md-6 col-lg-8 p-b-30">
                    <div class="p-r-50 p-t-5 p-lr-0-lg">
                        <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                            <?php echo e($product->name); ?>

                        </h4>

                        <span class="mtext-106 cl2">
                            $ <?php echo e($product->price); ?>

                        </span>

                        <p class="stext-102 cl3 p-t-23">
                            <?php echo e($product->description); ?>

                        </p>

                        <!--  -->

                        <div class="p-t-33">
                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-204 flex-w flex-m respon6-next">
                                    <form action="/add-cart" method="POST">
                                        <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                            <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-minus"></i>
                                            </div>

                                            <input class="mtext-104 cl3 txt-center num-product" type="number"
                                                name="num_product" value="1">

                                            <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-plus"></i>
                                            </div>
                                        </div>

                                        <button type="submit"
                                            class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                            Add to cart
                                        </button>
                                        <input type="hidden" name="product_id" value=<?php echo e($product->id); ?>>
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            


    </section>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\learn-laravel\resources\views/products/details.blade.php ENDPATH**/ ?>