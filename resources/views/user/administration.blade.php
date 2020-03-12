@extends('layout/master')

@section('breadcrumb')
    <li class="breadcrumb-item" aria-current="page"><a class="text-dark" href="{{ route('homepage') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">User</li>
@endsection

@section('h2')
<div class="d-flex flex-column">
    Administration des users
</div>
@endsection

@section('content')

<a href="{{route('ajoutUser')}}"><button class="btn btn-outline-dark btn-lg mb-4">Ajouter un user</button></a>

<table class="table table-bordered table-hover shadow">
  <thead>
  <tr>
      <th>ID</th>
      <th>Nom de l'user</th>
      <th>Age de l'user</th>
      <th>Avatar de l'user</th>
      <th>Entreprise de l'user</th>
      <th class="col-2">Actions</th>
  </tr>
  </thead>
  <tbody>
  @foreach($user as $item)
      <tr>
          <td>{{ $item->id }}</td>
          <td>{{ $item->nom }}</td>
          <td>{{ $item->age }}</td>
        @foreach ($avatar as $img)
            <td><img src="{{asset('storage/'.$img->image)}}" width="100px"></td>
        @endforeach
        @foreach ($entreprise as $img)
            <td><img src="{{asset('storage/'.$img->logo)}}" width="100px"></td>
        @endforeach
          <td><img src="{{asset('storage/'.$item->logo)}}" alt="" width="75px"></td>
          <td>
              <a href="{{route('editUser', $item->id)}}"><button class="btn btn-outline-info m-1">Modifier</button></a>
              <a href="{{route('destroyUser', $item->id)}}"><button class="btn btn-outline-danger">Supprimer</button></a>
          </td>
      </tr>
  @endforeach
  </tbody>
</table>

@endsection