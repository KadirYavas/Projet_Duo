@extends('layout/master')

@section('breadcrumb')
    <li class="breadcrumb-item" aria-current="page"><a class="text-dark" href="{{ route('homepage') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Entreprise</li>
@endsection

@section('h2')
<div>
    Administration des entreprises
</div>
@endsection

@section('content')

<a href="{{route('ajoutEntreprise')}}"><button class="btn btn-outline-dark btn-lg mb-4">Ajouter une entreprise</button></a>

<table class="table table-bordered table-hover shadow">
  <thead>
  <tr>
      <th>ID</th>
      <th>Nom de l'entreprise</th>
      <th>Nombre d'employés</th>
      <th>Logo d'entreprise</th>
      <th class="col-2">Actions</th>
  </tr>
  </thead>
  <tbody>
  @foreach($entreprise as $item)
      <tr>
          <td>{{ $item->id }}</td>
          <td>{{ $item->nom }}</td>
          <td>{{ $item->nb_employe }}</td>
          <td><img src="{{asset('storage/'.$item->logo)}}" alt="" width="75px"></td>
          <td>
              <a href="{{route('downloadEntreprise', $item->id)}}"><button class="btn btn-outline-primary m-1">Télécharger</button></a>
              <a href="{{route('editEntreprise', $item->id)}}"><button class="btn btn-outline-info m-1">Modifier</button></a>
              <a href="{{route('destroyEntreprise', $item->id)}}"><button class="btn btn-outline-danger">Supprimer</button></a>
          </td>
      </tr>
  @endforeach
  </tbody>
</table>


@endsection