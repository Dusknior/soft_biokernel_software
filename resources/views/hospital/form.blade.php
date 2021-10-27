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

<div class="mb-3">
    <label for="hospital_name">Nombre</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="far fa-hospital"></i></span>
        </div>
        <input type="text" class="form-control" id="hospital_name" name="hospital_name"
            value="{{ isset($hospital->hospital_name) ? $hospital->hospital_name : '' }}">
    </div>
</div>

<div class="mb-3">
    <label for="hospital_address">Dirección</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-location-arrow"></i></span>
        </div>
        <input type="text" class="form-control" id="hospital_address" name="hospital_address"
            value="{{ isset($hospital->hospital_address) ? $hospital->hospital_address : '' }}"
            placeholder="Calle 1 #23-45">
    </div>
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label for="hospital_admin_name">Nombre del Administrador</label>
        <input type="text" class="form-control" id="hospital_admin_name" name="hospital_admin_name"
            value="{{ isset($hospital->hospital_admin_name) ? $hospital->hospital_admin_name : '' }}">
    </div>
    <div class="col-md-6 mb-3">
        <label for="hospital_admin_lastname">Apellido del Administrador</label>
        <input type="text" class="form-control" id="hospital_admin_lastname" name="hospital_admin_lastname"
            value="{{ isset($hospital->hospital_admin_lastname) ? $hospital->hospital_admin_lastname : '' }}">
    </div>
</div>

<div class="mb-3">
    <label for="hospital_nit">NIT</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="far fa-address-card"></i></span>
        </div>
        <input type="text" class="form-control" id="hospital_nit" name="hospital_nit"
            value="{{ isset($hospital->hospital_nit) ? $hospital->hospital_nit : '' }}">
    </div>
</div>

<hr class="mb-4" style="background-color: #1E3C40;">
<div class="d-flex justify-content-center align-items-center">
    <button class="btn btn-secondary btn-lg btn-block" type="submit">{{ $modo }} hospital</button>
</div>
