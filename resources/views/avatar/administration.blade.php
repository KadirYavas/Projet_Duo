@extends('layout.master')

@section('title')
    Liste Avatar | Projet Duo
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item" aria-current="page"><a class="text-dark" href="{{ route('homepage') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Liste Avatars</li>
@endsection

@section('h2')
    Liste des Avatars
@endsection

@section('content')
    <a href="{{route('ajoutAvatar')}}">
        <button type="button" class="btn btn-outline-dark btn-lg mb-4">Ajouter un Avatar</button>
    </a>
    <table class="table table-bordered table-hover shadow">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Aperçu</th>
            <th class="col-3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($avatar as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nom }}</td>
                <td><img src="{{asset('storage/'.$item->image)}}" alt="" height="50px"></td>
                <td class="col-5">
                    <a href="{{route('download', $item->id)}}"><button class="btn btn-outline-primary m-1">TELECHARGER</button></a>
                    <a href="{{route('editAvatar', $item->id)}}"><button class="btn btn-outline-info m-1">MODIFIER</button></a>
                    <a href="{{route('destroyAvatar', $item->id)}}"><button class="btn btn-outline-danger">SUPPRIMER</button></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection




{{--@extends('layout/master')--}}

{{--@section('h2')--}}
{{--<div class="d-flex flex-column">--}}
{{--    Administration des avatars--}}
{{--    <a href="{{route('ajoutAvatar')}}"><button class="btn btn-success">Ajouter un avatar</button></a>--}}
{{--</div>--}}
{{--@endsection--}}

{{--@section('content')--}}

{{--<div class="row bg-warning">--}}
{{--    <div class="col-2">ID</div>--}}
{{--    <div class="col-2">Nom de l'avatar</div>--}}
{{--    <div class="col-4">Image de l'avatar</div>--}}
{{--</div>--}}

{{--@foreach ($avatar as $item)--}}


{{--<div class="row p-3">--}}
{{--    <div class="col-1">{{$item->id}}</div>--}}
{{--    <div class="col-3">{{$item->nom}}</div>--}}
{{--    <div class="col-4"><img src="{{asset('storage/'.$item->image)}}" alt="" width="75px"></div>--}}
{{--    <div class="col-4">--}}
{{--        <a href="{{route('download', $item->id)}}"><button class="btn btn-primary">--}}
{{--            <i class="fas fa-pen fa-fw"></i>--}}
{{--            Download l'image--}}
{{--          </button>--}}
{{--          </a>--}}
{{--        <a href="{{route('editAvatar', $item->id)}}"><button class="btn btn-warning">--}}
{{--            <i class="fas fa-pen fa-fw"></i>--}}
{{--            Edit--}}
{{--          </button>--}}
{{--          </a>--}}
{{--          <a href="{{route('destroyAvatar', $item->id)}}"><button class="btn btn-danger">--}}
{{--            <i class="fas fa-pen fa-fw"></i>--}}
{{--            Delete--}}
{{--          </button>--}}
{{--          </a>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endforeach--}}

{{--@endsection--}}
