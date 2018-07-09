<?php

namespace App\Http\Controllers\Admin;

use App\Models\Orders;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orderNo = Orders::where('status', 'pending')->paginate(10);
        $orderYes = Orders::where('status', 'done')->paginate(10);
        return view('admin.list_orders', ['orderNo' => $orderNo, 'orderYes' => $orderYes]);
    }

    public function switchStatus($id)
    {
        $orders = Orders::find($id);
        if (!empty($orders)) {
            $orders->status = 'done';
            $orders->save();
        } else {
            return redirect()->route('admin_top');
        }
        return redirect()->route('list_orders');
    }

    public function switchStatus1($id)
    {
        $orders = Orders::find($id);
        if (!empty($orders)) {
            $orders->status = 'pending';
            $orders->save();
        } else {
            return redirect()->route('admin_top');
        }
        return redirect()->route('list_orders');
    }
}
