@extends('layout/master')

@section('h2')
Ajouter des users
@endsection

@section('content')

<form class="m-3" action="{{route('envoiUser')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <input class="form-control @error('nom') is-invalid @enderror" type="text" name="nom" id="">
        @error('nom')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input class="form-control @error('age') is-invalid @enderror" type="text" name="age" id="">
        @error('age')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" id="">
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            @foreach ($avatar as $item)
                <div>
                    <img src="{{asset('storage/'.$item->image)}}" alt="">
                    <input type="radio" name="choix" id="">
                </div>
            @endforeach
    </div>
    <button class="btn btn-warning text-dark font-weight-bold m-5" type="submit">Ajoutez l'user</button>
</form>

@endsection