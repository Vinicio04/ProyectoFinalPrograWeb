<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Codigo') }}
            {{ Form::text('Codigo', $venta->Codigo, ['class' => 'form-control' . ($errors->has('Codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('Codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CantidadProducto') }}
            {{ Form::text('CantidadProducto', $venta->CantidadProducto, ['class' => 'form-control' . ($errors->has('CantidadProducto') ? ' is-invalid' : ''), 'placeholder' => 'Cantidadproducto']) }}
            {!! $errors->first('CantidadProducto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CantidadTotal') }}
            {{ Form::text('CantidadTotal', $venta->CantidadTotal, ['class' => 'form-control' . ($errors->has('CantidadTotal') ? ' is-invalid' : ''), 'placeholder' => 'Cantidadtotal']) }}
            {!! $errors->first('CantidadTotal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TotalCosto') }}
            {{ Form::text('TotalCosto', $venta->TotalCosto, ['class' => 'form-control' . ($errors->has('TotalCosto') ? ' is-invalid' : ''), 'placeholder' => 'Totalcosto']) }}
            {!! $errors->first('TotalCosto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ImporteRecibido') }}
            {{ Form::text('ImporteRecibido', $venta->ImporteRecibido, ['class' => 'form-control' . ($errors->has('ImporteRecibido') ? ' is-invalid' : ''), 'placeholder' => 'Importerecibido']) }}
            {!! $errors->first('ImporteRecibido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ImporteCambio') }}
            {{ Form::text('ImporteCambio', $venta->ImporteCambio, ['class' => 'form-control' . ($errors->has('ImporteCambio') ? ' is-invalid' : ''), 'placeholder' => 'Importecambio']) }}
            {!! $errors->first('ImporteCambio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Activo') }}
            {{ Form::text('Activo', $venta->Activo, ['class' => 'form-control' . ($errors->has('Activo') ? ' is-invalid' : ''), 'placeholder' => 'Activo']) }}
            {!! $errors->first('Activo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>