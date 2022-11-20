<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $menu->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Icono') }}
            {{ Form::text('Icono', $menu->Icono, ['class' => 'form-control' . ($errors->has('Icono') ? ' is-invalid' : ''), 'placeholder' => 'Icono']) }}
            {!! $errors->first('Icono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Activo') }}
            {{ Form::text('Activo', $menu->Activo, ['class' => 'form-control' . ($errors->has('Activo') ? ' is-invalid' : ''), 'placeholder' => 'Activo']) }}
            {!! $errors->first('Activo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>