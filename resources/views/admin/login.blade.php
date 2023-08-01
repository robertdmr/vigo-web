@extends('layouts.adm')

@section('content')

<div class="container">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-11 col-md-4 col-xl-4">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            @method('POST')
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    {{ $errors->first() }}
                                </div>
                            @endif
                            <div class="my-2">
                                <label for="email">Correo:</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="ingrese su correo">
                            </div>
                            <div class="my-2">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="su contraseña">
                            </div>
                            <div class="my-2 text-end">
                                <button type="submit" class="btn btn-primary">Ingresar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
