@extends('layout/master')

@section('breadcrumb')
    <li class="breadcrumb-item" aria-current="page"><a class="text-dark" href="{{ route('homepage') }}">Home</a></li>
    <li class="breadcrumb-item" aria-current="page">Entreprise</li>
    <li class="breadcrumb-item active" aria-current="page">Editer l'entreprise</li>
@endsection

@section('h2')
Editer une entreprise
@endsection

@section('content')

<form class="m-3" action="{{route('updateEntreprise', $entreprise->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <input class="m-3 form-control @error('nom') is-invalid @enderror" type="text" name="nom" id="" placeholder="Veuillez saisir le nom de l'entreprise" value="{{$entreprise->nom}}">
        @error('nom')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input class="m-3 form-control @error('nombre') is-invalid @enderror" type="text" name="nombre" id="" placeholder="Veuillez saisir le nombre maximum d'employés" value="{{$entreprise->nb_employe}}">
        @error('nombre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input class="m-3 form-control @error('logo') is-invalid @enderror" type="file" name="logo" id="" value="{{$entreprise->logo}}">
        @error('logo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button class="btn btn-warning text-dark font-weight-bold m-5" type="submit">Editez l'avatar</button>

</form>

@endsection