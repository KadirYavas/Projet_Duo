@extends('layout.master')

@section('title')
    Liste Role | Projet Duo
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item" aria-current="page"><a class="text-dark" href="{{ route('homepage') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Role</li>
@endsection

@section('h2')
    Liste des Roles
@endsection

@section('content')
    <a href="{{route('ajoutRole')}}">
        <button type="button" class="btn btn-outline-dark btn-lg mb-4">Ajouter un Role</button>
    </a>
    <table class="table table-bordered table-hover shadow">
        <thead>
        <tr>
            <th>ID</th>
            <th>Role</th>
            <th class="col-3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($role as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->fonction }}</td>
                <td class="col-5">
                    <a href="{{route('editAvatar', $item->id)}}"><button class="btn btn-outline-info m-1">MODIFIER</button></a>
                    <a href="{{route('destroyAvatar', $item->id)}}"><button class="btn btn-outline-danger">SUPPRIMER</button></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

