@php
$totalPrice = 0;
@endphp
<h2>Chào {{ $name }}, bạn có đơn hàng tại shop Ladudu</h2>
<ul class="header-cart-wrapitem w-full">
    @foreach ($productss as $product)
    @php
    $totalPrice += $product->price * $carts[$product->id];
    @endphp
    <li class="header-cart-item flex-w flex-t m-b-12">
        <div class="header-cart-item-img">
            <img src="{{ $product->thumb }}" alt="{{ $product->name }}">
        </div>

        <div class="header-cart-item-txt p-t-8">
            <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                {{ $product->name }}
            </a>

            <span class="header-cart-item-info">
                $ {{ $product->price }} * {{ $carts[$product->id] }}
            </span>
        </div>
    </li>
    @endforeach
</ul>
<div class="header-cart-total w-full p-tb-40">
    Total: {{ number_format($totalPrice, 0, '', '.') }} $
</div>