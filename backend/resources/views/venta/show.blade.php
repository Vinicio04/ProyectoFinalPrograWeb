@extends('layouts.app')

@section('template_title')
    {{ $venta->name ?? 'Show Venta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Venta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ventas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $venta->Codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidadproducto:</strong>
                            {{ $venta->CantidadProducto }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidadtotal:</strong>
                            {{ $venta->CantidadTotal }}
                        </div>
                        <div class="form-group">
                            <strong>Totalcosto:</strong>
                            {{ $venta->TotalCosto }}
                        </div>
                        <div class="form-group">
                            <strong>Importerecibido:</strong>
                            {{ $venta->ImporteRecibido }}
                        </div>
                        <div class="form-group">
                            <strong>Importecambio:</strong>
                            {{ $venta->ImporteCambio }}
                        </div>
                        <div class="form-group">
                            <strong>Activo:</strong>
                            {{ $venta->Activo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
