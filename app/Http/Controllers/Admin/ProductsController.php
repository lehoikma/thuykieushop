<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categories;
use App\Models\Products;
use App\Models\Tags;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::all();
        return view('admin.products_index', ['categories' => $categories]);
    }

    public function add(Request $request)
    {
        $image = $request->file('fileToUpload');
        if (!empty($image)) {
            $filename  = time() . '.' . $image->extension();
            $image->move('upload/', $filename);
        }
        Products::create([
            'name' => $request['name'],
            'category_id' => $request['category_id'],
            'origin' => $request['origin'],
            'description' => $request['description'],
            'content' => $request['content'],
            'price' => $request['price'],
            'price_km' => $request['price_km'],
            'slug' => str_slug($request['name']),
            'avatar' => isset($filename) ? $filename :'',
            'tags_id' => $request['tags_id'],
            'key_word' => $request['key_word'],
            'ma_sv' => $request['ma_sv'],
            'status' => $request['status'],
            'khoi_luong' => $request['khoi_luong']
        ]);

        return redirect()->route('products_list');
    }

    public function edit($id)
    {
        $product = Products::find($id);
        $categories = Categories::all();
        return view('admin.product_edit', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function updateProduct(Request $request)
    {
        $image = $request->file('fileToUpload');

        if($image != null){
            $image = $request->file('fileToUpload');
            $filename  = time() . '.' . $image->extension();
            $image->move('upload/', $filename);
        }
        else{
            $products = Products::where('id', $request['idProduct'])->first();
            $filename = $products['avatar'];
        }

        Products::where('id', $request['idProduct'])
            ->update([
                'name' => $request['name'],
                'category_id' => $request['category_id'],
                'origin' => $request['origin'],
                'description' => $request['description'],
                'content' => $request['content'],
                'price' => $request['price'],
                'price_km' => $request['price_km'],
                'slug' => str_slug($request['name']),
                'avatar' => isset($filename) ? $filename :'',
                'tags_id' => $request['tags_id'],
                'key_word' => $request['key_word'],
                'ma_sv' => $request['ma_sv'],
                'status' => $request['status'],
                'khoi_luong' => $request['khoi_luong']
            ]);
        return redirect()->route('products_list');
    }

    public function listAll(Request $request)
    {
        $categoryId = $request['category'];
        if ($categoryId != null) {
            $products = Products::where('category_id', $categoryId)->orderBy('id', 'desc')->paginate(20);
        } else {
            $products = Products::orderBy('id', 'desc')->paginate(20);
        }
        $categories = Categories::all();
        return view('admin.products_listAll', [
            'products' => $products,
            'categories' => $categories
        ]);
    }


    public function deleteProducts(Request $request)
    {
        Products::destroy($request['id']);
        return redirect()->route('products_list');
    }
}
