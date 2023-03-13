@extends('layouts.app')

@section('template_title')
    {{ $cita->name ?? 'Show Cita' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cita</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('citas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Asunto:</strong>
                            {{ $cita->asunto }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $cita->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $cita->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $cita->hora }}
                        </div>
                        <div class="form-group">
                            <strong>Cargo:</strong>
                            {{ $cita->cargo }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $cita->celular }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $cita->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
