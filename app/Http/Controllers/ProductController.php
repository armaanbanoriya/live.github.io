<?php

namespace App\Http\Controllers;
 

use Illuminate\Http\Request;

use App\Category;
use App\Product;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image;

use Illuminate\Support\Facades\DB;

 
class ProductController extends Controller
{  
    public function create()
    { 

        $data= Category::all();
        //  $data= DB::table('categories')
        //  ->join('products','categories.id',"=",'products.category_id')
        //  ->get();
      return view('admin.product.addproduct',compact('data'));
    }

    public function save(Request $a)
    {
        $data = new Product;
        $data->category_id=$a->category_id;
        $data->product_name=$a->product_name;
        $data->product_code=$a->product_code;
        $data->product_size=$a->product_size;
        $data->product_description=$a->product_description;
         ///                    Image
        $file=$a->file('product_image');  
      //   File Size
 
      //   End File Size
        // dd($file);
        // exit();
      $filename = 'image'. time().'.'.$a->product_image->extension();
        // dd($filename);
        // exit(); 
       $file->move("upload/",$filename); 
       $data->product_image=$filename;

       $data->product_price=$a->product_price;
       $data->product_quantity=$a->product_quantity;

    //    print('<pre>');
    //     print_r($a->all());
        
       $data->save();
       
       if($data)
       {
           return redirect('product/display')->with('message','Save Successfully');
       }
    }

    public function display()
    { 
       $data= Product::all();
       return view('admin.product.viewproduct',compact('data'));
    }


    public function show($id)
    {
       $data= Product::find($id); 
       return view('admin.product.show',compact('data'));
    }

    public function edit($id)
    { 
       
      $as=Category::all();
     $data=Product::find($id);
     return view('admin.product.edit',compact('data','as'));
   }

   public function update(Request $a)
   {
      // echo '<pre>';
      // print_r($a->all());
      // die;
    if($a->hasFile('image'))
    { 

      $data = Product::find($a->id);
      
      $data->category_id=$a->category_id;
      $data->product_name=$a->product_name;
      $data->product_code=$a->product_code;
      $data->product_size=$a->product_description;
       ///                    Image
      $file=$a->file('product_image');     
      // dd($file);
      // exit();
    $filename = 'image'. time().'.'.$a->product_image->extension();
      // dd($filename);
      // exit(); 
     $file->move("upload/",$filename); 
     $data->product_image=$filename;

     $data->product_price=$a->product_price;
     $data->product_quantity=$a->product_quantity;

  //    print('<pre>');
  //     print_r($a->all());
      
     $data->save();
        if($data)
        {
            return redirect('product/display')->with('message','Data Updated');
        }

        
        }else{
        $data= Product::find($a->id);
        //$data1=Product::pluck('name','id');

        $data->category_id=$a->category_id;
        
        $data->product_name=$a->product_name;
        $data->product_code=$a->product_code;
        $data->product_size=$a->product_description;
        $data->product_price=$a->product_price;
        $data->product_quantity=$a->product_quantity;
        $data->save();

      }
   }

      public function delete($id)
      {
         $data=Product::find($id);

         $delete=$data->delete();
         if($data)
         {
             return redirect('product/display')->with('message','deleted successfully');
         }
      }

}     