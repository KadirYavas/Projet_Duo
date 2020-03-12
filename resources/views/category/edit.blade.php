@extends('layout/master')

@section('title')
    Edit Category | Projet Duo
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item" aria-current="page"><a class="text-dark" href="{{ route('homepage') }}">Home</a></li>
    <li class="breadcrumb-item" aria-current="page"><a class="text-dark" href="{{ route('listeCategory') }}">Liste de Categories</a></li>
    <li class="breadcrumb-item active" aria-current="page">Editer <b><i>{{$category->nom}}</i></b></li>
@endsection

@section('h2')
    Remplissez le formulaire
@endsection

@section('style')
    <style>

    </style>
@endsection

@section('content')

    <form class="m-3" action="{{ route('updateCategory' , $category->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <section class="text-left mb-2">
            <div class="mb-2">
                <label for="category">Nom de la categorie</label>
                <input class="form-control @error('category') is-invalid @enderror" type="category" name="category" id="category" placeholder="Veuillez saisir le nom de la categorie">
                @error('category')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button class="btn btn-outline-danger text-dark font-weight-bold" type="submit">Sauvegarder</button>
        </section>
    </form>
@endsection
