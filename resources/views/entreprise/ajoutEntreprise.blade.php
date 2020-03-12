@extends('layout/master')

@section('breadcrumb')
    <li class="breadcrumb-item" aria-current="page"><a class="text-dark" href="{{ route('homepage') }}">Home</a></li>
    <li class="breadcrumb-item" aria-current="page">Entreprise</li>
    <li class="breadcrumb-item active" aria-current="page">Ajout d'entreprise</li>
@endsection

@section('h2')
Ajouter une entreprise
@endsection

@section('content')

<form class="m-3" action="{{route('envoiEntreprise')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <input class="m-3 form-control @error('nom') is-invalid @enderror" type="text" name="nom" id="" placeholder="Veuillez saisir le nom de l'entreprise">
        @error('nom')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input class="m-3 form-control @error('nb_employe') is-invalid @enderror" type="text" name="nombre" id="" placeholder="Veuillez saisir le nombre maximum d'employés">
        @error('nb_employe')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input class="m-3 form-control @error('logo') is-invalid @enderror" type="file" name="logo" id="">
        @error('logo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button class="btn btn-warning text-dark font-weight-bold m-5" type="submit">Ajoutez l'entreprise</button>
</form>

@endsection