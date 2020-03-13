<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Avatar;
use App\User;
use App\Entreprise;
use App\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $avatar = Avatar::all();
        $entreprise = Entreprise::all();
        $role = Role::all();
        return view('user/administration', compact('user', 'avatar', 'entreprise', 'role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $avatar = Avatar::all();
        $entreprise = Entreprise::all();
        $role = Role::all();
        return view('user/ajoutUser', compact('avatar', 'entreprise', 'role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = new User();
        $user->nom = $request->input('nom');
        $user->age = $request->input('age');
        $user->email = $request->input('email');
        $user->avatars_id = $request->input('choix');
        $user->roles_id = $request->input('choixEntre');
        $user->entreprises_id = $request->input('choixRole');
        $user->save();

        return redirect()->route('adminUser');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $avatar = Avatar::all();
        return view('user/editUser', compact('user', 'avatar'));
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
        // $request->validate([
        //     'nom' => 'required|min:4',
        //     'image' => 'required'
        // ]);

        $user = User::find($id);
        $user->nom = $request->input('nom');
        $user->age = $request->input('age');
        $user->email = $request->input('email');
        $user->avatars_id = $request->input('choix');

        $user->save();

        return redirect()->route('adminUser');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('adminUser');
    }
}
