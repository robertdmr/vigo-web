@extends('layouts.adm')


@section('content')


@include('admin.navbar')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Conductor N° {{ $driver->id }}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
    </div>

    <h2>Datos</h2>
    <div class="row">
        {{-- DATO DEL CONDUCTOR --}}
        <div class="col-11 col-md-6 my-2">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form action="" id="frmConductor">
                            @csrf
                            @method('PUT')
                            <div class="row flex-column">
                                <div id="msg"></div>
                                <div class="col my-2">
                                    <label for="">Nombre y Apellido</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Juan Perez" value="{{ $driver->name }}"
                                        required>
                                    <input type="hidden" name="id" id="id" value="{{ $driver->id }}">
                                </div>
                                <div class="col my-2">
                                    <label for="">Número de teléfono</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="0987 654321" value="{{ $driver->phone }}"
                                        required>
                                </div>
                                <div class="col my-2">
                                    <label for="">Correo</label>
                                    <input type="text" class="form-control" id="email" name="email" value="{{ $driver->email }}}"
                                        placeholder="correo@email.com" required>
                                </div>
                                <div class="col my-2">
                                    <label for="">Dirección</label>
                                    <input type="text" class="form-control" id="address" name="address" value="{{ $driver->address }}"
                                        placeholder="Palma y Oleary 2323">
                                </div>
                                <div class="col my-2">
                                    <label for="">Barrio</label>
                                    <input type="text" class="form-control" id="neighborhood" name="neighborhood" value="{{ $driver->neighborhood }}"
                                        placeholder="Catedral">
                                </div>
                                <div class="col my-2">
                                    <label for="">Ciudad</label>
                                    <input type="text" class="form-control" id="city" name="city" placeholder="Asunción" value="{{ $driver->city }}">
                                </div>
                                <div class="col my-2">
                                    <label for="">Nacionalidad</label>
                                    <input type="text" class="form-control" id="nationality" name="nationality" value="{{ $driver->nationality }}"
                                        placeholder="Paraguayo">
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col col-md-6 mt-2">
                                            <label for="">Tipo documento</label>
                                            <select name="document_type" id="document_type" class="form-select">
                                                <option value="cedula" {{ $driver->document_type == "cedula" ? "selected" : "" }}>Cédula</option>
                                                <option value="ruc" {{ $driver->document_type == "ruc" ? "selected" : "" }}>RUC</option>
                                                <option value="pasaporte" {{ $driver->document_type == "pasaporte" ? "selected" : "" }}>Pasaporte</option>
                                            </select>
                                        </div>
                                        <div class="col col-md-6 mt-2">
                                            <label for="">N° documento</label>
                                            <input type="text" class="form-control" id="document_number" name="document_number" value="{{ $driver->document_number }}"
                                                placeholder="12345678">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 mt-3">
                                    <button class="btn btn-primary" type="submit" id="btnRegister">Actualizar Conductor</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- DATOS DEL VEHICULO --}}
        <div class="col-11 col-md-6 my-2">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form action="{{ 'api/driver-vehicle' }}" id="frmVehiculo">
                            @csrf
                            @method('POST')
                            <div class="row flex-column">
                                <div id="msg"></div>
                                <div class="col my-2">
                                    <label for="">Marca</label>
                                    <input type="text" class="form-control" id="brand" name="brand" placeholder="Toyota" value="{{ $driver->vehicles[0]->brand ?? '' }}"
                                        required>
                                    <input type="hidden" class="form-control" id="driver_id" name="driver_id" placeholder=""   value="{{ $driver->id }}"
                                        required>
                                    <input type="hidden" value="{{ $driver->vehicles[0]->id ?? "" }}" name="id">
                                </div>
                                <div class="col my-2">
                                    <label for="">Modelo</label>
                                    <input type="text" class="form-control" id="model" name="model" placeholder="Corolla" value="{{ $driver->vehicles[0]->model ?? '' }}"
                                        required>
                                </div>
                                <div class="col my-2">
                                    <label for="">Color</label>
                                    <input type="text" class="form-control" id="color" name="color" placeholder="rojo" value="{{ $driver->vehicles[0]->color ?? '' }}"
                                        required>
                                </div>
                                <div class="col my-2">
                                    <label for="">Año de fabricación</label>
                                    <input type="text" class="form-control" id="fabrication_year" name="fabrication_year" value="{{ $driver->vehicles[0]->fabrication_year ?? '' }}"
                                        placeholder="2002" required>
                                </div>
                                <div class="col my-2">
                                    <label for="">Cantidad de Pasajeros</label>
                                    <input type="text" class="form-control" id="passengers_number" name="passengers_number" value="{{ $driver->vehicles[0]->passengers_number ?? '' }}"
                                        placeholder="4" required>
                                </div>
                                <div class="col my-2">
                                    <label for="">Chapa N°</label>
                                    <input type="text" class="form-control" id="licence_plate" name="license_plate" value="{{ $driver->vehicles[0]->license_plate ?? '' }}"
                                        placeholder="ABC123" required>
                                </div>
                                <div class="d-grid gap-2 mt-3">
                                    <button class="btn btn-primary" type="submit" id="btnRegisterVehicle">Actualizar Vehículo</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- IMAGENES CARGADAS--}}
        <div class="col-11 col-md-6 my-2">
            <div class="card">
                <div class="card-content">
                    <h1 class="text-center">Imagenes</h1>
                    <div class="card-body">
                        @foreach($driver->images as $image)
                            <li><a href="{{ asset('storage/foto') ."/". $image->path }}" target="new">{{ $image->path }}</a></li>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
