<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Cloudder;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $galleries = Gallery::orderBy('created_at','DESC')->get();

        return view('gallery.index',['galleries'=>$galleries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('gallery.create');
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
            'title'=>'required|max:255',
            'cover'=>'image|mimes:jpg,jpeg,png,svg|max:1028'
        ]);
        
        // $cover_image_original = $request->file('cover')->getClientOriginalName();
        // $cover_image_name = pathinfo($cover_image_original, PATHINFO_FILENAME);
        // $cover_image_extension = $request->file('cover')->getClientOriginalExtension();

        // $current_time = time();
        // $cover_image = $current_time.'.'.$cover_image_extension;
        // $request->file('cover')->storeAs('public/img/albums/',$cover_image);

        Cloudder::upload($request->file('cover'),null);

        $cover_image = Cloudder::getResult();

        $gallery = new Gallery;
        $gallery->title = $request->input('title');
        $gallery->cover = $cover_image["url"];
        $gallery->by = $request->input('by');

        $gallery->save();

        return redirect('/gallery')->with('success','Gallery Successfully created!');
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

        $gallery = Gallery::find($id);

        return view('gallery.show',['gallery'=>$gallery]);
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
