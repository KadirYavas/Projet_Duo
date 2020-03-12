@extends('layout.master')

@section('title')
    Liste Image | Projet Duo
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item" aria-current="page"><a class="text-dark" href="{{ route('homepage') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Liste Images</li>
@endsection

@section('h2')
    Liste d'images
@endsection

@section('content')
    <a href="{{ route('createImage') }}">
        <button type="button" class="btn btn-outline-dark btn-lg mb-4">Ajouter une image</button>
    </a>
    <table class="table table-bordered table-hover shadow">
        <thead>
        <tr>
            <th>ID</th>
            <th>Aperçu</th>
            <th>categorie</th>
            <th class="col-3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pictures as $item)
            <tr>
                <td>{{ $picture->id }}</td>
                <td><img width="50" src='{{ asset('storage/'.$item->image) }}'></td>
                @foreach($category as $cat)
                    @if ($item->id === $cat->id)
                        <td>{{ $cat->nom }}</td>
                    @endif
                @endforeach
                <td>
                    <a href="#"><button class="btn btn-outline-primary m-1">Voir</button></a>
                    <a href="#"><button class="btn btn-outline-info m-1">Modifier</button></a>
                    <a href="#"><button class="btn btn-outline-danger">Supprimer</button></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
