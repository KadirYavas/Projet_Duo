<?php

namespace App\Http\Controllers;

use App\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entreprise = Entreprise::all();
        return view('entreprise/administration', compact('entreprise'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entreprise/ajoutEntreprise');
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
            'nom' => 'required|max:30|min:4',
            'nb_employe' => 'integer|max:5',
            'logo' => 'required|file',
        ]);

        $storage = Storage::disk('public')->put('', $request->file('logo'));

        $entreprise = new Entreprise();
        $entreprise->nom = $request->input('nom');
        $entreprise->nb_employe = $request->input('nombre');
        $entreprise->logo = $storage;
        $entreprise->save();

        return redirect()->route('adminEntreprise');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function show(Entreprise $entreprise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entreprise = Entreprise::find($id);
        return view('entreprise/editEntreprise', compact('entreprise'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|min:4',
            'nb_employe' => 'integer|max:5',
            // 'logo' => 'required|file',
        ]);

        // $storage = Storage::disk('public')->put('', $request->file('avatar'));
        
        $entreprise = Entreprise::find($id);
        $entreprise->nom = $request->input('nom');
        $entreprise->nb_employe = $request->input('nombre');
        // $entreprise->logo = $storage;
        $entreprise->save();

        return redirect()->route('adminEntreprise');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entreprise = Entreprise::find($id);
        Storage::disk('public')->delete($entreprise->logo);
        $entreprise->delete();
        return redirect()->route('adminEntreprise');
    }
    public function download($id)
    {
        $entreprise = Entreprise::find($id);
        return Storage::disk('public')->download($entreprise->logo, $entreprise->nom);
    }
}
