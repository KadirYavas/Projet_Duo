<?php

namespace App\Http\Controllers;

use App\Http\Requests\PictureRequest;
use App\Picture;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $pictures = Picture::all();
        return view('images.listeImage' , compact('pictures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('images.createImage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {

        $storage = Storage::disk('public')->put('', $request->file('file'));
        $pictures = new Picture();

        $pictures->image = $storage;
        $pictures->

        $pictures->save();
//        dd($pictures);
        return redirect()->route('listeImage');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Picture  $picture
     * @return Response
     */
    public function show(Picture $picture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Picture  $picture
     * @return Response
     */
    public function edit(Picture $picture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  \App\Picture  $picture
     * @return Response
     */
    public function update(Request $request, Picture $picture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Picture  $picture
     * @return Response
     */
    public function destroy(Picture $picture)
    {
        //
    }
}
