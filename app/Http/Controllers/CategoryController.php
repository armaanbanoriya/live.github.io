<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function addcategory()
    {
        return view('admin.category');
    }

    public function save(Request $a)

    {
        // print_r($a->all());
        // die;
        

        // echo "<pre>";
        // print_r($a->file('image'));

        $file=$a->file('image');
        // dd($file);
        // exit();
       $filename = 'image'. time().'.'.$a->image->extension();
    //     // dd($filename);
    //     // exit();
       $file->move("upload/",$filename);
        //  dd($file);
        //  exit;
 
        $data = new Category;
        $data->name=$a->name;
        $data->description=$a->description;
        $data->image=$filename;

        $data->save();  
        if($data)
       {
           return redirect('category/display')->with('message','Save Successfully');
       }     
        
    }
 
    public function display()
    {
        $data= Category::all();
        return view('admin.display',compact('data'));
    } 

    public function view($id)
    {
        $data = Category::find($id);
        return view('admin.view',compact('data'));
    }

    public function edit($id) 
    {
        $data= Category::find($id); 
        return view('admin.edit',compact('data'));
    }

    public function update(Request $a)
    {
        if($a->hasFile('image'))
        {
            $file =$a->file('image');
            // print_r($a->all());
        // die;

            // dd($file);
            // exit();
           $filename = 'image'. time().'.'.$a->image->extension();
        //     // dd($filename);
        //     // exit();
           $file->move("upload/",$filename);
            //  dd($file);
            //  exit;
    
            $data=  new Category();
            $data= Category::find($a->id);

            $data->name=$a->name;
            $data->description=$a->description;
            $data->image=$filename;

            $data->save();

            if($data)
            {
                return redirect('category/display')->with('message','Data Updated');
            }

            
            }else{
            $data=Category::find($a->id);
            $data->name=$a->name;
            $data->save();
    
    }
}
    public function delete($id)
    {
        $data=Category::find($id);

        $delete=$data->delete();
        if($data)
        {
            return redirect('category/display')->with('message','deleted successfully');
        }
    }


}
