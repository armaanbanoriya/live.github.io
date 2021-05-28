<?php

namespace App\Http\Controllers;

use App\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function create()
    {
        return view('admin.coupon.create');
    }

    public function save(Request $a)
    { 
        $data= new Coupon;
        $data->coupon_code=$a->coupon_code;
        $data->amount=$a->amount;
        $data->amount_type=$a->amount_type;
        $data->expiry_date=$a->expiry_date;

        $data->save();

        if($data)
        {
            return redirect('coupon/display')->with('message','Inserted Successfully');
        }
    }

    public function display()
    {
        $data= Coupon::all();
        return view('admin.coupon.display',compact('data'));
    }
    public function view($id)
    {
        $data= Coupon::find($id);
        return view('admin.coupon.view',compact('data'));
    }
    public function edit($id)
    {
        $data= Coupon::find($id);
        return view('admin.coupon.edit',compact('data'));
    }

    public function update(Request $a)
    {
        $data=Coupon::find($a->id);
        $data->coupon_code=$a->coupon_code;
        $data->amount=$a->amount;
        $data->amount_type=$a->amount_type;
        $data->expiry_date=$a->expiry_date;

        $data->save();

        if($data)
        {
            return redirect('coupon/display')->with('message','Fields Updated');
        }
        
    }
    

    public function delete($id)
    {
        $data=Coupon::find($id);
        $delete= $data->delete();

        if($data)
        {
            return redirect('coupon/display')->with('message','Record Deleted Successfully');
        }
    }
}
