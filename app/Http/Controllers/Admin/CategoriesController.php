<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categories;
use App\Models\Orders;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::where('parent_id', 0)->get();
        return view('admin.categories_index', ['categories' => $categories]);
    }

    public function add(Request $request)
    {
        $orders = array_pluck(Categories::all(), 'orders');
        Categories::create([
            'title' => $request['title'],
            'parent_id' => $request['parent_id'],
            'slug' => str_slug($request['title']),
            'name_seo' => $request['ten_seo'],
            'keyword' => $request['keyword'],
            'description' => $request['description'],
            'orders' => $request['orders'] != '' ? $request['orders'] : (int)max($orders)+1,
            'status' => $request['status'] or 0
        ]);
        return redirect()->route('category_list');
    }

    public function listCategory()
    {
        $categoriesParent = Categories::where('parent_id', 0)->get();
        $categories = Categories::all();

        return view('admin.category_list', [
            'categoriesParent' => $categoriesParent,
            'categories' => $categories
        ]);
    }

    public function deleteCategory(Request $request)
    {
        Categories::destroy($request['id']);
        return redirect()->route('category_list');
    }

    public function editCategory($id)
    {
        $categories = Categories::where('parent_id', 0)->get();
        $category = Categories::find($id);
        if (!empty($category)) {
            return view('admin.category_edit', ['category' => $category, 'categories' => $categories]);
        }
        return redirect()->route('admin_top');
    }

    public function update(Request $request)
    {
        $orders = array_pluck(Categories::all(), 'orders');
        Categories::where('id', $request['idCategory'])
            ->update([
                'title' => $request['title'],
                'parent_id' => $request['parent_id'],
                'slug' => str_slug($request['title']),
                'name_seo' => $request['ten_seo'],
                'keyword' => $request['keyword'],
                'description' => $request['description'],
                'orders' => $request['orders'] != '' ? $request['orders'] : (int)max($orders)+1,
                'status' => $request['status'] or 0
            ]);
        return redirect()->route('category_list');
    }
}
