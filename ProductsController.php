<?php

namespace App\Http\Controllers\Member;

use App\Models\Categories;
use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listAll()
    {
        $products = Products::orderBy('created_at', 'desc')->paginate(36);
        return view('member.product_listAll', ['products' => $products]);
    }

    public function detail($slug, $id)
    {
        $product = Products::find($id);
        $product->view = $product['view']+1;
        $product->save();
        $productsAll = Products::limit(5)->orderBy('id', 'desc')->get();
        return view('member.products_detail', [
            'product' => $product,
            'productsAll' => $productsAll
        ]);
    }

    public function getProductCategory($slug, $id)
    {
        $category = Categories::find($id);
        $category1 = Categories::where('parent_id', $id)->pluck('id')->toArray();
        if (!empty($category1)) {
            array_push($category1, (int) $id);
            $category = Categories::whereIn('id', $category1)->get();
            return view('member.product_category', ['category' => $category]);
        }
        return view('member.product_category', ['category' => $category]);
    }

    public function searchProducts(Request $request)
    {
        $keyWord = $request->all()['search'];
        $searchs = Products::where('name', 'like', '%'.$keyWord.'%')->get();
        return view('member.product_search', ['searchs' => $searchs]);
    }

    public function searchProductsPrice(Request $request)
    {
        $category = $request->all()['category'];
        $priceStart = $request->all()['price_start'];
        $priceEnd = $request->all()['price_end'];

        $products = Products::orderBy('products.id', 'desc');

        if(!empty($priceStart))
            $products->where('price', '>=', $priceStart);

        if(!empty($priceEnd))
            $products->where('price', '<=', $priceEnd);

        if(!empty($category))
            $products->whereHas('categories', function($q) use ($category) {
                $q->where('categories.id', $category);
            });

        return view('member.product_search_price', ['searchs' => $products->get()]);
    }

    public function sale()
    {
        $productsKM = Products::where('price_km', '>', 0)->where('status', 1)->orderBy('id', 'desc')->paginate(100);
        return view('member.product_sale',[
            'productsKM' => $productsKM
        ]);
    }

    public function productBig()
    {
        $orders = Orders::where('km', 0)
            ->select('*', DB::raw('count(product_id) as totalUser'))
            ->groupBy('product_id')
            ->orderBy('totalUser', 'desc')
            ->get();
        return view('member.product_big', ['orders' => $orders]);
    }
}
