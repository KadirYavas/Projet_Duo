@extends('layout/master')

@section('h2')
Ajouter des avatars
@endsection

@section('content')

<form class="m-3" action="{{route('envoiAvatar')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <input class="form-control @error('avatar') is-invalid @enderror" type="file" name="avatar" id="">
        @error('avatar')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button class="btn btn-warning text-dark font-weight-bold m-5" type="submit">Ajoutez l'avatar</button>
</form>

@endsection