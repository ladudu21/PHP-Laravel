<?php

namespace App\Http\Services\Product;

use App\Models\Category;
use App\Models\Product;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class ProductAdminService
{
    public function getCategories()
    {
        return Category::all();
    }

    public function create($request)
    {
        try {
            $request->except('_token');
            Product::create($request->all());
            Session::flash('success', 'Add successfully');
        } catch (Exception $e) {
            Session::flash('error', 'Add error');
            Log::info($e->getMessage());
            return false;
        }
        return true;
    }

    public function getAll()
    {
        return Product::with('category')->orderbyDesc('id')->paginate(10);
    }

    public function update($request, $product): bool
    {
        try {
            $product->fill($request->input());
            $product->save();
            Session::flash('success', 'Update successfully');
        } catch (Exception $err) {
            Session::flash('error', 'Cannot update');
            return false;
        }
        return true;
    }

    public function delete($request)
    {
        $product = Product::where('id', $request->input('id'));
        if ($product) {
            return $product->delete();
        }
        return false;
    }
}
