<?php

namespace App\Http\Controllers;

use App\SocialMedia;
use Illuminate\Http\Request;

use Session;
use URL;

class SocialMediaController extends Controller
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
    public function create()
    {
        return view('social_media.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);
        $file = $request->file('image');
        //Move Uploaded File
        $destinationPath = 'uploads';
//        $file->move($destinationPath,$file->getClientOriginalName());
        $myRandom = rand(1, 10000);
        $myPath = $myRandom . "." . $file->getClientOriginalExtension();
        $file->move($destinationPath, $myPath);
        $data = $request->all();
        $request_type = new SocialMedia($data);
        $request_type->fill($data);
        $request_type->clients_id=Session::get('id');
        $request_type->image=URL::to('/') . "/uploads/" . $myPath;
        $request_type->save();
        Session::put('social_media',2);
        return redirect('service');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function show(SocialMedia $socialMedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function edit(SocialMedia $socialMedia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SocialMedia $socialMedia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialMedia $socialMedia)
    {
        //
    }
}
