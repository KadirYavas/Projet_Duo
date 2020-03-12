@extends('layout/master')

@section('breadcrumb')
    <li class="breadcrumb-item" aria-current="page"><a class="text-dark" href="{{ route('homepage') }}">Home</a></li>
    <li class="breadcrumb-item" aria-current="page">Avatar</li>
    <li class="breadcrumb-item active" aria-current="page">Ajout d'avatar</li>
@endsection

@section('h2')
Ajouter un avatar
@endsection

@section('content')

<form class="m-3" action="{{route('envoiAvatar')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <input class="m-3 form-control @error('nom') is-invalid @enderror" type="text" name="nom" id="" placeholder="Veuillez saisir le nom de l'avatar">
        @error('nom')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input class="m-3 form-control @error('avatar') is-invalid @enderror" type="file" name="avatar" id="">
        @error('avatar')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button class="btn btn-warning text-dark font-weight-bold m-5" type="submit">Ajoutez l'avatar</button>
</form>

@endsection