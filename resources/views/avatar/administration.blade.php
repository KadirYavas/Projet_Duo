@extends('layout.master')

@section('title')
    Liste Avatar | Projet Duo
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item" aria-current="page"><a class="text-dark" href="{{ route('homepage') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Avatar</li>
@endsection

@section('h2')
    Liste des Avatars
@endsection

@section('content')
@if(count($avatar)<=4)
    <a href="{{route('ajoutAvatar')}}">
        <button type="button" class="btn btn-outline-dark btn-lg mb-4">Ajouter un Avatar</button>
    </a>
    @endif
    <table class="table table-bordered table-hover shadow">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Aperçu</th>
            <th class="col-3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($avatar as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nom }}</td>
                <td><img src="{{asset('storage/'.$item->image)}}" alt="" height="50px"></td>
                <td class="col-5">
                    <a href="{{route('downloadAvatar', $item->id)}}"><button class="btn btn-outline-primary m-1">TELECHARGER</button></a>
                    <a href="{{route('editAvatar', $item->id)}}"><button class="btn btn-outline-info m-1">MODIFIER</button></a>
                    <a href="{{route('destroyAvatar', $item->id)}}"><button class="btn btn-outline-danger">SUPPRIMER</button></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

