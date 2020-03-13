@extends('layout.master')

@section('title')
    Liste Categories | Projet Duo
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item" aria-current="page"><a class="text-dark" href="{{ route('homepage') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Liste Des Categories</li>
@endsection

@section('h2')
    Index des Categories
@endsection

@section('content')
    <a href="{{ route('createCategory') }}">
        <button type="button" class="btn btn-outline-dark btn-lg mb-4">Ajouter une Categorie</button>
    </a>
    <table class="table table-bordered table-hover shadow">
        <thead>
        <tr>
            <th>ID</th>
            <th>nom</th>
            <th class="col-3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($category as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nom }}</td>
                <td>
                    <a href="{{ route('editCategory' , $item->id) }}"><button class="btn btn-outline-info m-1">Modifier</button></a>
                    <a href="{{ route('destroyCategory' , $item->id) }}"><button class="btn btn-outline-danger">Supprimer</button></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
