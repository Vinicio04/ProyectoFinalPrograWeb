<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $shop->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('RUC') }}
            {{ Form::text('RUC', $shop->RUC, ['class' => 'form-control' . ($errors->has('RUC')  ? ' is-invalid' : ''), 'placeholder' => 'Ruc']) }}
            {!! $errors->first('RUC', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('Direccion', $shop->Direccion, ['class' => 'form-control' . ($errors->has('Direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('Direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('Telefono', $shop->Telefono, ['class' => 'form-control' . ($errors->has('Telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('Telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Activo') }}
            {{ Form::text('Activo', $shop->Activo, ['class' => 'form-control' . ($errors->has('Activo') ? ' is-invalid' : ''), 'placeholder' => 'Activo']) }}
            {!! $errors->first('Activo', '<div class="invalid-feedback">:message</div>') !!}
        </div>



    </div>

    <div class="mapafrm" id="mapa">

    </div>

    <div class="row">
        <div class="col-12">
            <div class="mapafrm" id="mapa">

            </div>
        </div>
    </div>

    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</div>

<script>

    function iniciarMapa(){
        var latitud = 14.8426384;
        var longitud = -91.5276544;

        coordenadas={
            lng: longitud,
            lat: latitud
        }

        generarMapa(coordenadas);
    }
    function generarMapa(coordenadas){
        var mapa = new google.maps.Map(document.getElementById('mapa'),{
            zoom:15,
            center: new google.maps.LatLng(coordenadas.lat, coordenadas.lng)
        });

        marcador = new google.maps.Marker({
            map: mapa,
            draggable: true,
            position: new google.maps.LatLng(coordenadas.lat, coordenadas.lng)
        });

        marcador.addListener('dragend', function(event){
document.getElementById('Direccion').value = this.getPosition();
        });
    }
</script>

<script src="https://maps.google.com/maps/api/js?key=&callback=iniciarMapa%22%3E"></script>
