@extends('layout.master')

@section('title')
    Liste Utilisateurs | Projet Duo
@endsection
@section('h2')
        Liste des Utilisateurs
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item" aria-current="page"><a class="text-dark" href="{{ route('homepage') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Liste Utilisateurs</li>
@endsection

@section('content')
    <a href="{{route('ajoutUser')}}">
        <button class="btn btn-outline-dark btn-lg mb-4">Ajouter un Utilisateurs</button>
    </a>
    <table class="table table-bordered table-hover shadow">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Age</th>
            <th>Adresse Email</th>
            <th>Avatar</th>
            <th>Entreprise</th>
            <th>Role</th>
            <th class="col-3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($user as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nom }}</td>
                <td>{{ $item->age }} ans</td>
                <td>{{ $item->email }}</td>
                @foreach($avatar as $img)
                    @if($img->id === $item->id)
                        <td><img src="{{asset('storage/'.$img->image)}}" height="50" alt=""></td>
                    @endif
                @endforeach
                @foreach($entreprise as $img)
                        <td>{{$img->nom}}</td>
                @endforeach
                @foreach($role as $roles)
                        <td>{{$roles->fonction}}</td>
                @endforeach
                <td>
                    <a href="{{route('editUser', $item->id)}}"><button class="btn btn-outline-info m-1">MODIFIER</button></a>
                    <a href="{{route('destroyUser', $item->id)}}"><button class="btn btn-outline-danger">SUPPRIMER</button></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection
