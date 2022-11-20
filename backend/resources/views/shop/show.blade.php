@extends('layouts.app')

@section('template_title')
    {{ $shop->name ?? 'Show Shop' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Shop</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('shops.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $shop->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Ruc:</strong>
                            {{ $shop->RUC }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $shop->Direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $shop->Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Activo:</strong>
                            {{ $shop->Activo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
