<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    {{--<a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>--}}
    @can('ver-rol')
    <a class="nav-link" href="/usuarios">
        <i class=" fas fa-users"></i><span>Usuarios</span>
    </a>
    <a class="nav-link" href="/roles">
        <i class=" fas fa-user-lock"></i><span>Roles</span>
    </a>
    @endcan
    <a class="nav-link" href="personal">
        <i class="fas fa-user"></i><span>Personal</span>
    </a>
    <a class="nav-link" href="infantes">
        <i class="fas fa-child"></i><span>Infantes</span>
    </a>
</li>
