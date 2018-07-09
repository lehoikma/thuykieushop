<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrdersRequest;
use App\Mail\OrderAdminSendMailComplete;
use App\Mail\OrderShippedComplete;
use App\Models\Members;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function saveSessionOrders(Request $request)
    {
        $request->session()->push('hello.cart', $request['idProductOrders']);
        return redirect()->route('member_orders');
    }

    public function memberOrders(Request $request)
    {
        $productID = $request->session()->get('hello')['cart'] ? $request->session()->get('hello')['cart'] : 0;
        $products = [];
        if (!empty($productID)) {
            $products = DB::table('products')
                ->whereIn('id', $productID)
                ->get();
        }
        return view('member.member_orders', ['products' => $products]);
    }

    public function deleteSession(Request $request, $id)
    {
        $productID = $request->session()->get('hello')['cart'];
        if(($key = array_search($id, $productID)) !== false) {
            unset($productID[$key]);
        }
        Session::put('hello.cart', $productID);
        return redirect()->route('member_orders');

    }

    public function payOrders(Request $request)
    {
        $productID = $request->session()->get('hello')['cart'] ? $request->session()->get('hello')['cart'] : 0;
        $products = [];
        if (!empty($productID)) {
            $products = DB::table('products')
                ->whereIn('id', $productID)
                ->get();
        }
        return view('member.pay_orders', ['products' => $products]);
    }

    public function payOrdersSave(OrdersRequest $request)
    {
        try {
            DB::beginTransaction();
            $member = Members::create([
                'name' => $request['name'],
                'phone' => $request['phone'],
                'address' => $request['address'],
                'mail' => $request['email']
            ]);
            $productID = $request->session()->get('hello')['cart'];
            $products = DB::table('products')
                ->whereIn('id', $productID)
                ->get();

            $orders = [];

            foreach ($products as $product) {
                $orders[] =Orders::create([
                    'product_id' => $product->id,
                    'member_id' => $member['id'],
                    'km' => $product->price_km != null ? 1 : 0,
                    'numbers' => array_count_values($request->session()->get('hello')['cart'])[$product->id],
                    'price_orders' => $product->price_km ? $product->price_km*array_count_values($request->session()->get('hello')['cart'])[$product->id]
                        : $product->price*array_count_values($request->session()->get('hello')['cart'])[$product->id],
                ]);
            }

            $content = [
                'name' => $request['name'],
                'phone' => $request['phone'],
                'address' => $request['address'],
                'mail' => $request['email'],
                'body'=> $orders
            ];
            $mailAdmin = 'thuykieushopping@gmail.com';
            Mail::to($request['email'])->send(new OrderShippedComplete($content));
            Mail::to($mailAdmin)->send(new OrderAdminSendMailComplete($content));
            $request->session()->forget('hello');
            DB::commit();
            return redirect()->route('pay_orders_done');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('home');
        }
    }

    public function payOrdersDone()
    {
        return view('member.payOrders_done');
    }
}
