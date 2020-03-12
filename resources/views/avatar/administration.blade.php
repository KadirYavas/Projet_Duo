@extends('layout/master')

@section('breadcrumb')
    <li class="breadcrumb-item" aria-current="page"><a class="text-dark" href="{{ route('homepage') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Avatar</li>
@endsection

@section('h2')
<div class="d-flex flex-column">
    Administration des avatars
</div>
@endsection

@section('content')

<a href="{{route('ajoutAvatar')}}"><button class="btn btn-outline-dark btn-lg mb-4">Ajouter un avatar</button></a>

<table class="table table-bordered table-hover shadow">
  <thead>
  <tr>
      <th>ID</th>
      <th>Nom de l'avatar</th>
      <th>Logo de l'avatar</th>
      <th class="col-2">Actions</th>
  </tr>
  </thead>
  <tbody>
  @foreach($avatar as $item)
      <tr>
          <td>{{ $item->id }}</td>
          <td>{{ $item->nom }}</td>
          <td><img src="{{asset('storage/'.$item->image)}}" alt="" width="75px"></td>
          <td>
              <a href="{{route('downloadAvatar', $item->id)}}"><button class="btn btn-outline-primary m-1">Télécharger</button></a>
              <a href="{{route('editAvatar', $item->id)}}"><button class="btn btn-outline-info m-1">Modifier</button></a>
              <a href="{{route('destroyAvatar', $item->id)}}"><button class="btn btn-outline-danger">Supprimer</button></a>
          </td>
      </tr>
  @endforeach
  </tbody>
</table>

@endsection