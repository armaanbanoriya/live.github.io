<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Orderproduct;
use App\Order;
use Illuminate\Support\Facades\Auth;



class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.login');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
 
    public function placedorders() 
      {
        
        $data=Order::with('orderproducts')->get();
        return view('admin.order.order',compact('data'));
    }

    public function accountdetails($order_id)
    {
        $data=Order::find($order_id);
        return view('admin.order.accountdetails',compact('data'));
    }

    public function invoice($order_id)
    {
        // $orproducts=$data=Order::with('orderproducts')->get();
        $data=Order::find($order_id);
        return view('front.invoice',compact('data'));
    }
 


}
