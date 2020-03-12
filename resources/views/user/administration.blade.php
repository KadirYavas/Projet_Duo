@extends('layout.master')

@section('title')
    Liste Utilisateurs | Projet Duo
@endsection
@section('h2')
        Liste des Utilisateurs
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item" aria-current="page"><a class="text-dark" href="{{ route('homepage') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Liste Utilisateurs</li>
@endsection

@section('content')
    <a href="{{route('ajoutUser')}}">
        <button class="btn btn-outline-dark btn-lg mb-4">Ajouter un Utilisateurs</button>
    </a>
    <table class="table table-bordered table-hover shadow">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Age</th>
            <th>Avatar</th>
            <th class="col-3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($user as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nom }}</td>
                <td>{{ $item->age }}</td>
                @foreach($avatar as $img)
                    @if($img->id === $item->id)
                        <td><img src="{{asset('storage/'.$img->image)}}" width="50" height="50" alt=""></td>
                    @endif
                @endforeach
                <td>
                    <a href="{{route('editUser', $item->id)}}"><button class="btn btn-outline-info m-1">MODIFIER</button></a>
                    <a href="{{route('destroyUser', $item->id)}}"><button class="btn btn-outline-danger">SUPPRIMER</button></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection

{{--@section('content')--}}

{{--<div class="row bg-warning">--}}
{{--    <div class="col-1">ID</div>--}}
{{--    <div class="col-2">Nom de l'user</div>--}}
{{--    <div class="col-2">Age de l'user</div>--}}
{{--    <div class="col-4">Avatar de l'user</div>--}}
{{--</div>--}}

{{--@foreach ($user as $item)--}}
{{--<div class="row">--}}
{{--    <div class="col-1">{{$item->id}}</div>--}}
{{--    <div class="col-2">{{$item->nom}}</div>--}}
{{--    <div class="col-2">{{$item->age}}</div>--}}
{{--    @foreach ($avatar as $img)--}}
{{--    <div class="col-4"><img src="{{asset('storage/'.$img->image)}}" width="100px"></div>--}}
{{--    @endforeach--}}
{{--    <div class="col-3">--}}
{{--        <a href="{{route('editUser', $item->id)}}"><button class="btn btn-warning">--}}
{{--            <i class="fas fa-pen fa-fw"></i>--}}
{{--            Edit--}}
{{--          </button>--}}
{{--          </a>--}}
{{--          <a href="{{route('destroyUser', $item->id)}}"><button class="btn btn-danger">--}}
{{--            <i class="fas fa-pen fa-fw"></i>--}}
{{--            Delete--}}
{{--          </button>--}}
{{--          </a>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endforeach--}}

{{--@endsection--}}
