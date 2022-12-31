@extends('layouts.app')
@section('title')
    Infantes
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Infantes</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @can('crear-infante')
                                <a class="btn btn-warning" href="{{ route('infantes.create') }}">Nuevo</a>
                            @endcan
                            <table class="table table-striped mt-2">
                                <thead style="background-color: #5B5188">
                                    <th style="display: none">ID</th>
                                    <th style="color: #fff">Nombre</th>
                                    <th style="color: #fff">Apellido Paterno</th>
                                    <th style="color: #fff">Apellido Materno</th>
                                    <th style="color: #fff">Edad</th>
                                    <th style="color: #fff">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($infantes as $infante)
                                        <tr>
                                            <td style="display: none">{{ $infante->id }}</td>
                                            <td>{{ $infante->nombre }}</td>
                                            <td>{{ $infante->apellidoPaterno }}</td>
                                            <td>{{ $infante->apellidoMaterno }}</td>
                                            <td>{{ $infante->edad }}</td>
                                            <td>
                                                @can('ver-infante')
                                                    <a class="btn btn-secondary"
                                                        href="{{ route('infantes.show', $infante->id) }}">Ver</a>
                                                @endcan
                                                @can('editar-infante')
                                                    <a class="btn btn-success"
                                                        href="{{ route('infantes.edit', $infante->id) }}">Editar</a>
                                                @endcan
                                                @can('borrar-infante')
                                                    {!! Form::open([
                                                        'method' => 'DELETE',
                                                        'route' => ['infantes.destroy', $infante->id],
                                                        'style' => 'display:inline',
                                                    ]) !!}
                                                    {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                                    {!! Form::close() !!}
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                                {!! $infantes->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
