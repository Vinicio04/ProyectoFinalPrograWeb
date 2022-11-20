<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $cliente->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TipoDocumento') }}
            {{ Form::text('TipoDocumento', $cliente->TipoDocumento, ['class' => 'form-control' . ($errors->has('TipoDocumento') ? ' is-invalid' : ''), 'placeholder' => 'Tipodocumento']) }}
            {!! $errors->first('TipoDocumento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NumeroDocumento') }}
            {{ Form::text('NumeroDocumento', $cliente->NumeroDocumento, ['class' => 'form-control' . ($errors->has('NumeroDocumento') ? ' is-invalid' : ''), 'placeholder' => 'Numerodocumento']) }}
            {!! $errors->first('NumeroDocumento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('Direccion', $cliente->Direccion, ['class' => 'form-control' . ($errors->has('Direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('Direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('Telefono', $cliente->Telefono, ['class' => 'form-control' . ($errors->has('Telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('Telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Activo') }}
            {{ Form::text('Activo', $cliente->Activo, ['class' => 'form-control' . ($errors->has('Activo') ? ' is-invalid' : ''), 'placeholder' => 'Activo']) }}
            {!! $errors->first('Activo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>