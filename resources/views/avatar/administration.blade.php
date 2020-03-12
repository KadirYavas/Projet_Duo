@extends('layout/master')

@section('h2')
<div class="d-flex flex-column">
    Administration des avatars
    <a href="{{route('ajoutAvatar')}}"><button class="btn btn-success">Ajouter un avatar</button></a>
</div>
@endsection

@section('content')

<div class="row bg-warning">
    <div class="col-2">ID</div>
    <div class="col-4">Nom de l'avatar</div>
    <div class="col-4">Image de l'avatar</div>
</div>

@foreach ($avatar as $item)
<div class="row">
    <div class="col-2">{{$item->id}}</div>
    <div class="col-5">{{$item->nom}}</div>
    <div class="col-4"><img src="{{asset('storage/'.$item->image)}}" alt="" width="75px"></div>
</div>
@endforeach

@endsection