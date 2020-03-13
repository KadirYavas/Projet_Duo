@extends('layout/master')

@section('title')
    Create Image | Projet Duo
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item" aria-current="page"><a class="text-dark" href="{{ route('homepage') }}">Home</a></li>
    <li class="breadcrumb-item" aria-current="page"><a class="text-dark" href="{{ route('listeImage') }}">Liste d'Images</a></li>
    <li class="breadcrumb-item active" aria-current="page">Ajouter une image</li>
@endsection

@section('h2')
    Ajouter une Image
@endsection

@section('style')
    <style>

    </style>
@endsection

@section('content')

    <form class="m-3" action="{{ route('storeImage') }}" method="post" enctype="multipart/form-data">
        @csrf
        <section class="text-left mb-2">
            <div class="text-left mb-3">
                <label for="file">Choissisez une Image</label>
                <input class="form-control @error('file') is-invalid @enderror" type="file" name="file" id="file">
                @error('file')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-2">
                <label for="category">Nom de la categorie</label>
                <select class="form-control @error('category') is-invalid @enderror" name="category" id="category" placeholder="Veuillez saisir le nom de la categorie">
                    <option value="">Choose...</option>
                @foreach($categorie as $item)
                <option value="{{$item->id}}">{{ $item->nom }}</option>
                    @endforeach
                </select>
                @error('category')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button class="btn btn-outline-danger text-dark font-weight-bold" type="submit">Ajoutez l'Image</button>
        </section>
    </form>
@endsection
