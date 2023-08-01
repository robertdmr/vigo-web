<ul class="nav nav-pills" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="data-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button"
            role="tab" aria-controls="home-tab-pane" aria-selected="true"><span
                class="border border-2 rounded-circle fw-bold px-1">1</span> Datos</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link disabled" id="vehicle-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
            type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false"><span
                class="border  border-2  rounded-circle fw-bold px-1">2</span> Vehículo</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link disabled" id="images-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
            type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false"><span
                class="border  border-2  rounded-circle fw-bold px-1">3</span> Imagenes</button>
    </li>
</ul>
<div class="tab-content border-0" id="myTabContent">
    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
        <form action="{{ url('api/drivers') }}" method="POST" id="frmDrivers">
            @csrf
            @method('POST')
            <div class="row flex-column">
                <div id="msg"></div>
                <div class="col my-2">
                    <label for="">Nombre y Apellido</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Juan Perez"
                        required>
                </div>
                <div class="col my-2">
                    <label for="">Número de teléfono</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="0987 654321"
                        required>
                </div>
                <div class="col my-2">
                    <label for="">Correo</label>
                    <input type="text" class="form-control" id="email" name="email"
                        placeholder="correo@email.com" required>
                </div>
                <div class="col my-2">
                    <label for="">Dirección</label>
                    <input type="text" class="form-control" id="address" name="address"
                        placeholder="Palma y Oleary 2323">
                </div>
                <div class="col my-2">
                    <label for="">Barrio</label>
                    <input type="text" class="form-control" id="neighborhood" name="neighborhood"
                        placeholder="Catedral">
                </div>
                <div class="col my-2">
                    <label for="">Ciudad</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="Asunción">
                </div>
                <div class="col my-2">
                    <label for="">Nacionalidad</label>
                    <input type="text" class="form-control" id="nationality" name="nationality"
                        placeholder="Paraguayo">
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col col-md-6 mt-2">
                            <label for="">Tipo documento</label>
                            <select name="document_type" id="document_type" class="form-select">
                                <option value="cedula" selected>Cédula</option>
                                <option value="ruc">RUC</option>
                                <option value="pasaporte">Pasaporte</option>
                            </select>
                        </div>
                        <div class="col col-md-6 mt-2">
                            <label for="">N° documento</label>
                            <input type="text" class="form-control" id="document_number" name="document_number"
                                placeholder="12345678">
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 mt-3">
                    <button class="btn btn-secondary" type="submit" id="btnRegister">Siguiente</button>
                    <button class="btn btn-outline-warning" data-bs-dismiss="modal">más tarde</button>
                </div>
            </div>
        </form>
    </div>
    <div class="tab-pane fade " id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
        <form action="{{ 'api/driver-vehicle' }}" id="frmVehiculo">
            @csrf
            @method('POST')
            <div class="row flex-column">
                <div id="msg"></div>
                <div class="col my-2">
                    <label for="">Marca</label>
                    <input type="text" class="form-control" id="brand" name="brand" placeholder="Toyota"
                        required>
                    <input type="hidden" class="form-control" id="driver_id" name="driver_id" placeholder=""
                        required>
                </div>
                <div class="col my-2">
                    <label for="">Modelo</label>
                    <input type="text" class="form-control" id="model" name="model" placeholder="Corolla"
                        required>
                </div>
                <div class="col my-2">
                    <label for="">Color</label>
                    <input type="text" class="form-control" id="color" name="color" placeholder="rojo"
                        required>
                </div>
                <div class="col my-2">
                    <label for="">Año de fabricación</label>
                    <input type="text" class="form-control" id="fabrication_year" name="fabrication_year"
                        placeholder="2002" required>
                </div>
                <div class="col my-2">
                    <label for="">Cantidad de Pasajeros</label>
                    <input type="text" class="form-control" id="passengers_number" name="passengers_number"
                        placeholder="4" required>
                </div>
                <div class="col my-2">
                    <label for="">Chapa N°</label>
                    <input type="text" class="form-control" id="licence_plate" name="license_plate"
                        placeholder="ABC123" required>
                </div>
                <div class="d-grid gap-2 mt-3">
                    <button class="btn btn-primary" type="submit" id="btnRegisterVehicle">Siguiente</button>
                </div>
            </div>
        </form>
    </div>
    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">

        <form action="{{ url('api/upload-foto') }}" method="POST" id="frmFotosDriver"
            enctype="multipart/form-data">
            <div class="row">
                <div class="col-6 mt-1">
                    <label for="imageFile" class="text-black">Suba una foto de su documento de frente:</label>
                    <input type="file" id="foto1" capture="user" accept="image/*,.pdf" name="foto1" required
                        onchange="previewImage('foto1','previewImage1')" />
                    <input type="hidden" name="driver_id" id="driver_id2">
                </div>
                <div class="col-6 mt-1">
                    <img src="{{ asset('images/user_profile.jpg') }}" alt="user" id="previewImage1"
                        class="img-fluid img-thumbnail">
                </div>
            </div>
            <div class="row">
                <div class="col-6 mt-1">
                    <label for="imageFile" class="text-black">Suba una foto de su documento de atras:</label>
                    <input type="file" id="foto2" capture="user" accept="image/*,.pdf" name="foto2" required
                        onchange="previewImage('foto2','previewImage2')" />
                </div>
                <div class="col-6 mt-1">
                    <img src="{{ asset('images/user_profile.jpg') }}" alt="user" id="previewImage2"
                        class="img-fluid img-thumbnail">
                </div>
            </div>
            <div class="row">
                <div class="col-6 mt-1">
                    <label for="imageFile" class="text-black">Suba una foto de su licencia de
                        adelante:</label>
                    <input type="file" id="foto3" capture="user" accept="image/*,.pdf" name="foto3" required
                        onchange="previewImage('foto3','previewImage3')" />
                </div>
                <div class="col-6 mt-1">
                    <img src="{{ asset('images/user_profile.jpg') }}" alt="user" id="previewImage3"
                        class="img-fluid img-thumbnail">
                </div>
            </div>
            <div class="row">
                <div class="col-6 mt-1">
                    <label for="imageFile" class="text-black">Suba una foto de su licencia de atras:</label>
                    <input type="file" id="foto4" capture="user" accept="image/*,.pdf" name="foto4" required
                        onchange="previewImage('foto4','previewImage4')" />
                </div>
                <div class="col-6 mt-1">
                    <img src="{{ asset('images/user_profile.jpg') }}" alt="user" id="previewImage4"
                        class="img-fluid img-thumbnail">
                </div>
            </div>
            <div class="row">
                <div class="col-6 mt-1">
                    <label for="imageFile" class="text-black">Suba una foto de su cédula verde adelante:</label>
                    <input type="file" id="foto5" capture="user" accept="image/*,.pdf" name="foto5" required
                        onchange="previewImage('foto5','previewImage5')" />
                </div>
                <div class="col-6 mt-1">
                    <img src="{{ asset('images/user_profile.jpg') }}" alt="user" id="previewImage5"
                        class="img-fluid img-thumbnail">
                </div>
            </div>
            <div class="row">
                <div class="col-6 mt-1">
                    <label for="imageFile" class="text-black">Suba una foto de su cédula verde atras:</label>
                    <input type="file" id="foto6" capture="user" accept="image/*,.pdf" name="foto6" required
                        onchange="previewImage('foto6','previewImage6')" />
                </div>
                <div class="col-6 mt-1">
                    <img src="{{ asset('images/user_profile.jpg') }}" alt="user" id="previewImage6"
                        class="img-fluid img-thumbnail">
                </div>
            </div>
            <div class="row">
                <div class="col-6 mt-1">
                    <label for="imageFile" class="text-black">Suba una foto de la habilitación del vehículo:</label>
                    <input type="file" id="foto7" capture="user" accept="image/*,.pdf" name="foto7" required
                        onchange="previewImage('foto7','previewImage7')" />
                </div>
                <div class="col-6 mt-1">
                    <img src="{{ asset('images/user_profile.jpg') }}" alt="user" id="previewImage7"
                        class="img-fluid img-thumbnail">
                </div>
            </div>
            <div class="row">
                <div class="col-6 mt-1">
                    <label for="imageFile" class="text-black">Suba una foto del seguro del vehículo:</label>
                    <input type="file" id="foto8" capture="user" accept="image/*,.pdf" name="foto8" required
                        onchange="previewImage('foto8','previewImage8')" />
                </div>
                <div class="col-6 mt-1">
                    <img src="{{ asset('images/user_profile.jpg') }}" alt="user" id="previewImage8"
                        class="img-fluid img-thumbnail">
                </div>
            </div>
            <div class="row">
                <div class="col-6 mt-1">
                    <label for="imageFile" class="text-black">Foto de sus antecedentes judiciales:</label>
                    <input type="file" id="foto9" capture="user" accept="image/*,.pdf" name="foto9" required
                        onchange="previewImage('foto9','previewImage9')" />
                </div>
                <div class="col-6 mt-1">
                    <img src="{{ asset('images/user_profile.jpg') }}" alt="user" id="previewImage9"
                        class="img-fluid img-thumbnail">
                </div>
            </div>
            <div class="row">
                <div class="col-6 mt-1">
                    <label for="imageFile" class="text-black">Foto de sus antecedentes penales:</label>
                    <input type="file" id="foto10" capture="user" accept="image/*,.pdf" name="foto10" required
                        onchange="previewImage('foto10','previewImage10')" />
                </div>
                <div class="col-6 mt-1">
                    <img src="{{ asset('images/user_profile.jpg') }}" alt="user" id="previewImage10"
                        class="img-fluid img-thumbnail">
                </div>
            </div>

            <div class="mt-2 d-grid gap-2">
                <button class="btn btn-secondary" type="submit">Subir</button>
            </div>
        </form>
    </div>
</div>
