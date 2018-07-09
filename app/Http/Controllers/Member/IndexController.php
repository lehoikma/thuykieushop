<?php

namespace App\Http\Controllers\Member;

use App\Models\News;
use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Models\Products;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::where('status','=', 0)->where('status_display', 1)->orderBy('id', 'desc')->limit(7)->get();
        $newsKM = News::where('status','=', 1)->orderBy('id', 'desc')->limit(2)->get();
        $productsKM = Products::where('price_km', '>', 0)->where('status', 1)->limit(12)->get();
        $productAll = Products::limit(8)->get();
        $orders = Orders::
            // where('km', 0)
            select('*', DB::raw('count(product_id) as totalUser'))
            ->groupBy('product_id')
            ->orderBy('totalUser', 'desc')
            ->get();

        return view('member.index', [
            'news' => $news,
            'newsKM' => $newsKM,
            'productsKM' => $productsKM,
            'productAll' => $productAll,
            'orders' => $orders,
        ]);
    }

}
