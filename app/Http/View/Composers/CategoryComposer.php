<?php
 
namespace App\Http\View\Composers;

use App\Models\Category;
use App\Repositories\UserRepository;
use Illuminate\View\View;
 
class CategoryComposer
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
        $category = Category::select('id','name')->orderBy('name')->get();
        $view->with('categories', $category);
    }
}