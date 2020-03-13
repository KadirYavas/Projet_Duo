@extends('layout.master')

@section('title')
    Edit Picture | Projet Duo
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item" aria-current="page"><a class="text-dark" href="{{ route('homepage') }}">Home</a></li>
    <li class="breadcrumb-item" aria-current="page"><a class="text-dark" href="{{ route('adminPicture') }}">Liste des Avatars</a></li>
    <li class="breadcrumb-item active" aria-current="page">Editer</li>
@endsection

@section('h2')
    Remplissez le formulaire
@endsection

@section('style')
    <style>

    </style>
@endsection

@section('content')

    <form class="m-3" action="{{ route('updatePicture' , $picture->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <section class="text-left mb-2">
            <div class="text-left mb-3">
                <label for="avatar">Choissisez une Image</label>
                <input class="form-control @error('picture') is-invalid @enderror" type="file" name="picture" id="avatar">
                @error('picture')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button class="btn btn-outline-danger text-dark font-weight-bold" type="submit">Sauvegarder</button>
        </section>
    </form>
@endsection
