@extends('layouts.adm')


@section('content')
    @include('admin.navbar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
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
                            <form action="" id="frmConductor" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row flex-column">
                                    <div id="msg1"></div>
                                    <div class="col my-2">
                                        <label for="">Nombre y Apellido</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Juan Perez" value="{{ $driver->name }}" required>
                                        <input type="hidden" name="id" id="id" value="{{ $driver->id }}">
                                    </div>
                                    <div class="col my-2">
                                        <label for="">Número de teléfono</label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            placeholder="0987 654321" value="{{ $driver->phone }}" required>
                                    </div>
                                    <div class="col my-2">
                                        <label for="">Correo</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                            value="{{ $driver->email }}" placeholder="correo@email.com" required>
                                    </div>
                                    <div class="col my-2">
                                        <label for="">Dirección</label>
                                        <input type="text" class="form-control" id="address" name="address"
                                            value="{{ $driver->address }}" placeholder="Palma y Oleary 2323">
                                    </div>
                                    <div class="col my-2">
                                        <label for="">Barrio</label>
                                        <input type="text" class="form-control" id="neighborhood" name="neighborhood"
                                            value="{{ $driver->neighborhood }}" placeholder="Catedral">
                                    </div>
                                    <div class="col my-2">
                                        <label for="">Ciudad</label>
                                        <input type="text" class="form-control" id="city" name="city"
                                            placeholder="Asunción" value="{{ $driver->city }}">
                                    </div>
                                    <div class="col my-2">
                                        <label for="">Nacionalidad</label>
                                        <input type="text" class="form-control" id="nationality" name="nationality"
                                            value="{{ $driver->nationality }}" placeholder="Paraguayo">
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col col-md-6 mt-2">
                                                <label for="">Tipo documento</label>
                                                <select name="document_type" id="document_type" class="form-select">
                                                    <option value="cedula"
                                                        {{ $driver->document_type == 'cedula' ? 'selected' : '' }}>Cédula
                                                    </option>
                                                    <option value="ruc"
                                                        {{ $driver->document_type == 'ruc' ? 'selected' : '' }}>RUC
                                                    </option>
                                                    <option value="pasaporte"
                                                        {{ $driver->document_type == 'pasaporte' ? 'selected' : '' }}>
                                                        Pasaporte</option>
                                                </select>
                                            </div>
                                            <div class="col col-md-6 mt-2">
                                                <label for="">N° documento</label>
                                                <input type="text" class="form-control" id="document_number"
                                                    name="document_number" value="{{ $driver->document_number }}"
                                                    placeholder="12345678">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 mt-3">
                                        <button class="btn btn-primary" type="submit" id="btnRegister">Actualizar
                                            Conductor</button>
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
                            <form action="{{ 'api/vehicle' }}" id="frmVehiculo" method="post">
                                @method('PUT')
                                <div class="row flex-column">
                                    <div id="msg2"></div>
                                    <div class="col my-2">
                                        <label for="">Marca</label>
                                        <input type="text" class="form-control" id="brand" name="brand"
                                            placeholder="Toyota" value="{{ $driver->vehicles[0]->brand ?? '' }}"
                                            required>
                                        <input type="hidden" class="form-control" id="driver_id" name="driver_id"
                                            placeholder="" value="{{ $driver->id }}" required>
                                        <input type="hidden" value="{{ $driver->vehicles[0]->id ?? '' }}"
                                            name="id" id="vehicle_id">
                                    </div>
                                    <div class="col my-2">
                                        <label for="">Modelo</label>
                                        <input type="text" class="form-control" id="model" name="model"
                                            placeholder="Corolla" value="{{ $driver->vehicles[0]->model ?? '' }}"
                                            required>
                                    </div>
                                    <div class="col my-2">
                                        <label for="">Color</label>
                                        <input type="text" class="form-control" id="color" name="color"
                                            placeholder="rojo" value="{{ $driver->vehicles[0]->color ?? '' }}" required>
                                    </div>
                                    <div class="col my-2">
                                        <label for="">Año de fabricación</label>
                                        <input type="text" class="form-control" id="fabrication_year"
                                            name="fabrication_year"
                                            value="{{ $driver->vehicles[0]->fabrication_year ?? '' }}" placeholder="2002"
                                            required>
                                    </div>
                                    <div class="col my-2">
                                        <label for="">Cantidad de Pasajeros</label>
                                        <input type="text" class="form-control" id="passengers_number"
                                            name="passengers_number"
                                            value="{{ $driver->vehicles[0]->passengers_number ?? '' }}" placeholder="4"
                                            required>
                                    </div>
                                    <div class="col my-2">
                                        <label for="">Chapa N°</label>
                                        <input type="text" class="form-control" id="licence_plate"
                                            name="license_plate" value="{{ $driver->vehicles[0]->license_plate ?? '' }}"
                                            placeholder="ABC123" required>
                                    </div>
                                    <div class="d-grid gap-2 mt-3">
                                        <button class="btn btn-primary" type="submit" id="btnRegisterVehicle">Actualizar
                                            Vehículo</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- IMAGENES CARGADAS --}}
            <div class="col-11 col-md-6 my-2">
                <div class="card">
                    <div class="card-content">
                        <h1 class="text-center">Documentos</h1>

                        <div class="card-body">
                            <div class="row">
                                <form id="frmArchivos" method="POST" enctype="multipart/form-data">
                                    <div class="col-12 col-md-12">
                                        <label for="tipo_archivo">Archivo para:</label>
                                        <select name="tipo_archivo" id="tipo_archivo" class="form-select my-2">
                                            <option value="cedula1">Cedula frente</option>
                                            <option value="cedula2">Cedula atras</option>
                                            <option value="registro1">Registro delante</option>
                                            <option value="registro2">Registro atras</option>
                                            <option value="cv1">Cedula verde delante</option>
                                            <option value="cv2">Cedula verde atras</option>
                                            <option value="habilitacion">Habilitación</option>
                                            <option value="seguro">Seguro</option>
                                            <option value="antejudiciales">Antecedentes judiciales</option>
                                            <option value="antepenales">Antecedentes penales</option>
                                        </select>
                                    </div>
                                    <input type="hidden" name="driver_id" id="driver_id_image" value="{{ $driver->id }}">
                                    <div class="col-12 col-md-12 my-2">
                                        <input type="file" name="archivo" id="archivo" class="form-control"
                                            accept="image/*,.pdf">
                                    </div>
                                    <div class="col-12 col-md-12 my-2">
                                        <div class="d-grid gap-2 mt-3">
                                            <button class="btn btn-primary" id="btnUpload">Subir</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="row">
                                <h2 class="text-center">Archivos</h2>
                                @foreach ($driver->images as $image)
                                    <li>
                                        <a href="{{ asset('storage/foto') . '/' . $image->path }}"
                                        target="new">{{ $image->path }}</a> -
                                        <i                                       class="fa-solid fa-circle-xmark text-danger my-2" role="button"
                                        onclick="borrarImage({{ $image->id }})">
                                        </i>
                                    </li>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    <script>
        $("#frmConductor").on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: "{{ url('/api/drivers') }}/" + $("#id").val(),
                type: "PUT",
                data: $(this).serialize(),
                success: function(res) {
                    console.log(res);
                    if (res.msg == "ok") {
                        $("#msg1").html(`
                        <div class="alert alert-success" role="alert">Actualizado correctamente</div>
                    `);
                    }
                },
                error: function(err) {
                    console.log(err);
                    $("#msg1").html(`
                    <div class="alert alert-danger" role="alert">
                        ${err.responseJSON.msg}
                    </div>
                `);
                }
            })
        })

        $("#frmVehiculo").on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: "{{ url('/api/vehicles') }}/" + $("#driver_id").val(),
                type: "POST",
                data: $(this).serialize(),
                success: function(res) {
                    console.log(res);
                    $("#vehicle_id").val(res.id);
                    if (res.msg == "ok") {
                        $("#msg2").html(`
                        <div class="alert alert-success" role="alert">Actualizado correctamente</div>
                    `);
                    }
                },
                error: function(err) {
                    console.log(err);
                    $("#msg2").html(`
                    <div class="alert alert-danger" role="alert">
                        ${err.responseJSON.msg}
                    </div>
                `);
                }
            })
        });
        $("#frmArchivos").on('submit', function(e){
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: "{{ url('/api/update-image') }}",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(res){
                    console.log(res);
                    if(res.msg == "ok"){
                        alert("Archivo subido correctamente");
                        location.reload();
                    }
                },
                error: function(err){
                    console.log(err);
                }
            })
        });

        function borrarImage($id){
            var confirmar = confirm("¿Está seguro de borrar la imagen?");
            if(confirmar){
                $.ajax({
                    url: "{{ url('/api/delete-image') }}/" + $id,
                    type: "DELETE",
                    success: function(res){
                        console.log(res);
                        if(res.msg == "ok"){
                            alert("Imagen borrada correctamente");
                            location.reload();
                        }
                    },
                    error: function(err){
                        console.log(err);
                    }
                })
            }
        }
    </script>
@endsection
