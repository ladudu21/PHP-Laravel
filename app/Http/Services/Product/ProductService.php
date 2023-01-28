<?php

namespace App\Http\Services\Product;

use App\Models\Product;

class ProductService
{
    const LIMIT = 8;

    public function get($page = null)
    {
        return Product::select('id', 'name', 'price', 'thumb')
            ->orderByDesc('id')
            ->when($page != null, function ($query) use ($page) {
                $query->offset($page * self::LIMIT);
            })
            ->limit(self::LIMIT)
            ->get();
    }

    public function getAll($request)
    {
        $query = Product::select('id', 'name', 'price', 'thumb');

        if ($request->input('search')) {
            $query->where('name', 'LIKE', '%'.$request->input('search').'%')->paginate(12);
        }

        if ($request->input('price')) {
            $query->orderBy('price', $request->input('price'));
        }

        return $query
            ->orderBy('name')
            ->paginate(12)
            ->withQueryString();
    }

    public function show($id)
    {
        return Product::where('id', $id)->with('category')->firstOrFail();
    }
}
