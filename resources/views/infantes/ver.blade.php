@extends('layouts.app')
@section('title')
    Infantes
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Información</h3>
        </div>
        <div class="section-body">
            <div class="card mb-3" style="max-width: 640px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('img/profile2.png') }}" class="img-fluid rounded-start" style="height:90%;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-text">
                                <div class="author">
                                    <p class="card-text ">
                                        <label for="nombre" class="col-form-label">Nombres: </label>
                                        {{ $infante->nombre }} <br>
                                        <label for="apellidoPaterno" class="col-form-label">Apellidos: </label>
                                        {{ $infante->apellidoPaterno }}
                                        {{ $infante->apellidoMaterno }} <br>
                                        <label for="edad" class="col-form-label">Edad: </label>
                                        {{ $infante->edad }} <br>
                                        <label for="sexo" class="col-form-label">Sexo: </label>
                                        {{ $infante->sexo }} <br>
                                        <label for="fechaNacimiento" class="col-form-label">Fecha de Nacimiento: </label>
                                        {{ $infante->fechaNacimiento }} <br>
                                        <label for="sala" class="col-form-label">Sala: </label>
                                        {{ $infante->sala }} <br>
                                        <label for="nombreMadre" class="col-form-label">Nombre de la madre: </label>
                                        {{ $infante->nombreMadre }} <br>
                                        <label for="nombrePadre" class="col-form-label">Nombre del padre: </label>
                                        {{ $infante->nombrePadre }} <br>
                                        <label for="telefonoEmergencia" class="col-form-label">Telefono de Emergencia: </label>
                                        {{ $infante->telefonoEmergencia }} <br>
                                    </p>
                                </div>
                            </p>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <a href="{{ route('infantes.index')}}" class="btn btn-primary">Volver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
