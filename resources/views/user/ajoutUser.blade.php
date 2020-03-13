@extends('layout/master')

@section('h2')
Ajouter un user
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item" aria-current="page"><a class="text-dark" href="{{ route('homepage') }}">Home</a></li>
    <li class="breadcrumb-item" aria-current="page"><a class="text-dark" href="{{ route('adminUser') }}">Liste d'Utilisateurs</a></li>
    <li class="breadcrumb-item active" aria-current="page">Ajouter Utilisateur</li>
@endsection

@section('style')
    <style>
        /*.custom-control-label::before {*/
        /*    background-color: darkorange;*/
        /*}*/
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
        .custom-control-input:checked ~ .custom-control-label::before {
            color: #1b1e21;
            border-color: darkred;
            background-color: darkred;
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
        <h4 class="mt-3">Choisissez un avatar:</h4>
        <div class="d-flex">
            @foreach ($avatar as $item)
                <div>
                    <label class="label_avatar">
                        <div class="text-center">
                            <img class="mx-2 p-1" width="150" height="150" src="{{asset('storage/'.$item->image)}}" alt="">
                        </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="choix" name="choix" class="custom-control-input" value="{{$item->id}}">
                                <label class="custom-control-label" for="customRadioInline1">{{$item->nom}}</label>
                        </div>
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
    <button class="btn btn-outline-danger text-dark font-weight-bold mt-5" type="submit">Ajoutez l'user</button>
</form>

@endsection
