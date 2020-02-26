<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Image;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($gallery_id)
    {
        //
        $gallery = Gallery::find($gallery_id);
        return view('images.create',['gallery'=>$gallery]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,gif|max:1024',
            'gallery_id' => 'required'
        ]);
        
        $gallery_id = $request->input('gallery_id');
        $image_with_extension = $request->file('image')->getClientOriginalName();
        $image_name_without_extension = pathinfo($image_with_extension, PATHINFO_FILENAME);
        $image_extenstion = $request->file('image')->getClientOriginalExtension();
        $image = time().'.'.$image_extenstion;

        $request->file('image')->storeAs('/public/img/albums/'.$gallery_id,$image);

        $new_image = new Image;
        $new_image->title = $request->input('title');
        $new_image->gallery_id = $gallery_id;
        $new_image->image = $image;
        $new_image->description = $request->input('description');
        $new_image->by = $request->input('by');

        $new_image->save();

        return redirect('/gallery/'.$gallery_id)->with('success','Image successfully added to gallery');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $image = Image::find($id);

        return view('images.show',['image'=>$image]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
