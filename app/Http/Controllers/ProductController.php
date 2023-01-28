<?php

namespace App\Http\Controllers;

use App\Http\Services\Product\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index($id , $slug)
    {
        $product = $this->productService->show($id);
        return view('products.details', [
            'title' => $product->name,
            'product' => $product
        ]);
    }
}
