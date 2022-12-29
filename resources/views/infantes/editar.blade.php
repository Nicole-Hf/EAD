@extends('layouts.app')
@section('title')
    Infantes
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Usuario</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                    <strong>Revise los campos!</strong>
                                    @foreach ($errors->all() as $error)
                                        <span class="badge badge-danger">{{ $error }}</span>
                                    @endforeach
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            {!! Form::model($infante, ['method' => 'PUT', 'route' => ['infantes.update', $infante->id]]) !!}
                            <div class="row">
                                <h5>Datos del Niño</h5>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="nombre">Nombres</label>
                                        {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label for="apellidoPaterno">Apellido Paterno</label>
                                        {!! Form::text('apellidoPaterno', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label for="apellidoMaterno">Apellido Materno</label>
                                        {!! Form::text('apellidoMaterno', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <label for="edad">Edad (años)</label>
                                        {!! Form::number('edad', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <label for="sexo">Sexo</label>
                                        {!! Form::select('sexo', ['F' => 'Femenino', 'M' => 'Masculino'], null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <label for="fechaNacimiento">Fecha de Nacimiento</label>
                                        {!! Form::date('fechaNacimiento', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <label for="sala">Sala</label>
                                        {!! Form::select('sala', [
                                            '1' => 'Sala-1',
                                            '2' => 'Sala-2',
                                            '3' => 'Sala-3',
                                            '4' => 'Sala-4',
                                            '5' => 'Sala-5',
                                            ], null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h5>Datos de los Padres</h5>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label for="nombreMadre">Nombre de la Madre</label>
                                        {!! Form::text('nombreMadre', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label for="nombrePadre">Nombre del Padre</label>
                                        {!! Form::text('nombrePadre', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <label for="telefonoEmergencia">Telefono de Emergencia</label>
                                        {!! Form::text('telefonoEmergencia', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
