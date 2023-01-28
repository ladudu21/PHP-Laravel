<?php

namespace App\Http\Controllers;

use App\Http\Services\CartService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    private $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function index(Request $request)
    {
        $result = $this->cartService->create($request);
        if ($result === false) return redirect()->back();
        return redirect('/cart');
    }

    public function show()
    {
        $products = $this->cartService->getProducts();
        return view('carts.list', [
            'title' => 'Cart',
            'products' => $products,
            'carts' => Session::get('carts')
        ]);
    }

    public function update(Request $request)
    {
        $this->cartService->update($request);
        return redirect('/cart');
    }

    public function delete($id)
    {
        $this->cartService->delete($id);
        return redirect('/cart');
    }

    public function addCart(Request $request)
    {
        $this->cartService->addCart($request);

        return redirect()->back();
    }
}
