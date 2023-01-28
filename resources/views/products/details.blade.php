@extends('main')

@section('content')
<div class="m-t-100">
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="/all-products" class="stext-109 cl8 hov-cl1 trans-04">
                All Products
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <a href="/category/{{ $product->category_id }}-{{ Str::slug($product->category->name, '-') }}.html"
                class="stext-109 cl8 hov-cl1 trans-04">
                {{ $product->category->name }}
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
                {{ $product->name}}
            </span>
        </div>
    </div>
    <section class="sec-product-detail bg0 p-t-65 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 p-b-30">
                    <img src="{{ $product->thumb }}" alt="">
                </div>

                <div class="col-md-6 col-lg-8 p-b-30">
                    <div class="p-r-50 p-t-5 p-lr-0-lg">
                        <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                            {{ $product->name}}
                        </h4>

                        <span class="mtext-106 cl2">
                            $ {{ $product->price}}
                        </span>

                        <p class="stext-102 cl3 p-t-23">
                            {{ $product->description}}
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
                                        <input type="hidden" name="product_id" value={{ $product->id }}>
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="mt-5">
                <!-- Review -->
                <!-- Add review -->
                <form class="w-full">
                    <h5 class="mtext-108 cl2 p-b-7">
                        Add a review
                    </h5>

                    <p class="stext-102 cl6">
                        Your email address will not be published. Required fields are marked *
                    </p>

                    <div class="flex-w flex-m p-t-50 p-b-23">
                        <span class="stext-102 cl3 m-r-16">
                            Your Rating
                        </span>

                        <span class="wrap-rating fs-18 cl11 pointer">
                            <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                            <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                            <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                            <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                            <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                            <input class="dis-none" type="number" name="rating">
                        </span>
                    </div>

                    <div class="row p-b-25">
                        <div class="col-12 p-b-5">
                            <label class="stext-102 cl3" for="review">Your review</label>
                            <textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review"
                                name="review"></textarea>
                        </div>

                        <div class="col-sm-6 p-b-5">
                            <label class="stext-102 cl3" for="name">Name</label>
                            <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="name" type="text" name="name">
                        </div>

                        <div class="col-sm-6 p-b-5">
                            <label class="stext-102 cl3" for="email">Email</label>
                            <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="email" type="text" name="email">
                        </div>
                    </div>

                    <button class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10">
                        Submit
                    </button>
                </form>
                <div class="flex-w flex-t p-b-68 m-t-100">
                    <div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
                        <img src="/template/images/avatar-01.jpg" alt="AVATAR">
                    </div>

                    <div class="size-207">
                        <div class="flex-w flex-sb-m p-b-17">
                            <span class="mtext-107 cl2 p-r-20">
                                Ariana Grande
                            </span>

                            <span class="fs-18 cl11">
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-half"></i>
                            </span>
                        </div>

                        <p class="stext-102 cl6">
                            Quod autem in homine praestantissimum atque optimum est, id
                            deseruit.
                            Apud ceteros autem philosophos
                        </p>
                    </div>
                </div>
            </div> --}}


    </section>

    @endsection