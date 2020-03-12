@extends('layout/master')

@section('breadcrumb')
    <li class="breadcrumb-item" aria-current="page"><a class="text-dark" href="{{ route('homepage') }}">Home</a></li>
    <li class="breadcrumb-item" aria-current="page">User</li>
    <li class="breadcrumb-item active" aria-current="page">Ajout d'user</li>
@endsection

@section('h2')
Ajouter un user
@endsection

@section('style')
    <style>
        .label_avatar:hover {
            border-radius: 10px;
            background-color: lightgray;
        }
        .label_avatar:checked {
            border-radius: 10px;
            border: 2px solid dodgerblue;
        }
        .label_avatar:active {
            border-radius: 10px;
            background-color: lightgray;
        }
    </style>
@endsection

@section('content')

<form class="m-3" action="{{route('envoiUser')}}" method="post" enctype="multipart/form-data">
    @csrf
    <section class="text-left">
        <div class="mb-2">
            <label for="nom">Nom</label>
            <input class="form-control @error('nom') is-invalid @enderror" type="text" name="nom" id="nom" placeholder="Veuillez saisir votre nom">
            @error('nom')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-2">
            <label for="age">Age</label>
            <input class="form-control @error('age') is-invalid @enderror" type="text" name="age" id="age" placeholder="Veuillez saisir votre âge">
            @error('age')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-2">
            <label for="email">Adresse email</label>
            <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" id="email" placeholder="Veuillez saisir votre email">
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <h4 class="">Choisissez un avatar:</h4>
        <div class="d-flex">
            @foreach ($avatar as $item)
                <div>
                    <label class="label_avatar">
                        <div class="text-center">
                            <img class="mx-2 p-1" width="150" height="150" src="{{asset('storage/'.$item->image)}}" alt="">
                            <h3>{{ $item->nom }}</h3>
                        </div>
                        <input class="label_avatar d-none" type="radio" name="choix" id="" value="{{$item->id}}">
                    </label>
                </div>
            @endforeach
        </div>
        <h4>Choisissez une entreprise</h4>
        <div class="d-flex">
            @foreach ($entreprise as $entrep)
                <div>
                    <label class="label_avatar">
                        <div class="text-center">
                            <img class="mx-2 p-1" width="150" height="150" src="{{asset('storage/'.$entrep->logo)}}" alt="">
                            <h3>{{ $entrep->nom }}</h3>
                        </div>
                        <input class="label_avatar d-none" type="radio" name="choix" id="" value="{{$entrep->id}}">
                    </label>
                </div>
            @endforeach
        </div>
    </section>
    <button class="btn btn-warning text-dark font-weight-bold m-5" type="submit">Ajoutez l'user</button>
</form>

@endsection
