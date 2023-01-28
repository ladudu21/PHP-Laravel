<?php

namespace App\Http\Services\Category;

use App\Models\Category;
use Illuminate\Support\Facades\Session;

class CategoryService
{
    public function create($request)
    {
        try {
            Category::create([
                'name' => (string) $request->input('name')
            ]);
            Session::flash('success', 'Add successfully');
        } catch (\Exception $ex) {
            Session::flash('error', 'Add error');
            return false;
        }
        return true;
    }

    public function get()
    {
        return Category::orderbyDesc('id')->paginate(10);
    }

    public function delete($request)
    {
        $category = Category::where('id', $request->input('id'));
        if ($category) {
            return $category->delete();
        }
        return false;
    }

    public function update($request, $category): bool
    {
        $category->name = (string) $request->input('name');
        $category->save();
        Session::flash('success', 'Update successfully');
        return true;
    }

    public function getById($id)
    {
        return Category::where('id', $id)->firstOrFail();
    }

    public function getProducts($category, $request)
    {
        $query = $category->products()
            ->select('id', 'name', 'price', 'thumb');

        if ($request->input('search')) {
            return $query->where('name', 'LIKE', '%'.$request->input('search').'%')->paginate(8);
        }

        if ($request->input('price')) {
            $query->orderBy('price', $request->input('price'));
        }

        return $query
            ->orderByDesc('id')
            ->paginate(8)
            ->withQueryString();
    }
}
