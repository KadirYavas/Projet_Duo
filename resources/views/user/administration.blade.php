@extends('layout/master')

@section('h2')
<div class="d-flex flex-column">
    Administration des users
    <a href="{{route('ajoutUser')}}"><button class="btn btn-success">Ajouter un user</button></a>
</div>
@endsection

@section('content')

<div class="row bg-warning">
    <div class="col-1">ID</div>
    <div class="col-2">Nom de l'user</div>
    <div class="col-2">Age de l'user</div>
    <div class="col-4">Avatar de l'user</div>
</div>

@foreach ($user as $item)
<div class="row">
    <div class="col-1">{{$item->id}}</div>
    <div class="col-2">{{$item->nom}}</div>
    <div class="col-2">{{$item->age}}</div>
    @foreach ($avatar as $img)
    <div class="col-4"><img src="{{asset('storage/'.$img->image)}}" width="100px"></div>
    @endforeach
    <div class="col-3">
        <a href="{{route('editUser', $item->id)}}"><button class="btn btn-warning">
            <i class="fas fa-pen fa-fw"></i>
            Edit
          </button>
          </a>
          <a href="{{route('destroyUser', $item->id)}}"><button class="btn btn-danger">
            <i class="fas fa-pen fa-fw"></i>
            Delete
          </button>
          </a>
    </div>
</div>
@endforeach

@endsection