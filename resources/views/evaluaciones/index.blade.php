@extends('layouts.app')
@section('title')
    Evaluaciones
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Evaluaciones</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped mt-2">
                                <thead style="background-color: #5B5188">
                                    <th style="display: none">ID</th>
                                    <th style="color: #fff">Estudiante</th>
                                    <th style="color: #fff">Fecha de Evaluación</th>
                                    <th style="color: #fff">Total</th>
                                    <th style="color: #fff">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($evaluaciones as $evaluacion)
                                        <tr>
                                            <td style="display: none">{{$evaluacion->id}}</td>
                                            <td>{{ $evaluacion->infante->nombre }} {{ $evaluacion->infante->apellidoPaterno }}</td>
                                            <td>{{ $evaluacion->fecha }}</td>
                                            <td>{{ $evaluacion->total }}</td>
                                            <td>
                                                <a class="btn btn-secondary" href="{{route('evaluaciones.show', $evaluacion->id)}}">Ver</a>
                                                @can('ver-rol')
                                                <a class="btn btn-success" href="{{route('evaluaciones.edit', $evaluacion->id)}}">Editar</a>
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['evaluaciones.destroy', $evaluacion->id], 'style'=>'display:inline']) !!}
                                                    {!! Form::submit('Borrar', ['class'=>'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                                {!! $evaluaciones->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
