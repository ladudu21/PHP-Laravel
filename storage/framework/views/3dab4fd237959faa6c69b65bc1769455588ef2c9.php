

<?php $__env->startSection('content'); ?>
<section class="section-slide">
    <div class="wrap-slick1">
        <div class="slick1">
            <div class="item-slick1" style="background-image: url(/template/images/bookshop.jpg);">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                            <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                BOOK STORE
                            </h2>
                        </div>
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                            <span class="ltext-101 cl2 respon2">
                                ANYONE
                            </span><br>
                            <span class="ltext-101 cl2 respon2">
                                ANYWHERE
                            </span><br>
                            <span class="ltext-101 cl2 respon2">
                                ANYTIME
                            </span><br>
                            <span class="ltext-101 cl2 respon2">
                                ANYBOOK
                            </span><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product -->
<section class="bg0 p-t-23 p-b-140">
    <div class="container">
        <div class="p-b-10">
            <h3 class="ltext-103 cl5">
                Newest Book
            </h3>
        </div>
        <div id="loadProduct">
            <?php echo $__env->make('products.list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <!-- Load more -->
        <div class="flex-c-m flex-w w-full p-t-45" id="btn_loadMore">
            <input type="hidden" id="page" value="1">
            <a onclick="loadMore()" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                Load More
            </a>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\learn-laravel\resources\views/home.blade.php ENDPATH**/ ?>