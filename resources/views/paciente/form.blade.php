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
            value="{{ isset($paciente->firstname) ? $paciente->firstname : '' }}">
    </div>
    <div class="col-md-4 mb-3">
        <label for="lastname">Apellido Paterno</label>
        <input type="text" class="form-control" id="lastname" name="lastname"
            value="{{ isset($paciente->lastname) ? $paciente->lastname : '' }}">
    </div>
    <div class="col-md-4 mb-3">
        <label for="second_lastname">Apellido Materno</label>
        <input type="text" class="form-control" id="second_lastname" name="second_lastname"
            value="{{ isset($paciente->second_lastname) ? $paciente->second_lastname : '' }}">
    </div>
</div>

<div class="mb-3">
    <label for="eps">EPS</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="far fa-hospital"></i></span>
        </div>
        <input type="text" class="form-control" id="eps" name="eps"
            value="{{ isset($paciente->eps) ? $paciente->eps : '' }}">
    </div>
</div>

<div class="mb-3">
    <label for="address">Dirección</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-location-arrow"></i></span>
        </div>
        <input type="text" class="form-control" id="address" name="address"
            value="{{ isset($paciente->address) ? $paciente->address : '' }}" placeholder="Calle 1 #23-45">
    </div>
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label for="companion_name">Nombre de Acompañante</label>
        <input type="text" class="form-control" id="companion_name" name="companion_name"
            value="{{ isset($paciente->companion_name) ? $paciente->companion_name : '' }}">
    </div>
    <div class="col-md-6 mb-3">
        <label for="companion_lastname">Apellido de Acompañante</label>
        <input type="text" class="form-control" id="companion_lastname" name="companion_lastname"
            value="{{ isset($paciente->companion_lastname) ? $paciente->companion_lastname : '' }}">
    </div>
</div>

<div class="mb-3">
    <label for="companion_cellphone">Teléfono del Acompañante</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
        </div>
        <input type="number" class="form-control" id="companion_cellphone" name="companion_cellphone"
            value="{{ isset($paciente->companion_cellphone) ? $paciente->companion_cellphone : '' }}">
    </div>
</div>

<div class="form-group">
    <label for="medical_history">Antecedentes médicos</label>
    <textarea class="form-control" id="medical_history" name="medical_history" rows="3"
        value="{{ isset($paciente->medical_history) ? $paciente->medical_history : '' }}"></textarea>
</div>

<div class="form-group">
    <label for="reasons">Motivos de la consulta</label>
    <textarea class="form-control" id="reasons" name="reasons" rows="3"
        value="{{ isset($paciente->reasons) ? $paciente->reasons : '' }}"></textarea>
</div>

<div class="form-group">
    <label for="diagnostic">Diagnostico del Doctor</label>
    <textarea class="form-control" id="diagnostic" name="diagnostic" rows="3"
        value="{{ isset($paciente->diagnostic) ? $paciente->diagnostic : '' }}"></textarea>
</div>

<div class="mb-3">
    <label for="administradores_id">Seleccione el Usuario Afiliado</label>
    <select class="custom-select mr-2" name="usuarios_id" id="usuarios_id">
        <option selected>Seleccione un usuario</option>
        @foreach ($usuarios as $usuario)
            <option value="{{ $usuario->id }} ">{{ $usuario->firstname }} {{ $usuario->lastname }}
                {{ $usuario->second_lastname }}</option>
        @endforeach
    </select>
</div>

<hr class="mb-4" style="background-color: #1E3C40;">
<div class="d-flex justify-content-center align-items-center">
    <button class="btn btn-secondary btn-lg btn-block" type="submit">{{ $modo }}
        paciente</button>
</div>
