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
    <div class="col-2">Nom de l'avatar</div>
    <div class="col-4">Image de l'avatar</div>
</div>

@foreach ($avatar as $item)


<div class="row p-3">
    <div class="col-1">{{$item->id}}</div>
    <div class="col-3">{{$item->nom}}</div>
    <div class="col-4"><img src="{{asset('storage/'.$item->image)}}" alt="" width="75px"></div>
    <div class="col-4">
        <a href="{{route('download', $item->id)}}"><button class="btn btn-primary">
            <i class="fas fa-pen fa-fw"></i>
            Download l'image
          </button>
          </a>
        <a href="{{route('editAvatar', $item->id)}}"><button class="btn btn-warning">
            <i class="fas fa-pen fa-fw"></i>
            Edit
          </button>
          </a>
          <a href="{{route('destroyAvatar', $item->id)}}"><button class="btn btn-danger">
            <i class="fas fa-pen fa-fw"></i>
            Delete
          </button>
          </a>
    </div>
</div>
@endforeach

@endsection
