<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\FormRequestC;
use App\Http\Services\Category\CategoryService;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }


    public function create()
    {
        return view('admin.categories.add', [
            'title' => 'Add Category'
        ]);
    }

    public function store(FormRequestC $request)
    {
        $result = $this->categoryService->create($request);
        return redirect()->back();
    }

    public function index()
    {
        return view('admin.categories.list', [
            'title' => 'Categories',
            'categories' => $this->categoryService->get()
        ]);
    }

    public function delete(Request $request)
    {
        $result = $this->categoryService->delete($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Delete successfully'
            ]);
        }

        return response()->json([
            'error' => true
        ]);
    }

    public function show(Category $category)
    {
        return view('admin.categories.edit', [
            'title' => 'Edit Category',
            'category' => $category
        ]);
    }

    public function update(Category $category, FormRequestC $request)
    {
        $this->categoryService->update($request, $category);
        return redirect('/admin/categories/list');
    }
}
