<li class="menu-header">PRINCIPALES</li>
<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
    <a class="nav-link" href="/usuario">
        <i class=" fas fa-users"></i><span>Usuarios</span>
    </a>
    <a class="nav-link" href="/empresa">
        <i class="fas fa-landmark"></i><span>Empresas</span>
    </a>
    <a class="nav-link" href="/encuesta">
        <i class="fab fa-wpforms"></i><span>Aplicativo encuesta</span>
    </a>
</li>
<li class="menu-header">DIAGNÓSTICOS</li>
<li class="dropdown">
    <a href="" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i><span>Diagnostico</span></a>
    <ul class="dropdown-menu">
        <li>
            <a class="nav-link" href="/diagnostico">Diagnostico global</a>
        </li>
    </ul>
</li>
