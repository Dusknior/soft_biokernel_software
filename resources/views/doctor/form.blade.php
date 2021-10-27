@if (count($errors) > 0)

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul class="mt-3">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div class="row">
    <div class="col-md-4 mb-3">
        <label for="firstname">Nombre</label>
        <input type="text" class="form-control" id="firstname" name="firstname"
            value="{{ isset($doctor->firstname) ? $doctor->firstname : '' }}">
    </div>
    <div class="col-md-4 mb-3">
        <label for="lastname">Apellido Paterno</label>
        <input type="text" class="form-control" id="lastname" name="lastname"
            value="{{ isset($doctor->lastname) ? $doctor->lastname : '' }}">
    </div>
    <div class="col-md-4 mb-3">
        <label for="second_lastname">Apellido Materno</label>
        <input type="text" class="form-control" id="second_lastname" name="second_lastname"
            value="{{ isset($doctor->second_lastname) ? $doctor->second_lastname : '' }}">
    </div>
</div>

<div class="mb-3">
    <label for="address">Dirección</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-location-arrow"></i></span>
        </div>
        <input type="text" class="form-control" id="address" name="address"
            value="{{ isset($doctor->address) ? $doctor->address : '' }}" placeholder="Calle 1 #23-45">
    </div>
</div>

<div class="mb-3">
    <label for="cellphone">Teléfono de Contacto</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
        </div>
        <input type="number" class="form-control" id="cellphone" name="cellphone"
            value="{{ isset($doctor->cellphone) ? $doctor->cellphone : '' }}">
    </div>
</div>

<div class="mb-3">
    <label for="bloodtype">Tipo de Sangre</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-syringe"></i></span>
        </div>
        <input type="text" class="form-control" id="bloodtype" name="bloodtype"
            value="{{ isset($doctor->bloodtype) ? $doctor->bloodtype : '' }}">
    </div>
</div>

<div class="mb-3">
    <label for="expyears">Años de Experencia</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-vials"></i></span>
        </div>
        <input type="number" class="form-control" id="expyears" name="expyears"
            value="{{ isset($doctor->expyears) ? $doctor->expyears : '' }}">
    </div>
</div>

<div class="mb-3">
    <label for="birhtday">Fecha de Nacimiento</label>
    <input type="date" class="form-control" id="birhtday" name="birhtday"
        value="{{ isset($doctor->birhtday) ? $doctor->birhtday : '' }}" placeholder="Calle 1 #23-45">
</div>

<div class="mb-3">
    <label for="administradores_id">Seleccione el Hospital Afiliado</label>
    <select class="custom-select mr-2" name="administradores_id" id="administradores_id">
        <option selected>
            Seleccione un hospital</option>
        @foreach ($hospitales as $hospital)
            <option value="{{ $hospital->id }} ">{{ $hospital->hospital_name }}</option>
        @endforeach
    </select>
</div>

<hr class="mb-4" style="background-color: #1E3C40;">
<div class="d-flex justify-content-center align-items-center">
    <button class="btn btn-secondary btn-lg btn-block" type="submit">{{ $modo }} doctor</button>
</div>
