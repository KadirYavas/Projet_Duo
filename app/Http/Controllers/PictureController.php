<?php

namespace App\Http\Controllers;

use App\Http\Requests\PictureRequest;
use App\Picture;
use App\Category;
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
        $categorie = Category::all();
        return view('images.listeImage' , compact('pictures', 'categorie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $categorie = Category::all();
        return view('images.createImage', compact('categorie'));
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

        $pictures->save();
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
    public function edit($id)
    {
        $picture = Picture::find($id);
        return view('images/editImage', compact('picture'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  \App\Picture  $picture
     * @return Response
     */
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'nom' => 'required|min:4',
        //     'image' => 'required'
        // ]);

        // $storage = Storage::disk('public')->put('', $request->file('avatar'));

        $avatar = Avatar::find($id);
        $avatar->image = $storage;

        $avatar->save();

        return redirect()->route('listeImage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Picture  $picture
     * @return Response
     */
    public function destroy($id)
    {
        $picture = Picture::find($id);
        Storage::disk('public')->delete($picture->image);
        $picture->delete();
        return redirect()->route('listeImage');
    }
    public function download($id)
    {
        $picture = Picture::find($id);
        return Storage::disk('public')->download($picture->image, $picture->nom);
    }
}
