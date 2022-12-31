@extends('layouts.app')

@section('content')
    <section class="section">

        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                {{--
                                <div class="col-md-4 col-xl-4">
                                    <div class="card bg-c-blue order-card">
                                        <div class="card-block">
                                            <h5>Usuarios</h5>
                                            @php
                                                use App\Models\User;
                                                $cant_usuarios = User::count();
                                            @endphp
                                            <h2 class="text-right"><i
                                                    class="fa fa-users f-left"></i><span>{{ $cant_usuarios }}</span></h2>
                                            <p class="m-b-0 text-right"><a href="/usuarios" class="text-white">Ver más</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xl-4">
                                    <div class="card bg-c-green order-card">
                                        <div class="card-block">
                                            <h5>Roles</h5>
                                            @php
                                                use Spatie\Permission\Models\Role;
                                                $cant_roles = Role::count();
                                            @endphp
                                            <h2 class="text-right"><i
                                                    class="fa fa-user-lock f-left"></i><span>{{ $cant_roles }}</span></h2>
                                            <p class="m-b-0 text-right"><a href="/roles" class="text-white">Ver más</a></p>
                                        </div>
                                    </div>
                                </div>
                                --}}
                                <div class="col-md-4 col-xl-4">
                                    <div class="card bg-c-pink order-card">
                                        <div class="card-block">
                                            <h5>Personal</h5>
                                            @php
                                                use App\Models\Personal;
                                                $cant_blogs = Personal::count();
                                            @endphp
                                            <h2 class="text-right"><i
                                                    class="fas fa-people-carry f-left"></i><span>{{ $cant_blogs }}</span>
                                            </h2>
                                            <p class="m-b-0 text-right"><a href="/personal" class="text-white">Ver más</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-xl-4">
                                    <div class="card bg-c-blue order-card">
                                        <div class="card-block">
                                            <h5>Infantes</h5>
                                            @php
                                                use App\Models\Infante;
                                                $cant_blogs = Infante::count();
                                            @endphp
                                            <h2 class="text-right"><i
                                                    class="fas fa-child f-left"></i><span>{{ $cant_blogs }}</span></h2>
                                            <p class="m-b-0 text-right"><a href="/infantes" class="text-white">Ver más</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-xl-4">
                                    <div class="card bg-c-green order-card">
                                        <div class="card-block">
                                            <h5>Evaluaciones</h5>
                                            @php
                                                use App\Models\Evaluacion;
                                                $cant_blogs = Evaluacion::count();
                                            @endphp
                                            <h2 class="text-right"><i
                                                    class="fas fa-file f-left"></i><span>{{ $cant_blogs }}</span></h2>
                                            <p class="m-b-0 text-right"><a href="/evaluaciones" class="text-white">Ver
                                                    más</a></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
                    <div class="card">
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Nombre</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Rango de Edad</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Cantidad</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Sala 1</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <span class="text-xs font-weight-bold">6 meses - 1 año y 3
                                                            meses</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                @php
                                                    //use App\Models\Infante;
                                                    $cant_blogs = Infante::where('sala', 1)->count();
                                                @endphp
                                                <span class="text-xs font-weight-bold">{{ $cant_blogs }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Sala 2</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <span class="text-xs font-weight-bold">1 año y 3 meses - 2 años y 4
                                                            meses</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                @php
                                                    //use App\Models\Infante;
                                                    $cant_blogs = Infante::where('sala', 2)->count();
                                                @endphp
                                                <span class="text-xs font-weight-bold">{{ $cant_blogs }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Sala 3</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <span class="text-xs font-weight-bold">2 años y 4 meses - 3 años y 4
                                                            meses</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                @php
                                                    //use App\Models\Infante;
                                                    $cant_blogs = Infante::where('sala', 3)->count();
                                                @endphp
                                                <span class="text-xs font-weight-bold">{{ $cant_blogs }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Sala 4</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <span class="text-xs font-weight-bold">3 años y 3 meses - 4 años y 4
                                                            meses</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                @php
                                                    //use App\Models\Infante;
                                                    $cant_blogs = Infante::where('sala', 4)->count();
                                                @endphp
                                                <span class="text-xs font-weight-bold">{{ $cant_blogs }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Sala 5</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <span class="text-xs font-weight-bold">4 años y 3 meses - 5
                                                            años</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                @php
                                                    //use App\Models\Infante;
                                                    $cant_blogs = Infante::where('sala', 5)->count();
                                                @endphp
                                                <span class="text-xs font-weight-bold">{{ $cant_blogs }}</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-header pb-0">
                            <h6>Escala Abreviada de Desarrollo</h6>
                        </div>
                        <div class="card-body p-3">
                            <div class="timeline timeline-one-side">
                                <div class="timeline-block mb-3">
                                    <span class="timeline-step">
                                        <i class="material-icons text-success text-gradient">Motricidad Gruesa</i>
                                    </span>
                                    <div class="timeline-content">
                                        <p><small>maduración neurológica, control de tono y postura,
                                                coordinación motriz de cabeza, miembros, tronco</small></p>
                                    </div>
                                    <div class="timeline-block mb-3">
                                        <span class="timeline-step">
                                            <i class="material-icons text-danger text-gradient">Motricidad Fino
                                                Adaptativa</i>
                                        </span>
                                        <div class="timeline-content">
                                            <p><small>capacidad de coordinación de movimientos específicos,
                                                    coordinación intersensorial : ojo-mano, control y precisión para la
                                                    solución de problemas
                                                    que involucran prehensión fina, cálculo de distancias y seguimiento
                                                    visual</small></p>
                                        </div>
                                    </div>
                                    <div class="timeline-block mb-3">
                                        <span class="timeline-step">
                                            <i class="material-icons text-info text-gradient">Audición y Lenguaje</i>
                                        </span>
                                        <div class="timeline-content">
                                            <p><small>evolución y perfeccionamiento del habla y el lenguaje:
                                                    orientación auditiva, intención comunicativa, vocalización y
                                                    articulación de fonemas,
                                                    formación de palabras, comprensión de vocabulario, uso de frases simples
                                                    y complejas,
                                                    nominación, comprensión de instrucciones, expresión espontánea</small>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="timeline-block mb-3">
                                        <span class="timeline-step">
                                            <i class="material-icons text-warning text-gradient">Personal Social</i>
                                        </span>
                                        <div class="timeline-content">
                                            <p><small>procesos de iniciación y respuesta a la interacción social,
                                                    dependencia-independencia, expresión de sentimientos y emociones,
                                                    aprendizaje de
                                                    pautas de comportamiento relacionadas con el autocuidado</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
