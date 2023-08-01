@extends('layouts.adm')


@section('content')


@include('admin.navbar')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ $driver->name }}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
    </div>

    <h2>Imagenes</h2>
    <div class="row">
        @foreach ($driver->images as $image)
            <div class="col-md-4">
                <img src="{{ asset('storage/foto') ."/". $image->path }}" alt="" class="img-fluid img-thumbnail">
            </div>
        @endforeach
    </div>
</main>

@endsection
