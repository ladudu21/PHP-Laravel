<?php

namespace App\Http\View\Composers;

use App\Models\Product;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class CartComposer
{
    /**
     * The user repository implementation.
     *
     * @var \App\Repositories\UserRepository
     */

    /**
     * Create a new profile composer.
     *
     * @param  \App\Repositories\UserRepository  $users
     * @return void
     */
    public function __construct()
    {
        // Dependencies are automatically resolved by the service container...

    }

    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $carts = Session::get('carts');
        if (is_null($carts)) {
            $products = [];
        } else {
            $productId = array_keys($carts);
            $products = Product::select('id', 'name', 'price', 'thumb')
                ->whereIn('id', $productId)
                ->get();
        }
        $view->with('productss', $products);
        $view->with('carts', $carts);
    }
}
