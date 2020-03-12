@extends('layout/master')

@section('h2')
Ajouter des avatars
@endsection

@section('content')

<form class="m-3" action="" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <input class="form-control" type="file" name="avatar" id="">
    </div>
    <button class="m-5" type="submit">Ajoutez l'avatar choisis</button>
</form>

@endsection