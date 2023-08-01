@extends('layouts.adm')

@section('content')

@include('admin.navbar')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
    </div>

    <h2>Panel</h2>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Cedula</th>
                    <th>Nombre</th>
                    <th>Vehiculo</th>
                    <th>Imagenes</th>
                    <th>Ver</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($drivers as $driver)
                    <tr>
                        <td>{{ $driver->document_number }}</td>
                        <td>{{ $driver->name }}</td>
                        <td>{{ $driver->vehicles[0]->license_plate }}</td>
                        <td>{{ $driver->images->count() }}</td>
                        <td><a href="{{ route('admin.driver', $driver->id) }}">Ver</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>

@endsection
