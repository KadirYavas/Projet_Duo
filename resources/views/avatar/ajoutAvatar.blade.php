@extends('layout.master')

@section('title')
    Create Avatar | Projet Duo
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item" aria-current="page"><a class="text-dark" href="{{ route('homepage') }}">Home</a></li>
    <li class="breadcrumb-item" aria-current="page"><a class="text-dark" href="{{ route('adminAvatar') }}">Liste des Avatars</a></li>
    <li class="breadcrumb-item active" aria-current="page">Ajouter un Avatar</li>
@endsection


@section('h2')
    Remplissez le formulaire
@endsection

@section('style')
    <style>

    </style>
@endsection

@section('content')

    <form class="m-3" action="{{ route('envoiAvatar') }}" method="post" enctype="multipart/form-data">
        @csrf
        <section class="text-left mb-2">
            <div class="mb-2">
                <label for="nom">Nom de l'Avatar</label>
                <input class="form-control @error('nom') is-invalid @enderror" type="text" name="nom" id="nom" placeholder="Veuillez saisir le nom de l'avavatar">
                @error('nom')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="text-left mb-3">
                <label for="avatar">Choissisez une Image</label>
                <input class="form-control @error('avatar') is-invalid @enderror" type="file" name="avatar" id="avatar">
                @error('avatar')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button class="btn btn-outline-danger text-dark font-weight-bold" type="submit">Sauvegarder</button>
        </section>
    </form>
@endsection

