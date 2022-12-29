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
                            <a class="btn btn-warning" href="{{ route('usuarios.create')}}">Nuevo</a>
                            <table class="table table-striped mt-2">
                                <thead style="background-color: #5B5188">
                                    <th style="display: none">ID</th>
                                    <th style="color: #fff">Nombre</th>
                                    <th style="color: #fff">Email</th>
                                    <th style="color: #fff">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($users as $usuario)
                                        <tr>
                                            <td style="display: none">{{$usuario->id}}</td>
                                            <td>{{ $usuario->name }}</td>
                                            <td>{{ $usuario->email }}</td>
                                            <td>
                                                <a class="btn btn-success" href="{{route('usuarios.edit', $usuario->id)}}">Editar</a>
                                                {{--<a class="btn btn-secondary" href="{{route('usuarios.show', $usuario->id)}}">Ver</a>--}}
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['usuarios.destroy', $usuario->id], 'style'=>'display:inline']) !!}
                                                    {!! Form::submit('Borrar', ['class'=>'btn btn-danger']) !!}
                                                {!! Form::close() !!}
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
