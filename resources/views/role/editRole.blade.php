@extends('layout.master')

@section('title')
    Edit Role | Projet Duo
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item" aria-current="page"><a class="text-dark" href="{{ route('homepage') }}">Home</a></li>
    <li class="breadcrumb-item" aria-current="page"><a class="text-dark" href="{{ route('adminRole') }}">Liste des Avatars</a></li>
    <li class="breadcrumb-item active" aria-current="page">Role <b><i>{{$role->nom}}</i></b></li>
@endsection

@section('h2')
    Remplissez le formulaire
@endsection

@section('style')
    <style>

    </style>
@endsection

@section('content')

    <form class="m-3" action="{{ route('updateRole' , $role->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <section class="text-left mb-2">
            <div class="mb-2">
                <label for="nom">Nom du role</label>
                <input class="form-control @error('role') is-invalid @enderror" type="text" name="role" id="nom" placeholder="Veuillez saisir le role">
                @error('role')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button class="btn btn-outline-danger text-dark font-weight-bold" type="submit">Sauvegarder</button>
        </section>
    </form>
@endsection
