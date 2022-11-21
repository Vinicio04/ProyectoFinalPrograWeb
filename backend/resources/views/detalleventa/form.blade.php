<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Cantidad') }}
            {{ Form::text('Cantidad', $detalleventa->Cantidad, ['class' => 'form-control' . ($errors->has('Cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('Cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PrecioUnidad') }}
            {{ Form::text('PrecioUnidad', $detalleventa->PrecioUnidad, ['class' => 'form-control' . ($errors->has('PrecioUnidad') ? ' is-invalid' : ''), 'placeholder' => 'Preciounidad']) }}
            {!! $errors->first('PrecioUnidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ImporteTotal') }}
            {{ Form::text('ImporteTotal', $detalleventa->ImporteTotal, ['class' => 'form-control' . ($errors->has('ImporteTotal') ? ' is-invalid' : ''), 'placeholder' => 'Importetotal']) }}
            {!! $errors->first('ImporteTotal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Activo') }}
            {{ Form::text('Activo', $detalleventa->Activo, ['class' => 'form-control' . ($errors->has('Activo') ? ' is-invalid' : ''), 'placeholder' => 'Activo']) }}
            {!! $errors->first('Activo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>