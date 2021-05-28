<?php

namespace App\Http\Controllers;

use App\Subimage;
use Illuminate\Http\Request;

class SubimageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Subimages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $a)
    {
        $data= new Subimage;
        $file=$a->file('image');     
        // dd($file);
        // exit();
      $filename = 'image'. time().'.'.$a->image->extension();
        // dd($filename);
        // exit(); 
       $file->move("upload/",$filename); 
       $data->image=$filename;


       $data->save();

       if($data)
       {
           return redirect('subimages/display')->with('message','Save Successfully');
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subimage  $subimage
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       $data= Subimage::all();
       return view('admin.Subimages.display',compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subimage  $subimage
     * @return \Illuminate\Http\Response
     */
    public function edit(Subimage $subimage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subimage  $subimage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subimage $subimage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subimage  $subimage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subimage $subimage)
    {
        //
    }
}
