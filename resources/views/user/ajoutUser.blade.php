@extends('layout/master')

@section('h2')
Ajouter un user
@endsection

@section('content')

<form class="m-3" action="{{route('envoiUser')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <input class="form-control m-3 @error('nom') is-invalid @enderror" type="text" name="nom" id="" placeholder="Veuillez saisir votre nom">
        @error('nom')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input class="form-control m-3 @error('age') is-invalid @enderror" type="text" name="age" id="" placeholder="Veuillez saisir votre âge">
        @error('age')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input class="form-control m-3 @error('email') is-invalid @enderror" type="text" name="email" id="" placeholder="Veuillez saisir votre email">
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <h4 class="p-3">Choisissez un avatar:</h4>
        <div class="d-flex justify-content-center">
            @foreach ($avatar as $item)
                <div>
                    <div><img width="150px" src="{{asset('storage/'.$item->image)}}" alt=""></div>
                    <input type="radio" name="choix" id="" value="{{$item->id}}">
                </div>
            @endforeach
        </div>
    </div>
    <button class="btn btn-warning text-dark font-weight-bold m-5" type="submit">Ajoutez l'user</button>
</form>

@endsection