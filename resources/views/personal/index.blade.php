@extends('layouts.app')
@section('title')
    Personal
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Personal</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @can('crear-personal')
                                <a class="btn btn-warning" href="{{ route('personal.create') }}">Nuevo</a>
                            @endcan
                            <table class="table table-striped mt-2">
                                <thead style="background-color: #5B5188">
                                    <th style="display: none">ID</th>
                                    <th style="color: #fff">Nombre</th>
                                    <th style="color: #fff">Celular</th>
                                    <th style="color: #fff">Cargo</th>
                                    <th style="color: #fff">Email</th>
                                    <th style="color: #fff">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($users as $usuario)
                                        <tr>
                                            <td style="display: none">{{ $usuario->id }}</td>
                                            <td>{{ $usuario->nombre }}</td>
                                            <td>{{ $usuario->telefono }}</td>
                                            <td>
                                                @if (!empty($usuario->user->getRoleNames()))
                                                    @foreach ($usuario->user->getRoleNames() as $rolNombre)
                                                        <h5><span class="badge badge-dark">{{ $rolNombre }}</span></h5>
                                                    @endforeach
                                                @endif
                                            </td>
                                            <td>{{ $usuario->user->email }}</td>
                                            <td>
                                                @can('editar-personal')
                                                    <a class="btn btn-success"
                                                        href="{{ route('personal.edit', $usuario->id) }}">Editar</a>
                                                @endcan
                                                {{-- <a class="btn btn-secondary" href="{{route('usuarios.show', $usuario->id)}}">Ver</a> --}}
                                                @can('borrar-personal')
                                                    {!! Form::open([
                                                        'method' => 'DELETE',
                                                        'route' => ['personal.destroy', $usuario->id],
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
                                {!! $users->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
