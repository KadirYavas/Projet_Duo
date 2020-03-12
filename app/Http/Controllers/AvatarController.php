<?php

namespace App\Http\Controllers;

use App\Avatar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avatar = Avatar::all();
        return view('avatar/administration', compact('avatar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('avatar/ajoutAvatar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'avatar' => 'required|file',
        ]);

        $storage = Storage::disk('public')->put('', $request->file('avatar'));

        $avatar = new Avatar();
        $avatar->nom = $request->input('nom');
        $avatar->image = $storage;
        $avatar->save();

        return redirect()->route('adminAvatar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function show(Avatar $avatar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $avatar = Avatar::find($id);
        return view('avatar/editAvatar', compact('avatar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|min:4',
            // 'image' => 'required'
        ]);

        // $storage = Storage::disk('public')->put('', $request->file('avatar'));
        
        $avatar = Avatar::find($id);
        $avatar->nom = $request->input('nom');
        // $avatar->image = $storage;

        $avatar->save();

        return redirect()->route('adminAvatar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $avatar = Avatar::find($id);
        Storage::disk('public')->delete($avatar->image);
        $avatar->delete();
        return redirect()->route('adminAvatar');
    }
    public function download($id)
    {
        $avatar = Avatar::find($id);
        return Storage::disk('public')->download($avatar->image, $avatar->nom);
    }
}
