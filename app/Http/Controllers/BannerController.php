<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Banner;

class BannerController extends Controller
{
    public function create(Request $a)
    {
      
        return view('admin.banner.create');
    }

    public function save(Request $a)
    {
        $a->validate([
            'title'=>'required','autofocus', 
            'headingtitle'=>'required',
            'boldheadingtitle'=>'required',
            'url'=>'required',
            'image'=>'mimes:jpeg,jpg,jfif|max:5000',
        ]);
        $data = new Banner;
        $data->title=$a->title;
        $data->headingtitle=$a->headingtitle;
        $data->boldheadingtitle=$a->boldheadingtitle;
        
        $data->url=$a->url;
         ///                    Image
        $file=$a->file('image');     
        // dd($file); 
        // exit();
      $filename = 'image'. time().'.'.$a->image->extension();
        // dd($filename);
        // exit(); 
       $file->move("upload/",$filename); 
       $data->image=$filename;

      

    //    print('<pre>');
    //     print_r($a->all());
        
       $data->save();
       
       if($data)
       {
           return redirect('banner/display')->with('message','Save Successfully');
       }
    }

    public function display()
    {
        $data= Banner::all();
        return view('admin.banner.display',compact('data'));
    }

    public function view($id)
    {
       $data= Banner::find($id);
       return view('admin.banner.view',compact('data'));
    }

    public function edit($id)
    {
        $data= Banner::find($id);
        return view('admin.banner.edit',compact('data'));
    }

    public function update(Request $a)
    {
        if($a->hasFile('image'))
        { 
     
          $data = Banner::find($a->id);
          
          $data->title=$a->tile;
          $data->headingtitle=$a->headingtitle;
          $data->boldheadingtitle=$a->boldheadingtitle;
          $data->url=$a->url;
           ///                    Image
          $file=$a->file('image');     
          // dd($file);
          // exit();
        $filename = 'image'. time().'.'.$a->image->extension();
          // dd($filename);
          // exit(); 
         $file->move("upload/",$filename); 
         $data->image=$filename;   
    
      //    print('<pre>');
      //     print_r($a->all());
          
         $data->save();
            if($data)
            {
                return redirect('banner/display')->with('message','Data Updated');
            }
    
            
            }else{
            $data= Banner::find($a->id);
            $data->title=$a->title;
            $data->headingtitle=$a->headingtitle;
            $data->boldheadingtitle=$a->boldheadingtitle;
            $data->url=$a->url;
            $data->save();
            if ($data) {
                return redirect('banner/display')->with('message','Record Deleted');
            }
    
    
        }
    }

    public function delete($id)
    {
        $data= Banner::find($id);
        $delete=$data->delete();
        
        if ($data) {
            return redirect('banner/display')->with('message','Record Deleted');
        }

        

    }
}
