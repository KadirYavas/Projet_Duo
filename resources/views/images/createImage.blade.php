@extends('layout/master')

@section('h2')
    Ajouter une Image
@endsection

@section('style')
    <style>

    </style>
@endsection

@section('content')

    <form class="m-3" action="{{ route('storeImage') }}" method="post" enctype="multipart/form-data">
        @csrf
        <section class="text-left mb-2">
            <div class="text-left mb-3">
                <label for="nom">Choissisez une Image</label>
                <input class="form-control @error('file') is-invalid @enderror" type="file" name="file" id="file">
                @error('file')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button class="btn btn-outline-danger text-dark font-weight-bold" type="submit">Ajoutez l'Image</button>
        </section>
    </form>
@endsection
