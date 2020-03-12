@extends('layout/master')

@section('h2')
Editer un user
@endsection

@section('content')

<form class="m-3" action="{{route('updateUser', $user->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
    <input class="m-3 form-control @error('nom') is-invalid @enderror" type="text" name="nom" id="" placeholder="Veuillez saisir le nom de l'user" value="{{$user->nom}}">
        @error('nom')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    <input class="m-3 form-control @error('age') is-invalid @enderror" type="text" name="age" id="" value="{{$user->age}}">
        @error('age')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    <input class="m-3 form-control @error('email') is-invalid @enderror" type="text" name="email" id="" value="{{$user->email}}">
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
    <button class="btn btn-warning text-dark font-weight-bold m-5" type="submit">Editez l'user</button>
</form>

@endsection