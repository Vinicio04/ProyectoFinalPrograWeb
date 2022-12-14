@extends('layouts.app')

@section('template_title')
    {{ $menu->name ?? 'Show Menu' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Menu</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('menus.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $menu->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Icono:</strong>
                            {{ $menu->Icono }}
                        </div>
                        <div class="form-group">
                            <strong>Activo:</strong>
                            {{ $menu->Activo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
